<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Throttle\Throttler;
use Config\Services;

/**
 * Rate Limiting Filter
 * 
 * Protects the site from abuse by limiting request frequency.
 * Uses CodeIgniter's built-in Throttler class with cache backend.
 * 
 * Rate limits:
 * - General pages: 60 requests per minute per IP
 * - Form submissions (POST): 10 requests per minute per IP
 * - API endpoints: 30 requests per minute per IP
 * 
 * Cloudflare Integration:
 * When behind Cloudflare, the real client IP is retrieved from
 * CF-Connecting-IP header automatically.
 */
class RateLimitFilter implements FilterInterface
{
    /**
     * @var Throttler
     */
    protected $throttler;

    /**
     * Rate limit configurations
     */
    protected array $limits = [
        'general' => [
            'capacity' => 60,      // requests
            'seconds'  => 60,      // per minute
            'cost'     => 1,
        ],
        'form' => [
            'capacity' => 10,      // requests
            'seconds'  => 60,      // per minute
            'cost'     => 1,
        ],
        'strict' => [
            'capacity' => 5,       // requests
            'seconds'  => 60,      // per minute
            'cost'     => 1,
        ],
    ];

    public function __construct()
    {
        $this->throttler = Services::throttler();
    }

    /**
     * Get the real client IP, accounting for Cloudflare proxy
     */
    protected function getClientIP(RequestInterface $request): string
    {
        // Cloudflare passes real IP in CF-Connecting-IP header
        $cfIP = $request->getServer('HTTP_CF_CONNECTING_IP');
        if ($cfIP) {
            return $cfIP;
        }

        // Fallback to X-Forwarded-For (other proxies)
        $forwardedFor = $request->getServer('HTTP_X_FORWARDED_FOR');
        if ($forwardedFor) {
            // Take the first IP in the chain (original client)
            $ips = explode(',', $forwardedFor);
            return trim($ips[0]);
        }

        // Default to REMOTE_ADDR
        return $request->getIPAddress();
    }

    /**
     * Determine rate limit type based on request
     */
    protected function getLimitType(RequestInterface $request): string
    {
        $method = $request->getMethod();
        $uri = $request->getUri()->getPath();

        // Strict rate limiting for form submissions
        if ($method === 'POST') {
            // Extra strict for sensitive endpoints
            if (strpos($uri, 'submit') !== false) {
                return 'form';
            }
            return 'form';
        }

        return 'general';
    }

    /**
     * @param RequestInterface $request
     * @param array|null       $arguments
     *
     * @return RequestInterface|ResponseInterface|string|void
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        $clientIP = $this->getClientIP($request);
        $limitType = $this->getLimitType($request);
        $config = $this->limits[$limitType];

        // Sanitize IP for cache key (remove special characters)
        $sanitizedIP = preg_replace('/[^a-zA-Z0-9_]/', '_', $clientIP);

        // Create a unique key for this IP and limit type
        $throttleKey = "ratelimit_{$limitType}_{$sanitizedIP}";

        // Check if request is allowed
        if ($this->throttler->check($throttleKey, $config['capacity'], $config['seconds'], $config['cost']) === false) {
            // Get remaining time until rate limit resets
            $remainingTime = $this->throttler->getTokenTime();

            // Return 429 Too Many Requests
            $response = Services::response();
            $response->setStatusCode(429, 'Too Many Requests');
            $response->setHeader('Retry-After', (string) ceil($remainingTime));
            $response->setHeader('X-RateLimit-Limit', (string) $config['capacity']);
            $response->setHeader('X-RateLimit-Remaining', '0');
            $response->setHeader('X-RateLimit-Reset', (string) (time() + $remainingTime));

            // Check if request accepts JSON
            $acceptHeader = $request->getHeaderLine('Accept');
            if (strpos($acceptHeader, 'application/json') !== false) {
                $response->setJSON([
                    'status'  => 429,
                    'error'   => 'Too Many Requests',
                    'message' => 'Rate limit exceeded. Please slow down.',
                    'retry_after' => ceil($remainingTime),
                ]);
            } else {
                $response->setBody(
                    '<html><head><title>429 Too Many Requests</title></head>' .
                    '<body style="font-family: Arial, sans-serif; text-align: center; padding-top: 100px; background: #f5f5f5;">' .
                    '<h1 style="color: #ca912a;">429 - Too Many Requests</h1>' .
                    '<p style="color: #666;">You are making requests too quickly. Please wait a moment and try again.</p>' .
                    '<p style="color: #999; font-size: 14px;">Retry after: ' . ceil($remainingTime) . ' seconds</p>' .
                    '<p style="margin-top: 40px;"><a href="/" style="color: #ca912a; text-decoration: none;">← Return to Hex Forensics</a></p>' .
                    '</body></html>'
                );
                $response->setHeader('Content-Type', 'text/html');
            }

            return $response;
        }

        // Add rate limit headers to successful requests
        $remaining = max(0, $config['capacity'] - 1);
        $request->setHeader('X-RateLimit-Limit', (string) $config['capacity']);
        $request->setHeader('X-RateLimit-Remaining', (string) $remaining);

        return $request;
    }

    /**
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     * @param array|null        $arguments
     *
     * @return ResponseInterface|void
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Nothing to do after the request
        return $response;
    }
}

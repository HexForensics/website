<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

/**
 * Bot Detection Filter
 * 
 * Detects and blocks malicious bots and scrapers while allowing
 * legitimate search engine crawlers for SEO.
 * 
 * Features:
 * - Blocks known scraper User-Agents
 * - Whitelists SEO-critical crawlers (Googlebot, Bingbot, etc.)
 * - Detects suspicious request patterns
 * - Integrates with Cloudflare bot detection headers
 * 
 * Cloudflare Integration:
 * When using Cloudflare Bot Management, this filter respects
 * the CF-Bot-Score header for enhanced detection.
 */
class BotDetectionFilter implements FilterInterface
{
    /**
     * Known malicious bot/scraper User-Agent patterns
     * These will be blocked
     */
    protected array $blockedBots = [
        // Scraping tools
        'scrapy',
        'python-requests',
        'python-urllib',
        'java/',
        'libwww-perl',
        'wget',
        'curl/',
        'httpie',
        'go-http-client',
        'node-fetch',
        'axios/',
        'got/',
        
        // Known bad bots
        'ahrefsbot',
        'semrushbot',
        'dotbot',
        'rogerbot',
        'mj12bot',
        'blexbot',
        'megaindex',
        'ltx71',
        'seznambot',
        'yandexbot',
        'baiduspider',
        'sogou',
        
        // Generic scrapers
        'httrack',
        'webcopier',
        'webripper',
        'websiteextractor',
        'sitesnagger',
        'blackwidow',
        'teleport',
        'offline explorer',
        'websitequester',
        'webstripper',
        'webzip',
        'leacher',
        'sitesucker',
        'pavuk',
        
        // Headless browsers (often used for scraping)
        'headlesschrome',
        'phantomjs',
        'selenium',
        'puppeteer',
        'playwright',
        
        // Content theft indicators
        'contentking',
        'screaming frog',
        
        // AI training crawlers
        'gptbot',
        'chatgpt-user',
        'ccbot',
        'anthropic-ai',
        'claude-web',
        'bytespider',
        'cohere-ai',
        'diffbot',
        'perplexitybot',
        'youbot',
        
        // Empty or suspicious
        '-', // Single dash UA
    ];

    /**
     * Whitelisted legitimate crawlers for SEO
     * These are allowed through even if they match other patterns
     */
    protected array $whitelistedBots = [
        // Google
        'googlebot',
        'google-inspectiontool',
        'google-structured-data-testing-tool',
        'googlebot-image',
        'googlebot-news',
        'googlebot-video',
        'adsbot-google',
        'mediapartners-google',
        'apis-google',
        
        // Microsoft/Bing
        'bingbot',
        'msnbot',
        'bingpreview',
        'adidxbot',
        
        // Other legitimate search engines
        'duckduckbot',
        'slurp', // Yahoo
        'facebot',
        'facebookexternalhit',
        'linkedinbot',
        'twitterbot',
        'pinterestbot',
        'whatsapp',
        'telegrambot',
        'applebot',
        
        // Site monitoring (legitimate)
        'uptimerobot',
        'pingdom',
        'statuscake',
        
        // Cloudflare
        'cloudflare',
        'cf-traffic-manager',
        
        // Web archives (optional - remove if you don't want archiving)
        'archive.org_bot',
        'ia_archiver',
    ];

    /**
     * Suspicious request patterns that indicate scraping
     */
    protected array $suspiciousPatterns = [
        // Rapid sequential page requests
        'missing_accept_header'   => true,
        'missing_accept_language' => true,
        'missing_accept_encoding' => true,
    ];

    /**
     * Get the real client IP, accounting for Cloudflare proxy
     */
    protected function getClientIP(RequestInterface $request): string
    {
        $cfIP = $request->getServer('HTTP_CF_CONNECTING_IP');
        if ($cfIP) {
            return $cfIP;
        }

        $forwardedFor = $request->getServer('HTTP_X_FORWARDED_FOR');
        if ($forwardedFor) {
            $ips = explode(',', $forwardedFor);
            return trim($ips[0]);
        }

        return $request->getIPAddress();
    }

    /**
     * Check if User-Agent matches any whitelisted bot
     */
    protected function isWhitelistedBot(string $userAgent): bool
    {
        $userAgentLower = strtolower($userAgent);

        foreach ($this->whitelistedBots as $bot) {
            if (strpos($userAgentLower, $bot) !== false) {
                return true;
            }
        }

        return false;
    }

    /**
     * Check if User-Agent matches any blocked bot pattern
     */
    protected function isBlockedBot(string $userAgent): bool
    {
        $userAgentLower = strtolower($userAgent);

        // Empty or very short User-Agent is suspicious
        if (strlen($userAgent) < 10) {
            return true;
        }

        foreach ($this->blockedBots as $bot) {
            if (strpos($userAgentLower, $bot) !== false) {
                return true;
            }
        }

        return false;
    }

    /**
     * Check for suspicious request patterns
     */
    protected function hasSuspiciousPattern(RequestInterface $request): bool
    {
        $suspicionScore = 0;

        // Check for missing standard headers
        if (empty($request->getHeaderLine('Accept'))) {
            $suspicionScore += 2;
        }

        if (empty($request->getHeaderLine('Accept-Language'))) {
            $suspicionScore += 1;
        }

        if (empty($request->getHeaderLine('Accept-Encoding'))) {
            $suspicionScore += 1;
        }

        // Check for connection header (browsers usually include this)
        if (empty($request->getHeaderLine('Connection'))) {
            $suspicionScore += 1;
        }

        // If suspicion score is high, request is likely from a bot
        return $suspicionScore >= 4;
    }

    /**
     * Check Cloudflare Bot Score if available
     * 
     * CF-Bot-Score ranges from 1-99:
     * 1-29: Likely automated
     * 30-99: Likely human
     */
    protected function checkCloudflareBot(RequestInterface $request): ?bool
    {
        $botScore = $request->getServer('HTTP_CF_BOT_SCORE');
        
        if ($botScore === null) {
            return null; // Cloudflare bot scoring not available
        }

        $score = (int) $botScore;
        
        // Score below 30 indicates automated traffic
        if ($score < 30) {
            return true; // Is a bot
        }

        return false; // Not a bot
    }

    /**
     * @param RequestInterface $request
     * @param array|null       $arguments
     *
     * @return RequestInterface|ResponseInterface|string|void
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        $userAgent = $request->getUserAgent()->getAgentString() ?? '';

        // First, check if it's a whitelisted bot (SEO crawlers)
        if ($this->isWhitelistedBot($userAgent)) {
            // Allow whitelisted bots through
            return $request;
        }

        // Check Cloudflare bot score if available
        $cfBotCheck = $this->checkCloudflareBot($request);
        if ($cfBotCheck === true) {
            return $this->blockRequest($request, 'Automated traffic detected');
        }

        // Check if User-Agent matches blocked patterns
        if ($this->isBlockedBot($userAgent)) {
            return $this->blockRequest($request, 'Access denied');
        }

        // Check for suspicious request patterns
        if ($this->hasSuspiciousPattern($request)) {
            // Log suspicious request but allow it (soft block)
            log_message('warning', 'Suspicious request pattern detected from IP: ' . $this->getClientIP($request) . ' UA: ' . $userAgent);
        }

        return $request;
    }

    /**
     * Generate block response
     */
    protected function blockRequest(RequestInterface $request, string $message): ResponseInterface
    {
        $response = Services::response();
        $response->setStatusCode(403, 'Forbidden');
        
        // Check if request accepts JSON
        $acceptHeader = $request->getHeaderLine('Accept');
        if (strpos($acceptHeader, 'application/json') !== false) {
            $response->setJSON([
                'status'  => 403,
                'error'   => 'Forbidden',
                'message' => $message,
            ]);
        } else {
            $response->setBody(
                '<html><head><title>403 Forbidden</title>' .
                '<meta name="robots" content="noindex, nofollow"></head>' .
                '<body style="font-family: Arial, sans-serif; text-align: center; padding-top: 100px; background: #f5f5f5;">' .
                '<h1 style="color: #ca912a;">403 - Access Denied</h1>' .
                '<p style="color: #666;">Your request has been blocked.</p>' .
                '<p style="color: #999; font-size: 14px;">If you believe this is an error, please contact us.</p>' .
                '<p style="margin-top: 40px;"><a href="mailto:info@hexforensics.com" style="color: #ca912a; text-decoration: none;">Contact Support</a></p>' .
                '</body></html>'
            );
            $response->setHeader('Content-Type', 'text/html');
        }

        // Log blocked request
        log_message('notice', 'Blocked bot request from IP: ' . $this->getClientIP($request) . ' UA: ' . ($request->getUserAgent()->getAgentString() ?? 'none'));

        return $response;
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

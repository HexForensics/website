<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Turnstile extends BaseConfig
{
    /**
     * Turnstile Site Key (Public)
     * This is embedded in your frontend HTML
     * 
     * @var string
     */
    public string $siteKey = '';

    /**
     * Turnstile Secret Key (Private)
     * Used for server-side verification - NEVER expose this
     * 
     * @var string
     */
    public string $secretKey = '';

    /**
     * Turnstile Verification API Endpoint
     * 
     * @var string
     */
    public string $verifyUrl = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';

    /**
     * Widget appearance
     * Options: 'light', 'dark', 'auto'
     * 
     * @var string
     */
    public string $theme = 'light';

    /**
     * Widget size
     * Options: 'normal', 'compact'
     * 
     * @var string
     */
    public string $size = 'normal';

    /**
     * Response field name
     * The form field name that contains the Turnstile response token
     * 
     * @var string
     */
    public string $responseField = 'cf-turnstile-response';

    public function __construct()
    {
        parent::__construct();

        // Load from environment variables
        $this->siteKey = env('turnstile.siteKey', $this->siteKey);
        $this->secretKey = env('turnstile.secretKey', $this->secretKey);
    }

    /**
     * Verify a Turnstile token
     * 
     * @param string $token The token from the form submission
     * @param string|null $remoteIP The user's IP address (optional, recommended)
     * @return array ['success' => bool, 'error' => string|null]
     */
    public function verify(string $token, ?string $remoteIP = null): array
    {
        if (empty($this->secretKey)) {
            log_message('error', 'Turnstile secret key not configured');
            return [
                'success' => false,
                'error'   => 'CAPTCHA verification not configured',
            ];
        }

        if (empty($token)) {
            return [
                'success' => false,
                'error'   => 'CAPTCHA response missing. Please complete the challenge.',
            ];
        }

        // Build verification request
        $data = [
            'secret'   => $this->secretKey,
            'response' => $token,
        ];

        if ($remoteIP) {
            $data['remoteip'] = $remoteIP;
        }

        // Make API request
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->verifyUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);

        if ($error) {
            log_message('error', 'Turnstile API error: ' . $error);
            return [
                'success' => false,
                'error'   => 'CAPTCHA verification failed. Please try again.',
            ];
        }

        if ($httpCode !== 200) {
            log_message('error', 'Turnstile API returned HTTP ' . $httpCode);
            return [
                'success' => false,
                'error'   => 'CAPTCHA verification service unavailable.',
            ];
        }

        $result = json_decode($response, true);

        if (!$result || !isset($result['success'])) {
            log_message('error', 'Turnstile API returned invalid response: ' . $response);
            return [
                'success' => false,
                'error'   => 'CAPTCHA verification failed.',
            ];
        }

        if (!$result['success']) {
            $errorCodes = $result['error-codes'] ?? [];
            log_message('notice', 'Turnstile verification failed: ' . implode(', ', $errorCodes));
            return [
                'success' => false,
                'error'   => 'CAPTCHA verification failed. Please try again.',
            ];
        }

        return [
            'success' => true,
            'error'   => null,
        ];
    }

    /**
     * Check if Turnstile is properly configured
     * 
     * @return bool
     */
    public function isConfigured(): bool
    {
        return !empty($this->siteKey) && !empty($this->secretKey);
    }

    /**
     * Get the HTML widget for embedding in forms
     * 
     * @param array $options Additional options for the widget
     * @return string HTML to embed in form
     */
    public function widget(array $options = []): string
    {
        if (empty($this->siteKey)) {
            return '<!-- Turnstile not configured -->';
        }

        $theme = $options['theme'] ?? $this->theme;
        $size = $options['size'] ?? $this->size;

        return sprintf(
            '<div class="cf-turnstile" data-sitekey="%s" data-theme="%s" data-size="%s"></div>',
            htmlspecialchars($this->siteKey, ENT_QUOTES, 'UTF-8'),
            htmlspecialchars($theme, ENT_QUOTES, 'UTF-8'),
            htmlspecialchars($size, ENT_QUOTES, 'UTF-8')
        );
    }
}

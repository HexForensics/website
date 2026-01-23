# Security Posture Document

**Hex Forensics Website**  
**Document Version:** 1.1.0  
**Last Updated:** 2026-01-23  
**Classification:** Internal Use  

---

## Document History

| Version | Date | Author | Changes |
|---------|------|--------|---------|
| 1.1.0 | 2026-01-23 | Security Team | Updated CSP implementation to use nonce-based inline scripts |
| 1.0.0 | 2026-01-22 | Security Team | Initial security posture documentation |

---

## Executive Summary

This document outlines the comprehensive security measures implemented on the Hex Forensics website. The security architecture follows a defense-in-depth approach with multiple layers of protection including server-side filters, client-side protections, HTTP security headers, and provisions for Cloudflare integration.

### Security Status Overview

| Category | Status | Notes |
|----------|--------|-------|
| **Anti-Bot/Scraping** | ✅ Active | Server-side bot detection + rate limiting |
| **Form Protection** | ✅ Active | CSRF + input validation |
| **CAPTCHA (Turnstile)** | ⏳ Pending | Code ready, awaiting Cloudflare activation |
| **Content Protection** | ✅ Active | Client-side copy/paste prevention |
| **Security Headers** | ✅ Active | Full suite of HTTP security headers |
| **Cloudflare WAF** | ⏳ Pending | Documentation ready, awaiting deployment |

---

## Table of Contents

1. [Anti-Bot & Anti-Scraping Measures](#1-anti-bot--anti-scraping-measures)
2. [Form Protection](#2-form-protection)
3. [Content Protection (Browser Limitations)](#3-content-protection-browser-limitations)
4. [HTTP Security Headers](#4-http-security-headers)
5. [Transport Security](#5-transport-security)
6. [Input Validation & Sanitization](#6-input-validation--sanitization)
7. [Rate Limiting](#7-rate-limiting)
8. [Cloudflare Integration Status](#8-cloudflare-integration-status)
9. [Security File Reference](#9-security-file-reference)
10. [Pending Actions](#10-pending-actions)

---

## 1. Anti-Bot & Anti-Scraping Measures

### 1.1 Server-Side Bot Detection Filter

**File:** [app/Filters/BotDetectionFilter.php](../../app/Filters/BotDetectionFilter.php)  
**Status:** ✅ Active  

A CodeIgniter filter that inspects incoming requests and blocks known malicious bots while preserving SEO by whitelisting legitimate search engine crawlers.

#### Blocked User-Agents

| Category | Examples |
|----------|----------|
| **Scraping Tools** | scrapy, python-requests, python-urllib, wget, curl, httpie, axios, node-fetch |
| **Aggressive SEO Bots** | AhrefsBot, SemrushBot, MJ12bot, DotBot, BLEXBot, Megaindex |
| **Headless Browsers** | HeadlessChrome, PhantomJS, Selenium, Puppeteer, Playwright |
| **Site Copiers** | HTTrack, WebCopier, SiteSucker, WebZip, Teleport, BlackWidow |
| **AI Training Crawlers** | GPTBot, CCBot, anthropic-ai, Claude-Web, Bytespider |

#### Whitelisted SEO Crawlers

| Search Engine | Bots Allowed |
|---------------|--------------|
| **Google** | Googlebot, Googlebot-Image, Googlebot-News, AdsBot-Google, APIs-Google |
| **Microsoft** | Bingbot, MSNBot, BingPreview, AdIdxBot |
| **Social Media** | FacebookExternalHit, TwitterBot, LinkedInBot, PinterestBot |
| **Other Legitimate** | DuckDuckBot, Slurp (Yahoo), AppleBot, WhatsApp, TelegramBot |
| **Monitoring** | UptimeRobot, Pingdom, StatusCake |

#### Detection Methods

1. **User-Agent Pattern Matching** — Checks against blocked/whitelisted bot lists
2. **Cloudflare Bot Score** — Respects `CF-Bot-Score` header when behind Cloudflare
3. **Request Header Analysis** — Detects missing standard headers (Accept, Accept-Language, Accept-Encoding)
4. **Suspicion Scoring** — Aggregates anomalies to identify likely bots

#### Response to Blocked Requests

- HTTP 403 Forbidden response
- Custom error page with contact information
- Request logged for security monitoring
- `noindex, nofollow` meta tag to prevent indexing of error page

### 1.2 Robots.txt Configuration

**File:** [public/robots.txt](../../public/robots.txt)  
**Status:** ✅ Active  

```text
# Allowed for all legitimate crawlers
User-agent: *
Allow: /

# Blocked system paths
Disallow: /app/
Disallow: /system/
Disallow: /writable/
Disallow: /vendor/
Disallow: /.env

# Crawl-delay for aggressive bots
User-agent: AhrefsBot
Crawl-delay: 10

# Completely blocked bots
User-agent: MJ12bot
Disallow: /

User-agent: GPTBot
Disallow: /
```

---

## 2. Form Protection

### 2.1 CSRF Protection

**File:** [app/Config/Filters.php](../../app/Config/Filters.php)  
**Status:** ✅ Active  

Cross-Site Request Forgery protection is enabled globally for all POST requests.

#### Configuration

```php
'csrf' => ['except' => ['sitemap.xml', 'sitemap', 'robots.txt']],
```

#### Implementation

- Token-based CSRF protection using CodeIgniter's built-in system
- Tokens regenerated on each request for maximum security
- Forms include `<?= csrf_field() ?>` to embed token

#### Protected Forms

| Form | Location | CSRF Status |
|------|----------|-------------|
| Contact Form | `/contact` | ✅ Protected |
| Report Theft Form | `/report-theft` | ✅ Protected |

### 2.2 Cloudflare Turnstile CAPTCHA

**File:** [app/Config/Turnstile.php](../../app/Config/Turnstile.php)  
**Status:** ⏳ Code Ready — Awaiting Cloudflare Activation  

Turnstile is Cloudflare's privacy-preserving CAPTCHA alternative.

#### Current Implementation

- Turnstile configuration class created
- Widget placeholders added to forms
- Server-side verification logic implemented
- CSP headers configured for `challenges.cloudflare.com`

#### Activation Required

To activate Turnstile:

1. Create widget in Cloudflare Dashboard → Turnstile
2. Add keys to `.env`:
   ```dotenv
   turnstile.siteKey = 'your_site_key'
   turnstile.secretKey = 'your_secret_key'
   ```
3. See [docs/cloudflare/TURNSTILE_SETUP.md](../cloudflare/TURNSTILE_SETUP.md)

### 2.3 Input Validation

**File:** [app/Controllers/Home.php](../../app/Controllers/Home.php)  
**Status:** ✅ Active  

All form submissions undergo server-side validation:

#### Contact Form Validation Rules

```php
$rules = [
    'name'    => 'required|min_length[2]|max_length[100]',
    'email'   => 'required|valid_email|max_length[150]',
    'phone'   => 'permit_empty|max_length[20]',
    'title'   => 'required|min_length[3]|max_length[200]',
    'message' => 'required|min_length[10]|max_length[5000]',
];
```

#### Report Theft Form Validation Rules

```php
$rules = [
    'reporter_name'  => 'required|min_length[2]|max_length[100]',
    'reporter_email' => 'required|valid_email|max_length[150]',
    'infringing_url' => 'required|valid_url|max_length[500]',
    'original_url'   => 'required|valid_url|max_length[500]',
    'theft_type'     => 'required|in_list[text,images,logo,services,methodology,multiple,other]',
    'details'        => 'required|min_length[20]|max_length[5000]',
    'evidence_links' => 'permit_empty|max_length[2000]',
];
```

### 2.4 Output Escaping

All user input is escaped before display or email using CodeIgniter's `esc()` function:

```php
$data = [
    'name'    => esc($this->request->getPost('name')),
    'email'   => esc($this->request->getPost('email')),
    // ...
];
```

---

## 3. Content Protection (Browser Limitations)

### 3.1 Client-Side Copy Prevention

**File:** [app/Views/layout/header.php](../../app/Views/layout/header.php)  
**Status:** ✅ Active  

JavaScript-based content protection to deter casual copying of website content.

#### Disabled Browser Actions

| Action | Keyboard Shortcut | Status |
|--------|-------------------|--------|
| Copy | Ctrl+C | ❌ Blocked |
| Cut | Ctrl+X | ❌ Blocked |
| Paste | Ctrl+V | ❌ Blocked (outside forms) |
| Select All | Ctrl+A | ❌ Blocked |
| View Source | Ctrl+U | ❌ Blocked |
| Save Page | Ctrl+S | ❌ Blocked |
| Developer Tools | F12 | ❌ Blocked |
| Inspect Element | Ctrl+Shift+I | ❌ Blocked |
| Console | Ctrl+Shift+J | ❌ Blocked |
| Element Inspector | Ctrl+Shift+C | ❌ Blocked |
| Right-Click Context Menu | Right Mouse | ❌ Blocked |

#### Whitelisted Elements (Copy Allowed)

The following elements allow normal copy/paste for usability:

- `input[type="text"]`
- `input[type="email"]`
- `input[type="tel"]`
- `input[type="number"]`
- `input[type="password"]`
- `textarea`
- Elements with class `.allow-copy`
- Elements with class `.contact-info`
- Elements with class `.email-address`
- Elements with class `.phone-number`

### 3.2 CSS-Based Text Selection Prevention

```css
html, body {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
```

### 3.3 Image Protection

```css
img {
    pointer-events: none;
    -webkit-user-drag: none;
    -khtml-user-drag: none;
    -moz-user-drag: none;
    user-drag: none;
}
```

### 3.4 Developer Console Warning

When users open browser developer tools, a warning is displayed:

```
⚠️ STOP!
This is a browser feature intended for developers only.
Unauthorized copying, scraping, or extraction of website content is strictly prohibited.
Violations may result in legal action.
© 2026 Hex Forensics - All Rights Reserved
```

### 3.5 Limitations of Client-Side Protection

> ⚠️ **Important:** Client-side protections are deterrents, not absolute security measures. Determined attackers can bypass these using:
> - Browser extensions
> - Direct HTTP requests
> - JavaScript disabled browsing
> - Automated scraping tools
>
> Server-side protections (bot detection, rate limiting) provide the primary defense layer.

---

## 4. HTTP Security Headers

### 4.1 Security Headers Configuration

**File:** [public/.htaccess](../../public/.htaccess)  
**Status:** ✅ Active  

| Header | Value | Purpose |
|--------|-------|---------|
| **Strict-Transport-Security** | `max-age=31536000; includeSubDomains; preload` | Force HTTPS for 1 year |
| **X-Frame-Options** | `SAMEORIGIN` | Prevent clickjacking |
| **X-Content-Type-Options** | `nosniff` | Prevent MIME sniffing |
| **X-XSS-Protection** | `1; mode=block` | Legacy XSS filter |
| **Referrer-Policy** | `strict-origin-when-cross-origin` | Control referrer information |
| **Permissions-Policy** | `geolocation=(), microphone=(), camera=()` | Restrict browser features |

### 4.2 Content Security Policy (CSP)

**File:** [app/Config/ContentSecurityPolicy.php](../../app/Config/ContentSecurityPolicy.php)  
**Status:** ✅ Active (Managed by CodeIgniter)  

CSP is managed by CodeIgniter's `ContentSecurityPolicy` class with **dynamic nonce generation** for inline scripts. The `secureheaders` filter automatically generates unique nonces for each page load and replaces `{csp-script-nonce}` placeholders in HTML.

```
default-src 'self';
script-src 'self' https://cdnjs.cloudflare.com https://challenges.cloudflare.com 'unsafe-inline' 'nonce-{random}';
style-src 'self' 'unsafe-inline' https://fonts.googleapis.com;
font-src 'self' https://fonts.gstatic.com data:;
img-src 'self' data: https:;
connect-src 'self' https://challenges.cloudflare.com;
frame-src https://challenges.cloudflare.com;
frame-ancestors 'none';
base-uri 'self';
object-src 'none';
upgrade-insecure-requests
```

#### CSP Directives Explained

| Directive | Purpose |
|-----------|---------|
| `default-src 'self'` | Only allow resources from same origin by default |
| `script-src` | Allow scripts from self, CDN, Cloudflare + nonce-based inline scripts |
| `'unsafe-inline'` | Fallback for older browsers that don't support nonces |
| `'nonce-{random}'` | Dynamic nonce for inline scripts (auto-generated per page load) |
| `frame-ancestors 'none'` | Prevent page from being embedded in iframes |
| `object-src 'none'` | Block Flash and other plugins |
| `upgrade-insecure-requests` | Auto-upgrade HTTP to HTTPS |

#### Nonce Implementation

All inline scripts use the nonce tag:

```html
<script nonce="{csp-script-nonce}">
    // Your inline JavaScript here
</script>
```

CodeIgniter's `autoNonce = true` setting automatically:
1. Generates a cryptographically secure random nonce
2. Replaces `{csp-script-nonce}` in HTML with the actual nonce
3. Adds the nonce to the CSP header sent to the browser

> ⚠️ **Important:** CSP is NOT set in `.htaccess` to allow CodeIgniter's dynamic nonce generation. Static CSP headers would break inline scripts.

### 4.3 Server Information Removal

Headers removed to prevent technology disclosure:

- `X-Powered-By` (PHP version)
- `Server` (Web server info)
- `X-Turbo-Charged-By` (LiteSpeed info)

### 4.4 Directory Browsing

```apache
Options -Indexes
```

Directory listing is disabled to prevent information disclosure.

---

## 5. Transport Security

### 5.1 HTTPS Enforcement

**File:** [app/Config/Filters.php](../../app/Config/Filters.php)  
**Status:** ✅ Active (Production Only)  

HTTPS is enforced via the `forcehttps` filter, which is conditionally applied:

```php
// Only force HTTPS in production
if (ENVIRONMENT === 'production') {
    array_unshift($this->required['before'], 'forcehttps');
}
```

### 5.2 Secure Cookies

**File:** [app/Config/Cookie.php](../../app/Config/Cookie.php)  
**Status:** ✅ Active (Production Only)  

```php
// Enable secure cookies only in production
if (ENVIRONMENT === 'production') {
    $this->secure = true;
}
```

| Setting | Development | Production |
|---------|-------------|------------|
| Secure Flag | `false` | `true` |
| HTTPOnly | `true` | `true` |
| SameSite | `Lax` | `Lax` |

---

## 6. Input Validation & Sanitization

### 6.1 Invalid Characters Filter

**Status:** ✅ Active  

CodeIgniter's built-in `invalidchars` filter is enabled globally to remove potentially dangerous characters from input.

### 6.2 Email Security

**File:** [app/Controllers/Home.php](../../app/Controllers/Home.php)  
**Status:** ✅ Active  

To prevent email header injection and spoofing:

```php
// Use company email as From, user email as Reply-To
$email->setFrom('info@hexforensics.com', 'Hex Forensics Website');
$email->setReplyTo($data['email'], $data['name']);
```

---

## 7. Rate Limiting

### 7.1 Server-Side Rate Limiting

**File:** [app/Filters/RateLimitFilter.php](../../app/Filters/RateLimitFilter.php)  
**Status:** ✅ Active  

Uses CodeIgniter's Throttler class with cache backend.

#### Rate Limits

| Type | Limit | Window | Applied To |
|------|-------|--------|------------|
| **General** | 60 requests | 1 minute | All GET requests |
| **Form Submission** | 10 requests | 1 minute | All POST requests |
| **Strict** | 5 requests | 1 minute | Sensitive endpoints |

#### Cloudflare IP Detection

The filter correctly identifies client IPs when behind Cloudflare:

```php
// Cloudflare passes real IP in CF-Connecting-IP header
$cfIP = $request->getServer('HTTP_CF_CONNECTING_IP');
if ($cfIP) {
    return $cfIP;
}
```

#### Rate Limit Response

- HTTP 429 Too Many Requests
- `Retry-After` header with reset time
- `X-RateLimit-Limit`, `X-RateLimit-Remaining`, `X-RateLimit-Reset` headers
- User-friendly error page

---

## 8. Cloudflare Integration Status

### 8.1 Current Status

| Feature | Implementation Status | Activation Status |
|---------|----------------------|-------------------|
| **Turnstile CAPTCHA** | ✅ Code Complete | ⏳ Awaiting Keys |
| **Bot Score Integration** | ✅ Code Complete | ⏳ Awaiting Cloudflare Proxy |
| **WAF Rules** | 📄 Documented | ⏳ Awaiting Deployment |
| **DDoS Protection** | 📄 Documented | ⏳ Awaiting Deployment |
| **Rate Limiting (Edge)** | 📄 Documented | ⏳ Awaiting Deployment |

### 8.2 CSP Preparation for Cloudflare

The Content Security Policy already includes Cloudflare domains:

- `script-src`: `https://challenges.cloudflare.com`
- `frame-src`: `https://challenges.cloudflare.com`
- `connect-src`: `https://challenges.cloudflare.com`

### 8.3 Activation Documentation

Complete setup guides are available:

- [TURNSTILE_SETUP.md](../cloudflare/TURNSTILE_SETUP.md) — CAPTCHA configuration
- [WAF_CONFIGURATION.md](../cloudflare/WAF_CONFIGURATION.md) — WAF, DDoS, bot management

---

## 9. Security File Reference

### 9.1 Configuration Files

| File | Purpose |
|------|---------|
| [app/Config/Filters.php](../../app/Config/Filters.php) | Filter registration and configuration |
| [app/Config/Cookie.php](../../app/Config/Cookie.php) | Cookie security settings |
| [app/Config/Security.php](../../app/Config/Security.php) | CSRF and security settings |
| [app/Config/Turnstile.php](../../app/Config/Turnstile.php) | Cloudflare Turnstile configuration |
| [app/Config/ContentSecurityPolicy.php](../../app/Config/ContentSecurityPolicy.php) | CSP configuration |

### 9.2 Security Filters

| File | Purpose |
|------|---------|
| [app/Filters/RateLimitFilter.php](../../app/Filters/RateLimitFilter.php) | Request rate limiting |
| [app/Filters/BotDetectionFilter.php](../../app/Filters/BotDetectionFilter.php) | Bot/scraper detection and blocking |

### 9.3 Server Configuration

| File | Purpose |
|------|---------|
| [public/.htaccess](../../public/.htaccess) | Apache security headers (HSTS, X-Frame-Options, etc.) |
| [public/robots.txt](../../public/robots.txt) | Crawler access control |

### 9.4 Views with Security Features

| File | Purpose |
|------|---------|
| [app/Views/layout/header.php](../../app/Views/layout/header.php) | Client-side content protection scripts |
| [app/Views/pages/contact.php](../../app/Views/pages/contact.php) | CSRF-protected contact form |
| [app/Views/pages/report_theft.php](../../app/Views/pages/report_theft.php) | CSRF-protected report form |

---

## 10. Pending Actions

### 10.1 High Priority

| Action | Owner | Target Date |
|--------|-------|-------------|
| Activate Cloudflare Turnstile | DevOps | TBD |
| Deploy to Cloudflare proxy | DevOps | TBD |
| Enable WAF managed rulesets | DevOps | TBD |

### 10.2 Medium Priority

| Action | Owner | Target Date |
|--------|-------|-------------|
| Configure Cloudflare rate limiting | DevOps | TBD |
| Enable Bot Fight Mode | DevOps | TBD |
| Set up DDoS alerts | DevOps | TBD |

### 10.3 Low Priority

| Action | Owner | Target Date |
|--------|-------|-------------|
| Re-enable page caching (after fixing cache key issue) | Development | TBD |
| Add honeypot fields to forms | Development | TBD |
| Implement login rate limiting (if auth added) | Development | TBD |

---

## Appendix A: Security Testing Checklist

### A.1 Bot Detection Testing

```bash
# Should be blocked (403)
curl -A "scrapy" https://hexforensics.com
curl -A "python-requests" https://hexforensics.com

# Should be allowed (200)
curl -A "Googlebot" https://hexforensics.com
curl -A "Mozilla/5.0" https://hexforensics.com
```

### A.2 Rate Limiting Testing

```bash
# Make 65 rapid requests - last 5 should get 429
for i in {1..65}; do curl -s -o /dev/null -w "%{http_code}\n" https://hexforensics.com; done
```

### A.3 CSRF Testing

1. Load contact form, note CSRF token
2. Try submitting without token → Should fail
3. Try submitting with expired token → Should fail
4. Submit with valid token → Should succeed

---

## Appendix B: Incident Response

### B.1 Under Active Scraping Attack

1. Check server logs for patterns
2. Add new User-Agent patterns to [BotDetectionFilter.php](../../app/Filters/BotDetectionFilter.php)
3. Lower rate limits temporarily in [RateLimitFilter.php](../../app/Filters/RateLimitFilter.php)
4. If behind Cloudflare: Enable "I'm Under Attack" mode

### B.2 Under DDoS Attack

1. If behind Cloudflare: Enable "I'm Under Attack" mode
2. Contact Cloudflare support (Business/Enterprise)
3. Block attacking IP ranges at server firewall
4. Review Cloudflare analytics for attack patterns

---

**Document Classification:** Internal Use  
**Review Frequency:** Quarterly  
**Next Review Date:** 2026-04-22  
**Document Owner:** Security Team  

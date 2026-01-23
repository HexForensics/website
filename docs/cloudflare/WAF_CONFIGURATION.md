# Cloudflare WAF & Security Configuration Guide

This guide provides step-by-step instructions for configuring Cloudflare's Web Application Firewall (WAF), Bot Management, and DDoS protection for the Hex Forensics website.

## Overview

Cloudflare provides multiple layers of protection:
- **WAF (Web Application Firewall):** Blocks malicious requests
- **Bot Management:** Detects and challenges automated traffic
- **DDoS Protection:** Mitigates distributed denial-of-service attacks
- **Rate Limiting:** Prevents abuse and brute force attacks
- **SSL/TLS:** Encrypts traffic between visitors and origin

## Prerequisites

- Cloudflare account with domain added
- DNS configured to use Cloudflare nameservers (orange cloud enabled)
- Access to Cloudflare dashboard

## Initial Setup

### 1. Add Domain to Cloudflare

If not already done:
1. Log into [Cloudflare Dashboard](https://dash.cloudflare.com)
2. Click **"Add a Site"**
3. Enter `hexforensics.com`
4. Select a plan (Free plan includes basic WAF)
5. Update nameservers at your domain registrar

### 2. Verify DNS Configuration

Ensure these records are proxied (orange cloud):
- `hexforensics.com` → A record → Your server IP
- `www.hexforensics.com` → CNAME → hexforensics.com

---

## SSL/TLS Configuration

### Navigate to SSL/TLS Settings

1. Go to **SSL/TLS** → **Overview**
2. Set encryption mode to **Full (strict)**

### Recommended Settings

| Setting | Location | Value |
|---------|----------|-------|
| **SSL Mode** | SSL/TLS → Overview | Full (strict) |
| **Always Use HTTPS** | SSL/TLS → Edge Certificates | ON |
| **Automatic HTTPS Rewrites** | SSL/TLS → Edge Certificates | ON |
| **Minimum TLS Version** | SSL/TLS → Edge Certificates | TLS 1.2 |
| **TLS 1.3** | SSL/TLS → Edge Certificates | ON |
| **HSTS** | SSL/TLS → Edge Certificates | Enable with subdomains |

### HSTS Configuration

```
Header: Strict-Transport-Security
Value: max-age=31536000; includeSubDomains; preload
```

---

## WAF Configuration

### Navigate to WAF

Go to **Security** → **WAF**

### Enable Managed Rulesets

1. Click **Managed rules**
2. Enable these rulesets:

| Ruleset | Description | Action |
|---------|-------------|--------|
| **Cloudflare Managed Ruleset** | Core protection rules | Block |
| **Cloudflare OWASP Core Ruleset** | OWASP Top 10 protection | Block |
| **Cloudflare Exposed Credentials Check** | Leaked password detection | Log |

### Configure Ruleset Sensitivity

For the OWASP ruleset:
1. Click **Configure** next to the ruleset
2. Set **Paranoia Level** to **PL2** (balanced)
3. Set **Anomaly Score Threshold** to **Medium**

### Custom WAF Rules

Create custom rules for additional protection:

#### Rule 1: Block Suspicious User Agents
```
Expression: (http.user_agent contains "scraper") or 
            (http.user_agent contains "bot" and not cf.client.bot) or
            (http.user_agent contains "crawler" and not cf.client.bot)
Action: Block
```

#### Rule 2: Protect Admin Paths
```
Expression: (http.request.uri.path contains "/app/") or
            (http.request.uri.path contains "/system/") or
            (http.request.uri.path contains "/writable/")
Action: Block
```

#### Rule 3: Challenge Suspicious Countries (Optional)
```
Expression: (ip.geoip.country in {"XX" "YY"}) and 
            (http.request.method eq "POST")
Action: Managed Challenge
```

---

## Bot Management

### Navigate to Bot Settings

Go to **Security** → **Bots**

### Configure Bot Fight Mode

1. Enable **Bot Fight Mode** (free)
2. For Pro/Business plans, enable **Super Bot Fight Mode**

### Bot Fight Mode Settings

| Setting | Value | Description |
|---------|-------|-------------|
| **Bot Fight Mode** | ON | Challenges suspected bots |
| **Definitely Automated** | Block | Block confirmed bots |
| **Likely Automated** | Managed Challenge | Challenge suspected bots |
| **Verified Bots** | Allow | Allow Googlebot, Bingbot, etc. |

### JavaScript Detection

Enable **JavaScript Detections** to identify headless browsers:
- Detects PhantomJS, Selenium, Puppeteer
- Issues challenges to suspicious browsers

---

## DDoS Protection

### Navigate to DDoS Settings

Go to **Security** → **DDoS**

### HTTP DDoS Attack Protection

1. Click **Deploy a DDoS override**
2. Configure sensitivity:

| Setting | Recommended Value |
|---------|-------------------|
| **Sensitivity Level** | High |
| **Action** | Block |

### Rate Limiting Rules

Create rate limiting rules in **Security** → **WAF** → **Rate limiting rules**:

#### Rule 1: General Page Requests
```
Expression: (http.request.uri.path ne "/assets/")
Characteristics: IP
Period: 1 minute
Requests: 100
Action: Block for 10 minutes
```

#### Rule 2: Form Submission Protection
```
Expression: (http.request.uri.path contains "/submit-")
Characteristics: IP
Period: 1 minute
Requests: 10
Action: Block for 30 minutes
```

#### Rule 3: Login/Auth Protection (if applicable)
```
Expression: (http.request.method eq "POST") and 
            (http.request.uri.path contains "/login")
Characteristics: IP
Period: 5 minutes
Requests: 5
Action: Block for 15 minutes
```

---

## Page Rules

### Navigate to Page Rules

Go to **Rules** → **Page Rules**

### Create Caching Rules

#### Rule 1: Cache Static Assets
```
URL: hexforensics.com/assets/*
Settings:
- Cache Level: Cache Everything
- Edge Cache TTL: 1 month
- Browser Cache TTL: 1 week
```

#### Rule 2: Bypass Cache for Forms
```
URL: hexforensics.com/submit-*
Settings:
- Cache Level: Bypass
- Security Level: High
```

#### Rule 3: Cache HTML Pages (Optional)
```
URL: hexforensics.com/*
Settings:
- Cache Level: Cache Everything
- Edge Cache TTL: 2 hours
- Origin Cache Control: On
```

---

## Security Headers

These headers are already configured in `.htaccess`, but can be reinforced via Cloudflare:

### Transform Rules

Go to **Rules** → **Transform Rules** → **Modify Response Header**

Add these headers:
```
X-Content-Type-Options: nosniff
X-Frame-Options: SAMEORIGIN
Referrer-Policy: strict-origin-when-cross-origin
Permissions-Policy: geolocation=(), microphone=(), camera=()
```

---

## Firewall Analytics

### Monitor Traffic

Go to **Security** → **Analytics**

Review:
- **Threats:** Blocked malicious requests
- **Bots:** Bot vs human traffic ratio
- **Rate Limiting:** Triggered rate limits
- **WAF Events:** Rule matches and actions

### Set Up Alerts

1. Go to **Notifications**
2. Create alerts for:
   - DDoS attack detected
   - High rate of blocked requests
   - SSL certificate expiration

---

## Testing Configuration

### Verify WAF is Working

1. Access the site normally - should work
2. Try accessing `/app/` directly - should be blocked
3. Use curl with suspicious user-agent - should be blocked:
   ```bash
   curl -A "scraper-bot" https://hexforensics.com
   ```

### Verify Bot Protection

1. Access site from normal browser - should work
2. Access via automated tool - should be challenged
3. Check Cloudflare analytics for bot detection

### Verify Rate Limiting

1. Normal browsing - should work
2. Rapid requests (use with caution):
   ```bash
   for i in {1..150}; do curl -s https://hexforensics.com > /dev/null; done
   ```
3. Should see 429 response after limit

---

## Maintenance Mode (Optional)

To enable maintenance mode:

1. Go to **Rules** → **Page Rules**
2. Create rule:
   ```
   URL: hexforensics.com/*
   Settings: Forwarding URL (302) → https://hexforensics.com/maintenance.html
   ```

Or use **IP Access Rules** to allow only your IP during maintenance.

---

## Emergency Response

### Under Active Attack

1. Go to **Security** → **Settings**
2. Enable **I'm Under Attack Mode**
3. This adds a 5-second JavaScript challenge to all visitors

### After Attack

1. Review **Security** → **Events** for attack patterns
2. Create custom rules to block specific attack vectors
3. Contact Cloudflare support if needed (Business/Enterprise)

---

## Integration with Server-Side Protection

The website includes additional server-side protection:

| Component | File | Purpose |
|-----------|------|---------|
| Rate Limiting Filter | [RateLimitFilter.php](../../app/Filters/RateLimitFilter.php) | CodeIgniter rate limiting |
| Bot Detection Filter | [BotDetectionFilter.php](../../app/Filters/BotDetectionFilter.php) | User-agent filtering |
| CSRF Protection | [Filters.php](../../app/Config/Filters.php) | Cross-site request forgery |
| Turnstile CAPTCHA | [Turnstile.php](../../app/Config/Turnstile.php) | Form protection |

These provide defense-in-depth when Cloudflare protections are bypassed.

---

## Cloudflare IP Ranges

If your origin server has a firewall, allow Cloudflare IP ranges:

- [IPv4 Ranges](https://www.cloudflare.com/ips-v4)
- [IPv6 Ranges](https://www.cloudflare.com/ips-v6)

Block direct access to origin IP to prevent bypassing Cloudflare.

---

## Support & Resources

- [Cloudflare Documentation](https://developers.cloudflare.com/)
- [Cloudflare Community](https://community.cloudflare.com/)
- [Cloudflare Status](https://www.cloudflarestatus.com/)
- [Security Best Practices](https://developers.cloudflare.com/fundamentals/security/)

## Related Documentation

- [TURNSTILE_SETUP.md](./TURNSTILE_SETUP.md) - CAPTCHA configuration
- [SECURITY_POSTURE.md](../security_posture/SECURITY_POSTURE.md) - Overall security documentation

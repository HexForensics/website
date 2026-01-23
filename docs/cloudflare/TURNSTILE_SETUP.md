# Cloudflare Turnstile Setup Guide

This guide explains how to set up Cloudflare Turnstile for the Hex Forensics website. Turnstile is a smart CAPTCHA alternative that provides bot protection with minimal user friction.

## Overview

Turnstile is integrated into:
- **Contact Form** (`/contact`)
- **Report Theft Form** (`/report-theft`)

## Prerequisites

- Cloudflare account (free tier is sufficient)
- Access to Cloudflare dashboard
- Access to the website's `.env` file

## Step-by-Step Setup

### 1. Access Cloudflare Dashboard

1. Log into [Cloudflare Dashboard](https://dash.cloudflare.com)
2. Navigate to **Turnstile** in the left sidebar (under "Security" or as a standalone menu item)

### 2. Create a New Turnstile Widget

1. Click **"Add Site"** or **"Add Widget"**
2. Fill in the configuration:
   - **Site Name:** `Hex Forensics`
   - **Domain:** `hexforensics.com`
   - **Widget Mode:** Choose one:
     - **Managed (Recommended):** Cloudflare decides when to show a challenge
     - **Non-interactive:** Never shows a visible challenge
     - **Invisible:** Challenge runs completely in the background

3. Click **Create**

### 3. Copy Your Keys

After creation, you'll see two keys:

| Key | Description |
|-----|-------------|
| **Site Key** | Public key embedded in frontend HTML |
| **Secret Key** | Private key for server-side verification (KEEP SECRET!) |

### 4. Configure Environment Variables

Edit the `.env` file in the project root:

```dotenv
#--------------------------------------------------------------------
# CLOUDFLARE TURNSTILE
#--------------------------------------------------------------------
turnstile.siteKey = '0x4AAAAAAA...'  # Your Site Key
turnstile.secretKey = '0x4AAAAAAA...'  # Your Secret Key
```

> ⚠️ **Security Warning:** Never commit the `.env` file to version control. Ensure it's listed in `.gitignore`.

### 5. Production Deployment

For production servers, set environment variables directly on the server or via hosting platform:

**Linux/Apache:**
```bash
export turnstile__siteKey='your_site_key'
export turnstile__secretKey='your_secret_key'
```

**Docker:**
```yaml
environment:
  - turnstile.siteKey=your_site_key
  - turnstile.secretKey=your_secret_key
```

**cPanel/Shared Hosting:**
Set in the hosting control panel's environment variables section.

## Testing

### Development/Staging Testing

Cloudflare provides test keys for development:

| Key Type | Test Value |
|----------|------------|
| Site Key | `1x00000000000000000000AA` (Always passes) |
| Site Key | `2x00000000000000000000AB` (Always blocks) |
| Site Key | `3x00000000000000000000FF` (Forces interactive) |
| Secret Key | `1x0000000000000000000000000000000AA` (Always passes) |
| Secret Key | `2x0000000000000000000000000000000AA` (Always fails) |

### Verification Checklist

1. ✅ Visit `/contact` - Turnstile widget should appear in form
2. ✅ Visit `/report-theft` - Turnstile widget should appear in form
3. ✅ Submit a test form - Should pass validation
4. ✅ Check Cloudflare dashboard for solve statistics

## Troubleshooting

### Widget Not Appearing

1. Check browser console for JavaScript errors
2. Verify `turnstile.siteKey` is set correctly in `.env`
3. Ensure domain is added to Turnstile widget settings
4. Check CSP headers allow `challenges.cloudflare.com`

### Verification Failing

1. Verify `turnstile.secretKey` is correct
2. Check server can reach `https://challenges.cloudflare.com`
3. Review server logs for curl/API errors
4. Ensure token is being submitted with form data

### CSP Errors

The following domains must be allowed in Content Security Policy:
- `script-src`: `https://challenges.cloudflare.com`
- `frame-src`: `https://challenges.cloudflare.com`
- `connect-src`: `https://challenges.cloudflare.com`

These are already configured in:
- [.htaccess](../../public/.htaccess)
- [ContentSecurityPolicy.php](../../app/Config/ContentSecurityPolicy.php)

## Widget Customization

You can customize the widget appearance in the form HTML:

```html
<div class="cf-turnstile" 
     data-sitekey="<?= esc($turnstile_site_key); ?>" 
     data-theme="light"
     data-size="normal"
     data-language="en"
     data-callback="onTurnstileSuccess"
     data-error-callback="onTurnstileError">
</div>
```

### Available Options

| Attribute | Values | Description |
|-----------|--------|-------------|
| `data-theme` | `light`, `dark`, `auto` | Widget color scheme |
| `data-size` | `normal`, `compact` | Widget dimensions |
| `data-language` | `auto`, `en`, etc. | Widget language |
| `data-callback` | Function name | Called on successful verification |
| `data-error-callback` | Function name | Called on error |
| `data-expired-callback` | Function name | Called when token expires |

## Analytics & Monitoring

View Turnstile analytics in Cloudflare dashboard:
- Solve rates
- Challenge types issued
- Geographic distribution
- Bot vs human traffic

## Related Files

| File | Purpose |
|------|---------|
| [app/Config/Turnstile.php](../../app/Config/Turnstile.php) | Turnstile configuration class |
| [app/Controllers/Home.php](../../app/Controllers/Home.php) | Form handling with verification |
| [app/Views/pages/contact.php](../../app/Views/pages/contact.php) | Contact form with widget |
| [app/Views/pages/report_theft.php](../../app/Views/pages/report_theft.php) | Report form with widget |
| [app/Views/layout/header.php](../../app/Views/layout/header.php) | Turnstile script inclusion |

## Support

- [Cloudflare Turnstile Documentation](https://developers.cloudflare.com/turnstile/)
- [Turnstile API Reference](https://developers.cloudflare.com/turnstile/get-started/client-side-rendering/)
- [Cloudflare Community](https://community.cloudflare.com/)

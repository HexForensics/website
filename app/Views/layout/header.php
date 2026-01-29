<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <meta name="description" content="<?= isset($meta_description) ? esc($meta_description) : 'Hex Forensics - Expert Digital Forensics, Cyber Security, and Investigation Services in Nigeria and Africa.'; ?>">
        <meta name="keywords" content="<?= isset($meta_keywords) ? esc($meta_keywords) : 'digital forensics, cyber security, fraud investigation, intelligence, Nigeria, Africa'; ?>">
        <meta name="author" content="Hex Forensics">
        <meta name="robots" content="index, follow">
        
        <!-- Canonical URL -->
        <link rel="canonical" href="<?= isset($canonical_url) ? $canonical_url : current_url(); ?>">
        
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?= current_url(); ?>">
        <meta property="og:title" content="<?= $page_title; ?> - Hex Forensics">
        <meta property="og:description" content="<?= isset($meta_description) ? esc($meta_description) : 'Expert Digital Forensics, Cyber Security, and Investigation Services in Nigeria and Africa'; ?>">
        <meta property="og:image" content="<?= base_url('assets/logo/logo-darktext.png'); ?>">
        <meta property="og:image:secure_url" content="<?= base_url('assets/logo/logo-darktext.png'); ?>">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:image:alt" content="Hex Forensics - Digital Forensics & Cyber Security Experts">
        <meta property="og:site_name" content="Hex Forensics">
        <meta property="og:locale" content="en_NG">
        
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="<?= current_url(); ?>">
        <meta name="twitter:title" content="<?= $page_title; ?> - Hex Forensics">
        <meta name="twitter:description" content="<?= isset($meta_description) ? esc($meta_description) : 'Expert Digital Forensics, Cyber Security, and Investigation Services in Nigeria and Africa'; ?>">
        <meta name="twitter:image" content="<?= base_url('assets/logo/logo-darktext.png'); ?>">
        <meta name="twitter:image:alt" content="Hex Forensics - Digital Forensics & Cyber Security Experts">
        
        <!-- Page Title -->
        <title><?= $page_title;?> - Hex Forensics</title>
        <!-- Favicon Icon -->
        <link rel="icon" type="image/png" href="<?= base_url('assets/logo/favicon.png');?>">
        <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/logo/favicon.png');?>">
        <link rel="apple-touch-icon" href="<?= base_url('assets/logo/favicon.png');?>">
        
        <!-- JSON-LD Structured Data -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Hex Forensics",
            "url": "<?= base_url(); ?>",
            "logo": "<?= base_url('assets/logo/logo-darktext.png'); ?>",
            "description": "Expert Digital Forensics, Cyber Security, Fraud Investigation, and Intelligence Services",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Abuja",
                "addressCountry": "NG"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+234-90-6677-9939",
                "contactType": "customer service",
                "email": "info@hexforensics.com",
                "availableLanguage": ["English"]
            },
            "sameAs": []
        }
        </script>
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "Hex Forensics",
            "image": "<?= base_url('assets/logo/logo-darktext.png'); ?>",
            "url": "<?= base_url(); ?>",
            "telephone": "+234-90-6677-9939",
            "email": "info@hexforensics.com",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Abuja",
                "addressRegion": "FCT",
                "addressCountry": "NG"
            },
            "priceRange": "$$",
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                "opens": "09:00",
                "closes": "17:00"
            }
        }
        </script>
        
        <!-- Cloudflare Turnstile -->
        <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
        
        <!-- Google Fonts Css-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
        <!-- Bootstrap Css -->
        <link href="<?= base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" media="screen">
        <!-- SlickNav Css -->
        <link href="<?= base_url('assets/css/slicknav.min.css');?>" rel="stylesheet">
        <!-- Swiper Css -->
        <link rel="stylesheet" href="<?= base_url('assets/css/swiper-bundle.min.css');?>">
        <!-- Font Awesome Icon Css-->
        <link href="<?= base_url('assets/css/all.min.css');?>" rel="stylesheet" media="screen">
        <!-- Animated Css -->
        <link href="<?= base_url('assets/css/animate.css');?>" rel="stylesheet">
        <!-- Magnific Popup Core Css File -->
        <link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css');?>">
        <!-- Mouse Cursor Css File -->
        <link rel="stylesheet" href="<?= base_url('assets/css/mousecursor.css');?>">
        <!-- Main Custom Css -->
        <link href="<?= base_url('assets/css/custom.css');?>" rel="stylesheet" media="screen">

        <style>
            /* Import the font if using Google Fonts */
            @import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap');

            /* Global font setting */
            html, body {
                font-family: 'Rajdhani', sans-serif;
                /* Content Protection: Disable Text Selection */
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            /* Content Protection: Allow text selection in whitelisted areas */
            input[type="text"],
            input[type="email"],
            input[type="tel"],
            input[type="number"],
            input[type="password"],
            textarea,
            .allow-copy,
            .contact-info,
            .email-address,
            .phone-number {
                -webkit-user-select: text !important;
                -moz-user-select: text !important;
                -ms-user-select: text !important;
                user-select: text !important;
            }

            /* Content Protection: Image Protection */
            img {
                pointer-events: none;
                -webkit-user-drag: none;
                -khtml-user-drag: none;
                -moz-user-drag: none;
                -o-user-drag: none;
                user-drag: none;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            .nav-item .nav-link {
                color: white;
                font-weight: bold
            }

            /* Desktop (Large Screens) - Hide hamburger-only items */
            @media only screen and (min-width: 992px) {
                .home-page-hero {
                    height: 99vh
                }
                .home-hero-content{
                    margin-top: -0vh;
                }
                .about-image-big{
                    min-height: 400px;
                }
                .service-icon{
                    color: white;
                    font-size: 70px
                }
                .hamburger-only {
                    display: none !important;
                }
            }

            /* Tablet (Medium Screens) */
            @media only screen and (max-width: 991px) and (min-width: 768px) {
                /* Show hamburger-only items in tablet */
                .hamburger-only {
                    display: block !important;
                }
                
                /* Style GET IN TOUCH as button in tablet menu */
                .nav-link.nav-button {
                    background: #ca912a !important;
                    color: #fff !important;
                    border-radius: 25px !important;
                    padding: 12px 25px !important;
                    margin: 10px 0 !important;
                    display: inline-block !important;
                    font-weight: 600 !important;
                    text-transform: uppercase !important;
                    transition: all 0.3s ease !important;
                }
                
                .nav-link.nav-button:hover {
                    background: #b37f1f !important;
                    transform: translateY(-2px) !important;
                }
            }

            /* Phone (Small Screens) */
            @media only screen and (max-width: 767px) {
                .home-page-hero {
                    height: 99vh
                }
                .home-hero-content{
                    margin-top: 20vh;
                }
                .about-image-big{
                    min-height: 150px
                }
                .service-icon{
                    color: white;
                    font-size: 40px
                }
                .desktop-only {
                    display: none !important;
                }
                .mobile-only {
                    display: block !important;
                }
                
                /* Show hamburger-only items in mobile/tablet */
                .hamburger-only {
                    display: block !important;
                }
                
                /* Style GET IN TOUCH as button in mobile menu */
                .nav-link.nav-button {
                    background: #ca912a !important;
                    color: #fff !important;
                    border-radius: 25px !important;
                    padding: 12px 25px !important;
                    margin: 10px 0 !important;
                    display: inline-block !important;
                    font-weight: 600 !important;
                    text-transform: uppercase !important;
                    transition: all 0.3s ease !important;
                }
                
                .nav-link.nav-button:hover {
                    background: #b37f1f !important;
                    transform: translateY(-2px) !important;
                }
            }

            .service-item .icon-box img {
                filter: brightness(0) invert(1);
                /* filter: brightness(0) saturate(100%) invert(53%) sepia(67%) saturate(446%) hue-rotate(2deg); */
            }

            /* .service-item::before{
                background: linear-gradient(90.15deg, var(--accent-color) 1.15%, var(--accent-secondary-color) 98.84%) !important;
            } */
        </style>
    </head>

    <!-- <body style="background-color: #000910"> -->
    <body style="background-color: #000020">

        <!-- Content Protection Start -->
        <script nonce="{csp-script-nonce}">
            // Whitelist: Elements where copy/paste is allowed
            const allowCopySelectors = [
                'input[type="text"]',
                'input[type="email"]',
                'input[type="tel"]',
                'input[type="number"]',
                'input[type="password"]',
                'textarea',
                '.allow-copy',
                '.contact-info',
                '.email-address',
                '.phone-number'
            ];

            // Check if element or its parent is whitelisted
            function isWhitelisted(element) {
                if (!element) return false;
                
                // Check if element itself matches whitelist
                for (let selector of allowCopySelectors) {
                    if (element.matches && element.matches(selector)) {
                        return true;
                    }
                }
                
                // Check if any parent element matches whitelist
                let parent = element.parentElement;
                while (parent) {
                    for (let selector of allowCopySelectors) {
                        if (parent.matches && parent.matches(selector)) {
                            return true;
                        }
                    }
                    parent = parent.parentElement;
                }
                
                return false;
            }

            // Content Protection: Disable Right-Click (with whitelist)
            document.addEventListener('contextmenu', function(e) {
                if (!isWhitelisted(e.target)) {
                    e.preventDefault();
                    return false;
                }
            });

            // Content Protection: Disable Keyboard Shortcuts (with whitelist)
            document.addEventListener('keydown', function(e) {
                // Allow shortcuts in whitelisted elements
                if (isWhitelisted(e.target)) {
                    return true;
                }

                // Disable Ctrl+C (Copy)
                if (e.ctrlKey && e.key === 'c') {
                    e.preventDefault();
                    return false;
                }
                // Disable Ctrl+A (Select All)
                if (e.ctrlKey && e.key === 'a') {
                    e.preventDefault();
                    return false;
                }
                // Disable Ctrl+X (Cut)
                if (e.ctrlKey && e.key === 'x') {
                    e.preventDefault();
                    return false;
                }
                // Disable Ctrl+V (Paste) - only block outside whitelisted areas
                if (e.ctrlKey && e.key === 'v') {
                    e.preventDefault();
                    return false;
                }
                // Disable Ctrl+U (View Source)
                if (e.ctrlKey && e.key === 'u') {
                    e.preventDefault();
                    return false;
                }
                // Disable Ctrl+S (Save Page)
                if (e.ctrlKey && e.key === 's') {
                    e.preventDefault();
                    return false;
                }
                // Disable F12 (Developer Tools)
                if (e.key === 'F12') {
                    e.preventDefault();
                    return false;
                }
                // Disable Ctrl+Shift+I (Inspect Element)
                if (e.ctrlKey && e.shiftKey && e.key === 'I') {
                    e.preventDefault();
                    return false;
                }
                // Disable Ctrl+Shift+J (Console)
                if (e.ctrlKey && e.shiftKey && e.key === 'J') {
                    e.preventDefault();
                    return false;
                }
                // Disable Ctrl+Shift+C (Inspect Element)
                if (e.ctrlKey && e.shiftKey && e.key === 'C') {
                    e.preventDefault();
                    return false;
                }
            });

            // Content Protection: Console Warning
            console.log('%c⚠️ STOP!', 'color: red; font-size: 50px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);');
            console.log('%cThis is a browser feature intended for developers only.', 'font-size: 18px; font-weight: bold; color: #ca912a;');
            console.log('%cUnauthorized copying, scraping, or extraction of website content is strictly prohibited.', 'font-size: 16px; color: #fff;');
            console.log('%cViolations may result in legal action.', 'font-size: 16px; color: #ff6b6b; font-weight: bold;');
            console.log('%c© ' + new Date().getFullYear() + ' Hex Forensics - All Rights Reserved', 'font-size: 14px; color: #888; margin-top: 10px;');
            console.log('%cIf you are interested in our services or partnerships, please contact us at info@hexforensics.com', 'font-size: 14px; color: #4CAF50; font-style: italic;');
        </script>
        <!-- End Content Protection -->

        <!-- Background Audio Start-->
        <!-- <audio id="backgroundAudio" autoplay loop preload="auto" style="display: none;">
            <source src="<?= base_url('assets/audio/background-music.mp3');?>" type="audio/mpeg">
            <source src="<?= base_url('assets/audio/background-music.ogg');?>" type="audio/ogg">
            Your browser does not support the audio element.
        </audio> -->
        <!-- Background Audio End -->
        <!-- <script src="<?= base_url('assets/js/background-audio.js');?>"></script> -->

        <!-- Preloader Start -->
        <!-- <div class="preloader">
            <div class="loading-container">
                <div class="loading"></div>
                <div id="loading-icon"><img src="<?= base_url('assets/logo/favicon.png');?>" alt=""></div>
            </div>
        </div> -->
        <!-- Preloader End -->

        <!-- Header Start -->
        <div class="" style="position: absolute; width: 100%">
            <header class="main-header">
                <div class="header-sticky" style="background-color: transparent !important">
                    <nav class="navbar navbar-expand-lg" style="background-color: transparent !important">
                        <div class="container">

                            <!-- Logo Start -->
                            <a class="navbar-brand" href="<?= base_url();?>">
                                <img src="<?= base_url('assets/logo/logo.png');?>" style="height: 50px" alt="Logo">
                            </a>
                            <!-- Logo End -->

                            <!-- Main Menu Start -->
                            <div class="collapse navbar-collapse main-menu">
                                <div class="nav-menu-wrapper">
                                    <ul class="navbar-nav mr-auto" id="menu">
                                        <li class="nav-item"><a class="nav-link" href="<?= base_url('about-us');?>">COMPANY</a>
                                        <li class="nav-item" style="display: block">
                                            <a class="nav-link" href="<?= base_url('services');?>">SERVICES</a>
                                            <ul>                                        
                                                <li class="nav-item"><a class="nav-link" href="<?= base_url('services/digital-forensics');?>">Digital Forensics</a></li>
                                                <li class="nav-item"><a class="nav-link" href="<?= base_url('services/cyber-security');?>">Cyber Security</a></li>
                                                <!-- <li class="nav-item"><a class="nav-link" href="<?= base_url('services/fraud-investigation');?>">Fraud Investigation</a></li> -->
                                                <li class="nav-item"><a class="nav-link" href="<?= base_url('services/intelligence');?>">Intelligence</a></li>
                                                <!-- <li class="nav-item"><a class="nav-link" href="<?= base_url('services/training-and-education');?>">Training and Education</a></li> -->
                                            </ul>
                                        </li>
                                        <!-- <li class="nav-item"><a class="nav-link" href="javascript:{}">CAREER</a></li> -->
                                        <li class="nav-item"><a class="nav-link" href="<?= base_url('partners');?>">PARTNERS</a></li>
                                        <li class="nav-item"><a class="nav-link" href="javascript:{}">TRAINING & EDUCATION</a></li>
                                        <li class="nav-item hamburger-only"><a class="nav-link nav-button" href="<?= base_url('get-in-touch');?>">GET IN TOUCH</a></li>                         
                                    </ul>
                                </div>

                                <!-- Header Btn Start -->
                                <div class="header-btn">
                                    <a href="<?= base_url('get-in-touch');?>" class="btn-default">contact</a>
                                </div>
                                <!-- Header Btn End -->
                            </div>
                            <!-- Main Menu End -->
                            
                            <!-- Hamburger Menu Start -->
                            <div class="navbar-toggle"></div>
                            <!-- Hamburger Menu End -->
                        </div>
                    </nav>
                    
                    <!-- Hamburger Menu Dropdown Start -->
                    <div class="responsive-menu"></div>
                    <!-- Hamburger Menu Dropdown End -->

                </div>
            </header>
        </div>
        <!-- Header End -->
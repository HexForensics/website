<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Hex Forensics">
        <!-- Page Title -->
        <title><?= $page_title;?> - Hex Forensics</title>
        <!-- Favicon Icon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/logo/favicon.png');?>">
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
                                                <li class="nav-item"><a class="nav-link" href="<?= base_url('services/intelligence');?>">Cyber Intelligence</a></li>
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
                            <div class="navbar-toggle"></div>
                        </div>
                    </nav>
                    <div class="responsive-menu"></div>
                </div>
            </header>
        </div>
        <!-- Header End -->
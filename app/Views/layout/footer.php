        <!-- Our Faqs Section Start -->
        <?php if(in_array($page_title, ["About Us", "Services"])): ?>
            <?= view("page_sections/faq"); ?>
        <?php endif; ?>
        <!-- Our Faqs Section End -->

        <!-- our Blog Section Start -->
        <?php if(in_array($page_title, [])): ?>
            <?= view("page_sections/blog"); ?>
        <?php endif; ?>
        <!-- our Blog Section End -->

        <style>
            .partner-logos {
                overflow: hidden;
                /* background-color: #111; */
                background-color: white;
                padding: 20px 0;
                position: relative;
                white-space: nowrap;
                display: flex;
            }

            .partner-logos .logos {
                display: flex;
                align-items: center;
                animation: scroll 15s linear infinite;
            }

            .partner-logos .logos img {
                height: 50px; /* Adjust logo size */
                /* width: 70px;  */
                margin: 0 15px;
            }

            /* Pause animation on hover */
            .partner-logos:hover .logos {
                animation-play-state: paused;
            }

            @keyframes scroll {
                from { transform: translateX(0); }
                to { transform: translateX(-100%); }
            }
        </style>

        <script>
            $(document).ready(function () {
                let speed = 50; // Adjust scrolling speed
                let container = $(".partner-logos");
                let logos = $(".logos");

                function duplicateLogos() {
                    logos.append(logos.html()); // Duplicate logos for smooth loop
                }

                function startScrolling() {
                    let width = logos.width() / 2;
                    logos.animate({ marginLeft: -width }, speed * 1000, "linear", function () {
                        logos.css("margin-left", "0");
                        startScrolling(); // Restart animation
                    });
                }

                duplicateLogos();
                startScrolling();

                // Pause scrolling on hover
                container.hover(
                    function () { logos.stop(); },  // Pause
                    function () { startScrolling(); } // Resume
                );
            });
        </script>

        <div style="width: 100%; height: 4px; background-color: #ca912a"> </div>
        <div class="partner-logos">
            <div class="logos">
                <div style="width: 100px"></div>
                <img src="<?= base_url('assets/partners/dss.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/navy.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/dia.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/npf.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/airforce.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/army.png');?>" alt="Logo">
                <!-- Duplication -->
                <img src="<?= base_url('assets/partners/dss.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/navy.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/dia.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/npf.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/airforce.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/army.png');?>" alt="Logo">
                <!-- Duplication -->
                <img src="<?= base_url('assets/partners/dss.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/navy.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/dia.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/npf.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/airforce.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/army.png');?>" alt="Logo">
                <!-- Duplication -->
                <img src="<?= base_url('assets/partners/dss.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/navy.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/dia.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/npf.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/airforce.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/army.png');?>" alt="Logo">
                <!-- Duplication -->
                <img src="<?= base_url('assets/partners/dss.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/navy.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/dia.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/npf.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/airforce.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/army.png');?>" alt="Logo">
                <!-- Duplication -->
                <img src="<?= base_url('assets/partners/dss.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/navy.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/dia.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/npf.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/airforce.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/army.png');?>" alt="Logo">
                <!-- Duplication -->
                <img src="<?= base_url('assets/partners/dss.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/navy.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/dia.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/npf.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/airforce.png');?>" alt="Logo">
                <img src="<?= base_url('assets/partners/army.png');?>" alt="Logo">
            </div>
        </div>
        <div style="width: 100%; height: 4px; background-color: #000020"> </div>
        <!-- Main Footer Section Start -->
        <footer class="main-footer" style="padding: 0px 0 0 0;">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Footer Header Start -->
                        <div class="footer-header">
                            <!-- Footer Logo Start -->
                            <div class="footer-logo">
                                <img src="<?= base_url('assets/logo/logo.png');?>" style="max-width: 100px;" alt="Logo">
                            </div>
                            <!-- Footer Logo End -->
                            
                            <!-- Footer Social Links Start -->
                            <div class="footer-social-links">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- Footer Social Links End -->
                        </div>
                        <!-- Footer Header End -->
                    </div>

                    <div class="col-lg-2 col-md-3 col-5" style="display: none">
                        <!-- Footer Links Start -->
                        <div class="footer-links footer-quick-links">
                            <h3>Quick link</h3>
                            <ul>
                                <li><a href="<?= base_url();?>">home</a></li>
                                <li><a href="<?= base_url('aboutUs');?>">about us</a></li>
                                <li><a href="<?= base_url('get-in-touch');?>">get in touch</a></li>
                                <li><a href="<?= base_url('services');?>">services</a></li>
                                <li><a href="<?= base_url('careers');?>">careers</a></li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-7" style="display: none">
                        <!-- Footer Links Start -->
                        <div class="footer-links">
                            <h3>Contact</h3>
                            <ul>
                                <li><a href="tel:+123456789">+2349066779939</a></li>
                                <li>
                                    <a href="mailto:info@hexforensics.com" style="text-transform: lowercase">info@hexforensics.com</a>
                                </li>
                                <li>Abuja, Nigeria</li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-6" style="display: none">
                        <!-- Footer Links Start -->
                        <div class="footer-links">
                            <h3>Services</h3>
                            <ul>
                                <li><a href="<?= base_url('forensics');?>">Forensics</a></li>
                                <li><a href="<?= base_url('fraud-investigation');?>">Fraud Investigation</a></li>
                                <li><a href="<?= base_url('asset-tracing');?>">Asset Tracing</a></li>
                                <li><a href="<?= base_url('communication-intelligence');?>">COMINT</a></li>
                                <li><a href="<?= base_url('training-and-education');?>">Training</a></li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->
                    </div>
                    
                    <div class="col-lg-2 col-md-3 col-5" style="display: none">
                        <!-- Footer Links Start -->
                        <div class="footer-links">
                            <h3>Support</h3>
                            <ul>
                                <li><a href="<?= base_url('');?>">Help</a></li>
                                <li><a href="<?= base_url('');?>">Term's & condition </a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->
                    </div>
                </div>
            </div>

            <!-- Footer Copyright Start -->
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Footer Copyright Text Start -->
                            <div class="footer-copyright-text">
                                <p>Copyright © <?= date("Y"); ?> All Rights Reserved.</p>
                            </div>
                            <!-- Footer Copyright Text End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Copyright End -->
        </footer>
        <!-- Main Footer Section End -->
        
        <!-- Jquery Library File -->
        <script src="<?= base_url('assets/js/jquery-3.7.1.min.js');?>"></script>
        <!-- Bootstrap js file -->
        <script src="<?= base_url('assets/js/bootstrap.min.js');?>"></script>
        <!-- Validator js file -->
        <script src="<?= base_url('assets/js/validator.min.js');?>"></script>
        <!-- SlickNav js file -->
        <script src="<?= base_url('assets/js/jquery.slicknav.js');?>"></script>
        <!-- Swiper js file -->
        <script src="<?= base_url('assets/js/swiper-bundle.min.js');?>"></script>
        <!-- Counter js file -->
        <script src="<?= base_url('assets/js/jquery.waypoints.min.js');?>"></script>
        <script src="<?= base_url('assets/js/jquery.counterup.min.js');?>"></script>
        <!-- Magnific js file -->
        <script src="<?= base_url('assets/js/jquery.magnific-popup.min.js');?>"></script>
        <!-- SmoothScroll -->
        <script src="<?= base_url('assets/js/SmoothScroll.js');?>"></script>
        <!-- Parallax js -->
        <script src="<?= base_url('assets/js/parallaxie.js');?>"></script>
        <!-- MagicCursor js file -->
        <script src="<?= base_url('assets/js/gsap.min.js');?>"></script>
        <script src="<?= base_url('assets/js/magiccursor.js');?>"></script>
        <!-- Text Effect js file -->
        <script src="<?= base_url('assets/js/SplitText.js');?>"></script>
        <script src="<?= base_url('assets/js/ScrollTrigger.min.js');?>"></script>
        <!-- YTPlayer js File -->
        <script src="<?= base_url('assets/js/jquery.mb.YTPlayer.min.js');?>"></script>
        <!-- Wow js file -->
        <script src="<?= base_url('assets/js/wow.min.js');?>"></script>
        <!-- Main Custom js file -->
        <script src="<?= base_url('assets/js/function.js');?>"></script>
    </body>
</html>
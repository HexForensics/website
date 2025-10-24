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

        <!-- Partner Logos Section Start -->
        <?= view("page_sections/trusted_by");?>
        <!-- Partner Logos Section End -->
        
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
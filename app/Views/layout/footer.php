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

        <div style="width: 100%; height: 4px; background-color: #ca912a"></div>
        
        <!-- Main Footer Section Start -->
        <footer class="main-footer" style="padding: 0px 0 0 0;">
            <div class="container pt-5">
                <div class="row"  style="padding-bottom: 20px;">
                    <div class="col-lg-12">
                        <!-- Footer Header Start -->
                        <div class="footer-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 40px; padding-bottom: 20px; border-bottom: 1px solid rgba(255, 255, 255, 0.1);">
                            <!-- Footer Logo Start -->
                            <div class="footer-logo">
                                <img src="<?= base_url('assets/logo/logo.png');?>" style="max-width: 160px;" alt="Hex Forensics Logo">
                                <div style="margin-top: 10px;">
                                    <p style="color: rgba(255, 255, 255, 0.8); font-size: 0.9rem; margin: 0;">Digital Forensics & Cybersecurity Experts.</p>
                                </div>
                            </div>
                            <!-- Footer Logo End -->
                            
                            <!-- Footer Social Links Start -->
                            <div class="footer-social-links">
                                <h4 style="color: #fff; margin-bottom: 15px; font-size: 1rem;">Follow Us</h4>
                                <ul style="display: flex; gap: 15px; margin: 0; padding: 0; list-style: none;">
                                    <li><a href="https://www.linkedin.com/company/hex-forensics/" style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: rgba(202, 145, 42, 0.1); border-radius: 50%; color: #ca912a; transition: all 0.3s ease;" onmouseover="this.style.background='#ca912a'; this.style.color='#fff';" onmouseout="this.style.background='rgba(202, 145, 42, 0.1)'; this.style.color='#ca912a';"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#" style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: rgba(202, 145, 42, 0.1); border-radius: 50%; color: #ca912a; transition: all 0.3s ease;" onmouseover="this.style.background='#ca912a'; this.style.color='#fff';" onmouseout="this.style.background='rgba(202, 145, 42, 0.1)'; this.style.color='#ca912a';"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    <li><a href="#" style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: rgba(202, 145, 42, 0.1); border-radius: 50%; color: #ca912a; transition: all 0.3s ease;" onmouseover="this.style.background='#ca912a'; this.style.color='#fff';" onmouseout="this.style.background='rgba(202, 145, 42, 0.1)'; this.style.color='#ca912a';"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#" style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: rgba(202, 145, 42, 0.1); border-radius: 50%; color: #ca912a; transition: all 0.3s ease;" onmouseover="this.style.background='#ca912a'; this.style.color='#fff';" onmouseout="this.style.background='rgba(202, 145, 42, 0.1)'; this.style.color='#ca912a';"><i class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                            <!-- Footer Social Links End -->
                        </div>
                        <!-- Footer Header End -->
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <!-- Footer Links Start -->
                        <div class="footer-links footer-quick-links">
                            <h3>Quick Links</h3>
                            <ul>
                                <li><a href="<?= base_url();?>">Home</a></li>
                                <li><a href="<?= base_url('aboutUs');?>">About Us</a></li>
                                <li><a href="<?= base_url('services');?>">Services</a></li>
                                <li><a href="<?= base_url('partners');?>">Partners</a></li>
                                <li><a href="<?= base_url('get-in-touch');?>">Contact</a></li>
                                <li><a href="<?= base_url('report-theft');?>" style="color: #ca912a; filter: brightness(1.2);">
                                    <i class="fa-solid fa-shield-halved" style="margin-right: 5px;"></i>Report Content Theft
                                </a></li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-6">
                        <!-- Footer Links Start -->
                        <div class="footer-links">
                            <h3>Get In Touch</h3>
                            <ul>
                                <li style="margin-bottom: 10px;" class="phone-number allow-copy">
                                    <i class="fa-solid fa-phone" style="color: #ca912a; margin-right: 8px;"></i>
                                    <a href="tel:+2349066779939" class="phone-number allow-copy">+234 906 677 9939</a>
                                </li>
                                <li style="margin-bottom: 10px;" class="email-address allow-copy">
                                    <i class="fa-solid fa-envelope" style="color: #ca912a; margin-right: 8px;"></i>
                                    <a href="mailto:info@hexforensics.com" style="text-transform: lowercase" class="email-address allow-copy">info@hexforensics.com</a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-globe" style="color: #ca912a; margin-right: 8px;"></i>
                                    <a href="<?= base_url();?>" style="text-transform: lowercase">hexforensics.com</a>
                                </li>
                                <li style="margin-bottom: 10px;">
                                    <i class="fa-solid fa-location-dot" style="color: #ca912a; margin-right: 8px;"></i>
                                    Abuja, Nigeria
                                </li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-6">
                        <!-- Footer Links Start -->
                        <div class="footer-links">
                            <a href="<?= base_url('services');?>"><h3>Our Services</h3></a>
                            <ul>
                                <li><a href="<?= base_url('services/fraud-investigation');?>">Digital Forensics</a></li>
                                <li><a href="<?= base_url('services/cyber-security');?>">Cyber Security</a></li>
                                <!-- <li><a href="javascript:{}">Asset Tracing</a></li> -->
                                <li><a href="<?= base_url('services/communication-intelligence');?>">Intelligence (COMINT)</a></li>
                                <li><a href="javascript:{}">Training & Education</a></li>
                            </ul>
                        </div>
                        <!-- Footer Links End -->
                    </div>
                    
                    <div class="col-lg-4 col-md-12 col-12">
                        <!-- Footer About Start -->
                        <div class="footer-links footer-about">
                            <!-- <h3>About Hex Forensics</h3> -->
                            <h6 style="color: rgba(255, 255, 255, 0.7); line-height: 1.6; margin-bottom: 20px;">
                                Leading provider of digital forensics, cybersecurity, and investigative solutions. We partner with government agencies and organizations worldwide to combat crime and protect digital assets.
                            </h6>
                            <!-- Professional Certifications -->
                            <div class="footer-certifications" style="margin-top: 20px;">
                                <h4 style="color: #ca912a; font-size: 0.9rem; margin-bottom: 10px;">Professional Certifications</h4>
                                <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                                    <span style="background: rgba(202, 145, 42, 0.1); color: #ca912a; padding: 4px 8px; border-radius: 4px; font-size: 0.8rem;">MSAB Certified</span>
                                    <span style="background: rgba(202, 145, 42, 0.1); color: #ca912a; padding: 4px 8px; border-radius: 4px; font-size: 0.8rem;">Mile2 Certified</span>
                                    <span style="background: rgba(202, 145, 42, 0.1); color: #ca912a; padding: 4px 8px; border-radius: 4px; font-size: 0.8rem;">SANS Trained</span>
                                </div>
                            </div>
                        </div>
                        <!-- Footer About End -->
                    </div>
                </div>
            </div>

            <!-- Footer Copyright Start -->
            <div class="footer-copyright" style="background: rgba(0, 0, 0, 0.3); border-top: 1px solid rgba(255, 255, 255, 0.1);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <!-- Footer Copyright Text Start -->
                            <div class="footer-copyright-text">
                                <p style="margin: 0; color: rgba(255, 255, 255, 0.7);">
                                    Copyright © <?= date("Y"); ?> <strong style="color: #ca912a;">Hex Forensics</strong>. All Rights Reserved.
                                </p>
                                <p style="color: rgba(255, 255, 255, 0.6); font-size: 0.85rem; margin: 5px 0 0 0; font-style: italic;">
                                    Solving Complex Investigations...
                                </p>
                            </div>
                            <!-- Footer Copyright Text End -->
                        </div>
                        <div class="col-md-6">
                            <!-- Footer Legal Links Start -->
                            <div class="footer-legal-links" style="text-align: right;">
                                <ul style="display: inline-flex; gap: 20px; margin: 0; padding: 0; list-style: none;">
                                    <li><a href="#" style="color: rgba(255, 255, 255, 0.7); text-decoration: none; font-size: 0.9rem; transition: color 0.3s ease;" onmouseover="this.style.color='#ca912a';" onmouseout="this.style.color='rgba(255, 255, 255, 0.7)';">Privacy Policy</a></li>
                                    <li><a href="#" style="color: rgba(255, 255, 255, 0.7); text-decoration: none; font-size: 0.9rem; transition: color 0.3s ease;" onmouseover="this.style.color='#ca912a';" onmouseout="this.style.color='rgba(255, 255, 255, 0.7)';">Terms of Service</a></li>
                                    <li><a href="<?= base_url('get-in-touch');?>" style="color: rgba(255, 255, 255, 0.7); text-decoration: none; font-size: 0.9rem; transition: color 0.3s ease;" onmouseover="this.style.color='#ca912a';" onmouseout="this.style.color='rgba(255, 255, 255, 0.7)';">Contact Us</a></li>
                                </ul>
                            </div>
                            <!-- Footer Legal Links End -->
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
        
        <!-- Footer Responsive Styles -->
        <style>
            @media (max-width: 768px) {
                .footer-header {
                    flex-direction: column !important;
                    text-align: center !important;
                    gap: 20px;
                }
                
                .footer-social-links h4 {
                    margin-bottom: 10px !important;
                }
                
                .footer-links h3 {
                    color: #ca912a !important;
                    margin-bottom: 15px !important;
                    font-size: 1.1rem !important;
                }
                
                .footer-links ul li {
                    margin-bottom: 8px !important;
                }
                
                .footer-links ul li a {
                    color: rgba(255, 255, 255, 0.8) !important;
                    text-decoration: none !important;
                    transition: color 0.3s ease !important;
                }
                
                .footer-links ul li a:hover {
                    color: #ca912a !important;
                }
                
                .footer-legal-links {
                    text-align: center !important;
                    margin-top: 10px !important;
                }
                
                .footer-legal-links ul {
                    flex-direction: column !important;
                    gap: 10px !important;
                }
                
                .footer-certifications {
                    justify-content: center !important;
                }
                
                .footer-about p {
                    text-align: center !important;
                }
                
                .footer-copyright-text {
                    text-align: center !important;
                }
                
                .footer-copyright-text p {
                    text-align: center !important;
                }
            }
            
            .footer-links ul li {
                margin-bottom: 6px;
            }
            
            .footer-links ul li a {
                color: rgba(255, 255, 255, 0.8);
                text-decoration: none;
                transition: color 0.3s ease;
            }
            
            .footer-links ul li a:hover {
                color: #ca912a;
            }
            
            .footer-links h3 {
                color: #fff;
                margin-bottom: 20px;
                font-size: 1.2rem;
                border-bottom: 2px solid #ca912a;
                padding-bottom: 8px;
                display: inline-block;
            }
            
            /* Desktop and tablet styles */
            @media (min-width: 769px) {
                .footer-copyright-text {
                    text-align: left;
                }
                
                .footer-copyright-text p {
                    text-align: left !important;
                }
            }
        </style>
    </body>
</html>
<!-- Hero Section Start -->
<div class="hero hero-video home-page-hero">
    <!-- Video Start -->
    <div class="hero-bg-video">
        <!-- Selfhosted Video Start -->
        <!-- <video autoplay muted loop id="myVideo"><source src="images/hero-bg-video.mp4" type="video/mp4"></video> -->
        <!-- <video autoplay muted loop id="myVideo"><source src="https://demo.awaikenthemes.com/assets/videos/proshield-video.mp4" type="video/mp4"></video> -->
        <video autoplay muted loop id="myVideo"><source src="<?= base_url('assets/video/hero.mp4');?>" type="video/mp4"></video>
        
        <!-- Selfhosted Video End -->

        <!-- Youtube Video Start -->
        <!-- <div id="herovideo" class="player" data-property="{videoURL:'74DWwSxsVSs',containment:'.hero-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
        <!-- Youtube Video End -->
    </div>
    <!-- Video End -->
    <div class="container" style="background-color: rgba(202, 145, 42, 0.5) !important;">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <!-- Hero Content Start -->
                <div class="hero-content home-hero-content" >
                    <!-- Section Title Start -->
                    <div class="section-title dark-section">
                        <h3 class="wow fadeInUp">Analyze. Protect. Defend</h3>
                        <!-- <h3 class="wow fadeInUp">Investigate. Protect.</h3> -->
                        <h1 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Cybersecurity & Digital Forensics You Can Trust</h1>
                        <!-- <p class="wow fadeInUp" data-wow-delay="0.4s">From cybercrime investigations to advanced cybersecurity solutions, we ensure your systems, data, and integrity remain protected.</p> -->
                        <!-- <p class="wow fadeInUp" data-wow-delay="0.4s">We are the expert other experts turned to, to enhance their evidence capabilities.</p> -->
                        <p class="wow fadeInUp" data-wow-delay="0.4s">We are the experts that other professionals rely on to enhance their investigative capabilities.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Hero Content Body Start -->
                    <div class="hero-content-body wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Hero Button Start -->
                        <div class="hero-btn" style="display:none;">
                            <a href="<?= base_url('get-in-touch');?>" class="btn-default btn-highlighted">learn more</a>
                        </div>
                        <!-- Hero Button End -->

                        <!-- Video Play Button Start -->
                        <div class="video-play-button" style="display:none;">
                            <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video" data-cursor-text="Play">
                                <i class="fa-solid fa-play"></i>
                            </a>
                            <h3>Play video</h3>
                        </div>
                        <!-- Video Play Button End -->
                    </div>
                    <!-- Hero Content Body End -->
                </div>
                <!-- Hero Content End -->
            </div>
        </div>
    </div>
</div>
<!-- Hero Section End -->

<div style="width: 100%; height: 8px; background-color: #ca912a">
</div>

<!-- About Us Section Start -->
<?= view("page_sections/about_us");?>
<!-- About Us Section End -->

<!-- Our Services Section Start -->
<?= False ? view("page_sections/our_services") : "";?>
<!-- Our Services Section End -->

<!-- Our Feature Section Start -->
<?= False ? view("page_sections/features") : "";?>
<!-- Our Feature Section End -->

<!-- Why Choose Us Section Start -->
<?= False ? view("page_sections/why_choose_us") : "";?>
<!-- Why Choose Us Section End -->

<!-- Our Testimonials Section Start -->
<?= False ? view("page_sections/testimonials") : "";?>
<!-- Our Testimonials Section End -->
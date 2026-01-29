<!-- Hero Section Start -->
<style>
#particle-effect-container {
  opacity: 0.3;
  mix-blend-mode: screen;
}
.hero-video .container {
  position: relative;
  z-index: 2;
}
@media (min-width: 768px) {
  #particle-effect-container {
    display: none !important;
  }
}
</style>
<div class="hero hero-video home-page-hero">

    <!-- Animated Background Start -->
    <div class="hero-bg-video">
        <!-- Hero Video for Desktop -->
        <video autoplay muted loop playsinline id="myVideo" class="desktop-only"
            style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;">
            <source src="<?= base_url('assets/video/hero-cropped.mp4');?>" type="video/mp4">
            <!-- Fallback image if video fails to load -->
            <img src="<?= base_url('assets/hero/poster.png');?>" alt="Hero Background" style="width: 100%; height: 100%; object-fit: cover;">
        </video>
        <!-- Static Image and js animation for Mobile -->
        <img src="<?= base_url('assets/hero/poster.png');?>"
            alt="Hero Background" id="myVideoMobile" loading="eager"
            class="mobile-only"
            style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; display: none;"
        >
        <div id="particle-effect-container" 
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: 1;"
        >
        </div>

        
        <!-- Fallback for browsers that don't support WebP -->
        <picture style="display: none;">
            <!-- <source srcset="<?= base_url('assets/hero/crimeintro-lightwieght.webp');?>" type="image/webp"> -->
            <img src="<?= base_url('assets/hero/poster.png');?>" alt="Hero Background">
        </picture>
        
        <!-- Bottom Blur Gradient Overlay -->
        <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 80px; background: linear-gradient(to top, #000020 0%, #000020 10%, transparent 80%, transparent 100%); backdrop-filter: blur(1px); -webkit-backdrop-filter: blur(1px); z-index: 1;"></div>
        <!-- rgba(44, 62, 80, 0.5) 60% -->
    </div>
    <!-- Animated Background End -->

    <!-- Hero Content Container Start -->
    <div class="container" >
        <div class="row align-items-center">
            <div class="col-lg-7">
                <!-- Hero Content Start -->
                <div class="hero-content home-hero-content" >
                    <!-- Section Title Start -->
                    <div class="section-title dark-section">
                        <h3 class="wow fadeInUp">Investigate. Analyze. Defend</h3>
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
    <!-- Hero Content Container End -->
</div>
<!-- Hero Section End -->

<!-- Particle Effect Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.7.0/p5.min.js" 
        integrity="sha512-VJuc9M9GyHz+6aJ/ICed88LLa8fYSDoM07ADPXr1k/dSQ3eECCOCQvP96Cs6ytJYKmftN1yq3+yxg4vJ4uE/mg==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer"></script>
<script src="<?= base_url('assets/js/particle-effect.js');?>"></script>

<!-- <div style="width: 100%; height: 8px; background-color: #ca912a"></div> -->

<!-- About Us Section Start -->
<?= True ? view("page_sections/home_copy") : "";?>
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

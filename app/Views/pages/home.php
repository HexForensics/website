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
        <video autoplay muted loop playsinline preload="none" poster="<?= base_url('assets/hero/ascii-poster.png');?>" id="myVideo"
            style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;">
            <source data-src="<?= base_url('assets/video/ascii-preview.webm');?>" type="video/webm">
            <source data-src="<?= base_url('assets/video/ascii-preview.mp4');?>" type="video/mp4">
            <!-- Fallback image if video fails to load -->
            <img src="<?= base_url('assets/hero/ascii-poster.png');?>" alt="Hero Background" style="width: 100%; height: 100%; object-fit: cover;">
        </video>
        <!-- Static Image and js animation for Mobile -->
        <!-- <img src="<?= base_url('assets/hero/poster.png');?>"
            alt="Hero Background" id="myVideoMobile" loading="eager"
            class="mobile-only"
            style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0; display: none;"
        > -->
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
                        <h1 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Precision Digital Forensics. Advanced Intelligence.</h1>
                        <!-- <p class="wow fadeInUp" data-wow-delay="0.4s">From cybercrime investigations to advanced cybersecurity solutions, we ensure your systems, data, and integrity remain protected.</p> -->
                        <!-- <p class="wow fadeInUp" data-wow-delay="0.4s">We are the expert other experts turned to, to enhance their evidence capabilities.</p> -->
                        <p class="wow fadeInUp" data-wow-delay="0.4s"><strong>We're the Experts Professionals Trust to Enhance Their Investigative Capabilities.</strong></p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Hero Content Body Start -->
                    <div class="hero-content-body wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Hero Button Start -->
                        <div class="hero-btn">
                            <a href="<?= base_url('get-in-touch');?>" class="btn-default" style="background: linear-gradient(90.15deg, var(--accent-color) 1.15%, var(--accent-secondary-color) 98.84%);">Book a Consultation</a>
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

    <!-- Hero Notification Box Start -->
    <div class="hero-notification-box wow fadeInUp" data-wow-delay="0.8s">
        <div class="notification-header">
            <i class="fa-solid fa-quote-left"></i>
            <span>Field Intelligence</span>
        </div>
        <div class="notification-slider">
            <div class="notification-slide active">
                <p class="notification-text">"Hex Forensics delivered exceptional results on a complex investigation. Their expertise is unmatched."</p>
                <div class="notification-author">
                    <strong>— Senior Intelligence Officer</strong>
                    <span>Government Agency</span>
                </div>
            </div>
            <div class="notification-slide">
                <p class="notification-text">"Professional, thorough, and highly confidential. They exceeded our expectations."</p>
                <div class="notification-author">
                    <strong>— Chief Security Officer</strong>
                    <span>Defense Institution</span>
                </div>
            </div>
            <div class="notification-slide">
                <p class="notification-text">"The go-to experts for digital forensics. Their training programs transformed our team."</p>
                <div class="notification-author">
                    <strong>— Director of Investigations</strong>
                    <span>Law Enforcement</span>
                </div>
            </div>
        </div>
        <div class="notification-dots">
            <span class="dot active" data-slide="0"></span>
            <span class="dot" data-slide="1"></span>
            <span class="dot" data-slide="2"></span>
        </div>
    </div>
    <!-- Hero Notification Box End -->
</div>
<!-- Hero Section End -->

<!-- Partner Logos Section Start -->
<?= view("page_sections/trusted_by");?>
<!-- Partner Logos Section End -->

<!-- Particle Effect Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.7.0/p5.min.js" 
        integrity="sha512-VJuc9M9GyHz+6aJ/ICed88LLa8fYSDoM07ADPXr1k/dSQ3eECCOCQvP96Cs6ytJYKmftN1yq3+yxg4vJ4uE/mg==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer"></script>
<script src="<?= base_url('assets/js/particle-effect.js');?>"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const video = document.getElementById('myVideo');
        if (!video) return;

        const sources = video.querySelectorAll('source[data-src]');
        const loadVideo = () => {
            sources.forEach(source => {
                if (!source.src) {
                    source.src = source.dataset.src;
                }
            });
            video.load();
            const playPromise = video.play();
            if (playPromise && typeof playPromise.catch === 'function') {
                playPromise.catch(() => {});
            }
        };

        if (typeof requestAnimationFrame === 'function') {
            requestAnimationFrame(() => setTimeout(loadVideo, 0));
        } else {
            setTimeout(loadVideo, 0);
        }
    });
</script>

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

<!-- Hero Notification Box Styles -->
<style>
    .hero-notification-box {
        position: absolute;
        bottom: 40px;
        right: 40px;
        width: 340px;
        max-width: 340px;
        background: rgba(0, 0, 32, 0.9);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(202, 145, 42, 0.3);
        border-radius: 12px;
        padding: 20px;
        z-index: 10;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
    }

    .notification-header {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 15px;
        padding-bottom: 12px;
        border-bottom: 1px solid rgba(202, 145, 42, 0.2);
    }

    .notification-header i {
        color: #ca912a;
        font-size: 18px;
    }

    .notification-header span {
        color: #ca912a;
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .notification-slider {
        position: relative;
        min-height: 120px;
    }

    .notification-slide {
        display: none;
        animation: fadeIn 0.5s ease;
    }

    .notification-slide.active {
        display: block;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .notification-text {
        color: rgba(255, 255, 255, 0.9);
        font-size: 15px;
        line-height: 1.5;
        margin: 0 0 15px 0;
        font-style: italic;
    }

    .notification-author {
        display: flex;
        flex-direction: column;
        gap: 2px;
    }

    .notification-author strong {
        color: #fff;
        font-size: 14px;
        font-weight: 600;
    }

    .notification-author span {
        color: rgba(255, 255, 255, 0.5);
        font-size: 12px;
    }

    .notification-dots {
        display: flex;
        justify-content: center;
        gap: 8px;
        margin-top: 15px;
    }

    .notification-dots .dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .notification-dots .dot.active {
        background: #ca912a;
        width: 20px;
        border-radius: 4px;
    }

    .notification-dots .dot:hover {
        background: rgba(202, 145, 42, 0.6);
    }

    /* Tablet Responsive */
    @media (max-width: 991px) {
        .hero-notification-box {
            width: 300px;
            bottom: 30px;
            right: 30px;
            padding: 15px;
        }

        .notification-text {
            font-size: 14px;
        }
    }

    /* Mobile Responsive */
    @media (max-width: 767px) {
        .hero-notification-box {
            position: relative;
            bottom: auto;
            right: auto;
            width: calc(100% - 40px);
            margin: 30px 20px 0;
        }

        .notification-slider {
            min-height: 100px;
        }

        .notification-text {
            font-size: 13px;
        }
    }
</style>

<!-- Hero Notification Box Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.notification-slide');
        const dots = document.querySelectorAll('.notification-dots .dot');
        let currentSlide = 0;
        let autoSlideInterval;

        function showSlide(index) {
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            
            slides[index].classList.add('active');
            dots[index].classList.add('active');
            currentSlide = index;
        }

        function nextSlide() {
            const next = (currentSlide + 1) % slides.length;
            showSlide(next);
        }

        // Auto-advance slides every 8 seconds
        function startAutoSlide() {
            autoSlideInterval = setInterval(nextSlide, 8000);
        }

        // Click on dots to navigate
        dots.forEach((dot, index) => {
            dot.addEventListener('click', function() {
                clearInterval(autoSlideInterval);
                showSlide(index);
                startAutoSlide();
            });
        });

        // Start auto-slide
        startAutoSlide();
    });
</script>

<!-- Page Header Start -->
<div class="page-header" style="background-image: none; padding: 150px 0 80px 0; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 32, 0.7); pointer-events: none;"></div>
    <!-- Glowing Accent Line -->
    <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 1px; background: linear-gradient(90deg, transparent, rgba(202, 145, 42, 0.8), transparent);"></div>
    
    <div class="container" style="position: relative; z-index: 2;">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" style="color: #fff; text-transform: uppercase; letter-spacing: 1px;">ABOUT HEX FORENSICS</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url();?>" style="color: #ca912a">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page" style="color: rgba(255,255,255,0.7)">About</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- About Us Section Start -->
<?= True ? view("page_sections/about_us") : "";?>
<!-- About Us Section End -->

<!-- Our Services Section Start -->
<?= False ? view("page_sections/our_services") : "";?>
<!-- Our Services Section End -->

<!-- Why Choose Us Section Start -->
<?= True ? view("page_sections/why_choose_us") : "";?>
<!-- Why Choose Us Section End -->

<!-- Our Feature Section Start -->
<?= False ? view("page_sections/features") : "";?>
<!-- Our Feature Section End -->

<!-- Our Testimonials Section Start -->
<?= False ? view("page_sections/testimonials") : "";?>
<!-- Our Testimonials Section End -->
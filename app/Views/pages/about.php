<!-- Page Header Start -->
<div class="page-header parallaxie" style="background-image: url(<?= base_url('assets/pictures/street.jpg')?>); padding-top: 80px; padding-bottom: 80px">
    <div class="container" style="padding-top: 8vh">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <!-- <h1 class="wow fadeInUp" data-cursor="-opaque">What we do best </h1> -->
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
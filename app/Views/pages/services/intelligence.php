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

<!-- Page Services Start -->
<div class="our-services page-services">
    <div class="container">
        <div class="section-title">
            <h3 class="wow fadeInUp">what we do best</h3>
            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Intelligence</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp">
                    <div class="icon-box">
                        <img src="<?= base_url('assets/images/icon-service-1.svg');?>" alt="">
                    </div>
                    <div class="service-title-box">
                        <div class="service-title">
                            <h3><a href="<?= base_url('services/geolocation-tracking');?>">Geolocation Tracking</a></h3>
                        </div>
                        <div class="service-btn">
                            <a href="<?= base_url('services/geolocation-tracking');?>">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <p>Advanced tracking solutions to pinpoint locations and enhance security.</p>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="icon-box">
                        <img src="<?= base_url('assets/images/icon-service-4.svg');?>" alt="">
                        <!-- <i  -->
                    </div>
                    <div class="service-title-box">
                        <div class="service-title">
                            <h3><a href="<?= base_url('services/cdr-extraction-and-analysis');?>">CDR Extraction & Analysis</a></h3>
                        </div>
                        <div class="service-btn">
                            <a href="<?= base_url('services/cdr-extraction-and-analysis');?>">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <p>Uncover hidden connections through comprehensive call data records analysis.</p>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>
            
            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                    <div class="icon-box">
                        <img src="<?= base_url('assets/images/icon-service-2.svg');?>" alt="">
                    </div>
                    <div class="service-title-box">
                        <div class="service-title">
                            <h3><a href="<?= base_url('services/communication-intelligence');?>">Communication Intelligence (COMINT)</a></h3>
                        </div>
                        <div class="service-btn">
                            <a href="<?= base_url('services/communication-intelligence');?>">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <p>Intercept, analyze, and decode communication patterns for actionable intelligence.</p>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>
            
            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.7s">
                    <div class="icon-box">
                        <img src="<?= base_url('assets/images/icon-service-5.svg');?>" alt="">
                    </div>
                    <div class="service-title-box">
                        <div class="service-title">
                            <h3><a href="<?= base_url('services/intelligence-gathering');?>">Intelligence Gathering (Law Enforcement Support)</a></h3>
                        </div>
                        <div class="service-btn">
                            <a href="<?= base_url('services/intelligence-gathering');?>">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <p>Strategic data collection to support law enforcement and security operations.</p>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Services End -->

<!-- Why Choose Us Section Start -->
<?= False ? view("page_sections/why_choose_us") : "";?>
<!-- Why Choose Us Section End -->
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
            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Cyber Security</h2>
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
                            <h3><a href="<?= base_url('services/penetration-testing');?>">Penetration Testing</a></h3>
                        </div>
                        <div class="service-btn">
                            <a href="<?= base_url('services/penetration-testing');?>">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <p>Simulating cyberattacks to assess and strengthen security defenses.</p>
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
                            <h3><a href="<?= base_url('services/vulnerability-assessment');?>">Vulnerability Assessment</a></h3>
                        </div>
                        <div class="service-btn">
                            <a href="<?= base_url('services/vulnerability-assessment');?>">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <p>Identifying and mitigating system weaknesses before attackers exploit them.</p>
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
                            <h3><a href="<?= base_url('services/osint-investigation');?>">OSINT Investigation</a></h3>
                        </div>
                        <div class="service-btn">
                            <a href="<?= base_url('services/osint-investigation');?>">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <p>Leveraging open-source intelligence to uncover critical insights.</p>
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
                            <h3><a href="<?= base_url('services/internet-sweeping');?>">Internet Sweeping</a></h3>
                        </div>
                        <div class="service-btn">
                            <a href="<?= base_url('services/internet-sweeping');?>">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <p>Detect and remove threats lurking across the internet and dark web.</p>
                    </div>
                </div>
                <!-- Service Item End -->
            </div>
            
            <div class="col-lg-4 col-md-6">
                <!-- Service Item Start -->
                <div class="service-item wow fadeInUp" data-wow-delay="0.8s">
                    <div class="icon-box">
                        <img src="<?= base_url('assets/images/icon-service-6.svg');?>" alt="">
                    </div>
                    <div class="service-title-box">
                        <div class="service-title">
                            <h3><a href="<?= base_url('services/cyber-crimes-investigations');?>">Cyber Crimes Investigations</a></h3>
                        </div>
                        <div class="service-btn">
                            <a href="<?= base_url('services/cyber-crimes-investigations');?>">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="service-content">
                        <p>Tracing digital footprints to expose and prevent cybercriminal activities.</p>
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
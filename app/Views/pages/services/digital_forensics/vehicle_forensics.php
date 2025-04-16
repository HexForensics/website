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

<div class="page-service-single">
   <div class="container">
        <div class="section-title" style="margin-top: -25px">
            <h3 class="wow fadeInUp"><?= $nav_title;?></h3>
            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque"><?= $page_title;?></h2>
        </div>
      <div class="row">
         <div class="col-lg-4 order-2 order-sm-1">
            <?= True ? view("page_sections/services_sidebar") : "";?>
         </div>

         <div class="col-lg-8 order-1 order-sm-2">
            <!-- Service Single Content Start -->
            <div class="service-single-content">
               <!-- Page Single Sidebar Start -->
               <div class="page-single-slider">
                  <div class="swiper">
                     <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <figure class="image-anime" data-cursor-text="Drag">
                                 <img src="<?= base_url('assets/pictures/vehicle_forensics.png')?>" alt="">
                              </figure>
                           </div>
                           <div class="swiper-slide">
                              <figure class="image-anime" data-cursor-text="Drag">
                                 <img src="<?= base_url('assets/pictures/services.jpg')?>" alt="">
                              </figure>
                           </div>
                     </div>
                     <div class="page-single-pagination"></div>
                  </div>
               </div>
               <!-- Page Single Sidebar End -->

               <div class="service-entry" style="color: white">
                  <p class="wow fadeInUp">
                     Vehicle forensics involves the extraction, analysis, and interpretation of digital and physical evidence from vehicles. Modern vehicles are equipped with advanced electronic systems, including infotainment units, GPS navigation, telematics, and event data recorders (EDRs), which store valuable forensic data.
                  </p>

                  <div class="service-why-choose-box">

                     <h2 class="wow fadeInUp wow fadeInUp" data-wow-delay="0.4s">How does it work</h2>
                     <p class="wow fadeInUp" data-wow-delay="0.6s">
                        Vehicle forensics plays a critical role in accident reconstruction, criminal investigations, fraud detection, and law enforcement cases, providing essential digital evidence that can be used in legal proceedings
                     </p>

                     <div class="our-benefit-body service-why-choose-list">
                        <div class="benefit-body-item wow fadeInUp">
                           <div class="icon-box">
                              <img src="<?= base_url('assets/images/icon-service-why-choose-1.svg')?>" alt="">
                           </div>
                           <div class="benefit-body-item-content">
                              <h3>GPS locations and travel history</h3>
                           </div>
                        </div>

                        <div class="benefit-body-item wow fadeInUp" data-wow-delay="0.2s">
                           <div class="icon-box">
                              <img src="<?= base_url('assets/images/icon-service-why-choose-2.svg')?>" alt="">
                           </div>
                           <div class="benefit-body-item-content">
                              <h3>Call logs, messages, and paired devices</h3>
                           </div>
                        </div>

                        <div class="benefit-body-item wow fadeInUp" data-wow-delay="0.4s">
                           <div class="icon-box">
                              <img src="<?= base_url('assets/images/icon-service-why-choose-3.svg')?>" alt="">
                           </div>
                           <div class="benefit-body-item-content">
                              <h3>Crash and event data from the vehicle’s black box</h3>
                           </div>
                        </div>

                        <div class="benefit-body-item wow fadeInUp" data-wow-delay="0.6s">
                           <div class="icon-box">
                              <img src="<?= base_url('assets/images/icon-service-why-choose-4.svg')?>" alt="">
                           </div>
                           <div class="benefit-body-item-content">
                              <h3>Vehicle system logs and diagnostics</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
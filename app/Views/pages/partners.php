<!-- Page Header Start -->
<div class="page-header parallaxie" style="background-image: url(<?= base_url('assets/pictures/street.jpg')?>); padding-top: 80px; padding-bottom: 80px">
    <div class="container" style="padding-top: 8vh">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <!-- <h1 class="wow fadeInUp" data-cursor="-opaque">Our Partners</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.2s" style="color: rgba(255, 255, 255, 0.9); font-size: 1.2rem; margin-top: 15px;">
                        Hex Forensics partners with government agencies, defense institutions, technology providers, and training organizations worldwide. Our strategic alliances enable us to deliver cutting-edge forensic solutions and comprehensive security services.
                    </p> -->
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Partners Introduction Section Start -->
<div class="partners-intro" style="padding: 80px 0; background-color: #000020;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-title text-center">
                    <h3 class="wow fadeInUp" style="color: #ca912a;">GLOBAL PARTNERSHIPS</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                        Collaborating with <span>Industry Leaders</span>
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay="0.4s" style="margin-top: 20px; font-size: 1.1rem; color: rgba(255, 255, 255, 0.8);">
                        <!-- color: #666; -->
                        Excellence is proven through action, not words. Over the years, Hex Forensics has built strategic partnerships with leading government agencies, defense institutions, and technology providers worldwide. These collaborations demonstrate our commitment to delivering world-class digital forensics, cybersecurity, and investigative solutions that protect communities and solve complex crimes.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partners Introduction Section End -->

<!-- Partner Categories Section Start -->
<div class="partner-categories" style="padding: 80px 0; background-color: #000020;">
    <!-- #f8f9fa; off-white--> 
    <div class="container">
        <!-- Government & Defense Partners -->
        <div class="partner-category-section" style="margin-bottom: 80px;">
            <div class="row align-items-center">
                <!-- Title Section (1/3) -->
                <div class="col-lg-4 col-md-12">
                    <div class="section-title" style="margin-bottom: 0;">
                        <h3 class="wow fadeInUp" style="color: #ca912a;">RELATIONS</h3>
                        <!-- GOVERNMENT & DEFENSE -->
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" style="margin-bottom: 20px;">
                            Trusted by <span style="color: #ca912a;">Public Agencies</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s" style="color: rgba(255, 255, 255, 0.7); font-size: 1rem; line-height: 1.6;">
                            Hex Forensics collaborates with Nigeria's premier defense and security institutions, providing cutting-edge digital forensics, intelligence, and cybersecurity solutions to protect national interests and ensure public safety.
                        </p>
                    </div>
                </div>
                
                <!-- Partners Marquee Section (2/3) -->
                <div class="col-lg-8 col-md-12">
                    <div class="partners-marquee" id="governmentMarqueeContainer" style="position: relative; overflow: hidden; width: 100%; padding: 20px 0; -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent); mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);">
                        <div class="partners-track" id="governmentPartnersTrack" style="display: inline-flex; align-items: center; white-space: nowrap; will-change: transform;">
                            <?php 
                            $governmentPartners = [
                                [
                                    'file' => 'dss.png',
                                    'name' => 'Department of State Services (DSS)',
                                    'abbreviation' => 'DSS',
                                    'country' => 'Nigeria',
                                    'description' => 'Nigeria\'s premier intelligence and security agency',
                                    'url' => 'https://www.dss.gov.ng'
                                ],
                                [
                                    'file' => 'navy.png',
                                    'name' => 'The Nigerian Navy',
                                    'abbreviation' => 'NN',
                                    'country' => 'Nigeria',
                                    'description' => 'Maritime defense and security operations',
                                    'url' => 'https://www.navy.mil.ng'
                                ],
                                [
                                    'file' => 'dia.png',
                                    'name' => 'Defence Intelligence Agency (DIA)',
                                    'abbreviation' => 'DIA',
                                    'country' => 'Nigeria',
                                    'description' => 'Military intelligence and strategic operations',
                                    'url' => 'https://www.dia.gov.ng'
                                ],
                                [
                                    'file' => 'npf.png',
                                    'name' => 'Nigeria Police Force (NPF)',
                                    'abbreviation' => 'NPF',
                                    'country' => 'Nigeria',
                                    'description' => 'National law enforcement and crime investigation',
                                    'url' => 'https://www.npf.gov.ng'
                                ],
                                [
                                    'file' => 'airforce.png',
                                    'name' => 'The Nigerian Air Force',
                                    'abbreviation' => 'NAF',
                                    'country' => 'Nigeria',
                                    'description' => 'Aerospace defense and security',
                                    'url' => 'https://www.airforce.mil.ng'
                                ],
                                [
                                    'file' => 'army.png',
                                    'name' => 'The Nigerian Army',
                                    'abbreviation' => 'NA',
                                    'country' => 'Nigeria',
                                    'description' => 'Land-based military operations and security',
                                    'url' => 'https://www.army.mil.ng'
                                ]
                            ];
                            
                            // Duplicate partners 4 times for seamless scrolling
                            for ($i = 0; $i < 4; $i++): 
                                foreach ($governmentPartners as $partner):
                            ?>
                                <a href="<?= $partner['url'];?>" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: inherit;">
                                    <div class="partner-card-marquee" style="display: inline-flex; flex-direction: column; margin: 0 15px; min-width: 220px; background: rgba(255, 255, 255, 0.05); border-radius: 8px; padding: 18px; transition: all 0.3s ease; border: 1px solid rgba(202, 145, 42, 0.1); cursor: pointer;">
                                    <div class="partner-logo-box" style="height: 120px; display: flex; align-items: center; justify-content: center; margin-bottom: 12px; background: rgba(255, 255, 255, 0.7); border-radius: 6px; padding: 15px;">
                                        <img src="<?= base_url('assets/partners/' . $partner['file']);?>" 
                                             alt="<?= $partner['name'];?> logo" 
                                             style="max-height: 100%; max-width: 100%; object-fit: contain; filter: brightness(1.5);">
                                    </div>
                                        <div class="partner-content">
                                            <h4 style="font-size: 0.9rem; margin-bottom: 6px; color: #ca912a; font-weight: 500; word-wrap: break-word; white-space: normal;"><?= $partner['name'];?></h4>
                                            <p style="color: rgba(255, 255, 255, 0.7); font-size: 0.75rem; margin-bottom: 8px; line-height: 1.3; word-wrap: break-word; white-space: normal; overflow-wrap: anywhere;"><?= $partner['description'];?></p>
                                            <div class="partner-location" style="display: flex; align-items: center; color: rgba(255, 255, 255, 0.5); font-size: 0.7rem; word-wrap: break-word; white-space: normal;">
                                                <i class="fa-solid fa-location-dot" style="margin-right: 5px; color: #ca912a;"></i>
                                                <?= $partner['country'];?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php 
                                endforeach;
                            endfor; 
                            ?>
                        </div>
                    </div>
                    <!-- Scroll Control Arrows -->
                    <div class="marquee-controls-bottom" style="display: flex; justify-content: center; gap: 15px; margin-top: 15px; opacity: 0; transition: opacity 0.3s ease; filter: brightness(0.9);">
                        <button class="marquee-arrow marquee-left" data-direction="left" data-target="governmentPartnersTrack" style="background: rgba(202, 145, 42, 0.9); border: none; border-radius: 50%; width: 45px; height: 45px; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.3s ease;">
                            <i class="fa-solid fa-chevron-left" style="color: #fff; font-size: 1.1rem;"></i>
                        </button>
                        <button class="marquee-arrow marquee-right" data-direction="right" data-target="governmentPartnersTrack" style="background: rgba(202, 145, 42, 0.9); border: none; border-radius: 50%; width: 45px; height: 45px; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.3s ease;">
                            <i class="fa-solid fa-chevron-right" style="color: #fff; font-size: 1.1rem;"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div> <br><br> </div>

        <!-- Technology Partners -->
        <div class="partner-category-section" style="margin-bottom: 80px;">
            <div class="row align-items-center">
                <!-- Partners Marquee Section (2/3) - Left Side -->
                <div class="col-lg-8 col-md-12 order-lg-1 order-2">
                    <div class="partners-marquee" id="technologyMarqueeContainer" style="position: relative; overflow: hidden; width: 100%; padding: 20px 0; -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent); mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);">
                        <div class="partners-track-reverse" id="technologyPartnersTrack" style="display: inline-flex; align-items: center; white-space: nowrap; will-change: transform;">
                            <?php 
                            $technologyPartners = [
                                [
                                    'file' => 'MSAB.png',
                                    'name' => 'MSAB',
                                    'country' => 'Sweden',
                                    'description' => 'World-leading mobile forensics technology and solutions',
                                    'url' => 'https://www.msab.com',
                                    'specialty' => 'Mobile Forensics'
                                ],
                                [
                                    'file' => 'QCyber-white.svg',
                                    'name' => 'Q Cyber Technologies',
                                    'country' => 'Luxembourg',
                                    'description' => 'Advanced cybersecurity and forensic solutions',
                                    'url' => 'https://www.qcyber.com',
                                    'specialty' => 'Cyber Security'
                                ],
                                [
                                    'file' => 'GMDSOFT-Logo.png',
                                    'name' => 'GMDSoft',
                                    'country' => 'South Korea',
                                    'description' => 'Digital forensic software and investigation tools',
                                    'url' => 'https://www.gmdsoft.com',
                                    'specialty' => 'Forensic Software'
                                ],
                                [
                                    'file' => 'exterro-logo.svg',
                                    'name' => 'Exterro',
                                    'country' => 'USA',
                                    'description' => 'E-discovery and legal governance software',
                                    'url' => 'https://www.exterro.com',
                                    'specialty' => 'E-Discovery'
                                ],
                                [
                                    'file' => 'stratign-logo.svg',
                                    'name' => 'Stratign',
                                    'country' => 'Dubai, UAE',
                                    'description' => 'Strategic intelligence and security solutions',
                                    'url' => 'https://www.stratign.com',
                                    'specialty' => 'Intelligence'
                                ],
                                [
                                    'file' => 'Mile2-Logo-Cyber-Certs.png',
                                    'name' => 'Mile2',
                                    'country' => 'USA',
                                    'description' => 'Information security certifications and training',
                                    'url' => 'https://www.mile2.com',
                                    'specialty' => 'Training & Certification'
                                ]
                            ];
                            
                            // Duplicate partners 4 times for seamless scrolling
                            for ($i = 0; $i < 4; $i++): 
                                foreach ($technologyPartners as $partner):
                            ?>
                                <a href="<?= $partner['url'];?>" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: inherit;">
                                    <div class="partner-card-marquee" style="display: inline-flex; flex-direction: column; margin: 0 15px; min-width: 220px; background: rgba(255, 255, 255, 0.05); border-radius: 8px; padding: 18px; transition: all 0.3s ease; border: 1px solid rgba(202, 145, 42, 0.2); cursor: pointer;">
                                        <div class="partner-logo-box" style="height: 120px; display: flex; align-items: center; justify-content: center; margin-bottom: 12px; background: rgba(255, 255, 255, 0.7); border-radius: 6px; padding: 15px;">
                                            <!-- rgba(202, 145, 42, 0.05) -->
                                            <img src="<?= base_url('assets/partners/' . $partner['file']);?>" 
                                                 alt="<?= $partner['name'];?> logo" 
                                                 style="max-height: 100%; max-width: 100%; object-fit: contain; filter: brightness(1.2);">
                                        </div>
                                        <div class="partner-content">
                                            <h4 style="font-size: 0.9rem; margin-bottom: 6px; color: #ca912a; font-weight: 500; word-wrap: break-word; white-space: normal;"><?= $partner['name'];?></h4>
                                            <p style="color: rgba(255, 255, 255, 0.7); font-size: 0.75rem; margin-bottom: 8px; line-height: 1.3; word-wrap: break-word; white-space: normal; overflow-wrap: anywhere;"><?= $partner['description'];?></p>
                                            <div class="partner-location" style="display: flex; align-items: center; justify-content: space-between; color: rgba(255, 255, 255, 0.5); font-size: 0.7rem; word-wrap: break-word; white-space: normal;">
                                                <div style="display: flex; align-items: center;">
                                                    <i class="fa-solid fa-location-dot" style="margin-right: 5px; color: #ca912a;"></i>
                                                    <?= $partner['country'];?>
                                                </div>
                                                <div class="specialty-inline" style="background: rgba(202, 145, 42, 0.15); color: #ca912a; padding: 2px 6px; border-radius: 8px; font-size: 0.65rem; font-weight: 500;">
                                                    <?= $partner['specialty'];?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php 
                                endforeach;
                            endfor; 
                            ?>
                        </div>
                    </div>
                    <!-- Scroll Control Arrows -->
                    <div class="marquee-controls-bottom" style="display: flex; justify-content: center; gap: 15px; margin-top: 15px; opacity: 0; transition: opacity 0.3s ease; filter: brightness(0.9);">
                        <button class="marquee-arrow marquee-left" data-direction="left" data-target="technologyPartnersTrack" style="background: rgba(202, 145, 42, 0.9); border: none; border-radius: 50%; width: 45px; height: 45px; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.3s ease;">
                            <i class="fa-solid fa-chevron-left" style="color: #fff; font-size: 1.1rem;"></i>
                        </button>
                        <button class="marquee-arrow marquee-right" data-direction="right" data-target="technologyPartnersTrack" style="background: rgba(202, 145, 42, 0.9); border: none; border-radius: 50%; width: 45px; height: 45px; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.3s ease;">
                            <i class="fa-solid fa-chevron-right" style="color: #fff; font-size: 1.1rem;"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Title Section (1/3) - Right Side -->
                <div class="col-lg-4 col-md-12 order-lg-2 order-1">
                    <div class="section-title" style="margin-bottom: 0; text-align: right;">
                        <h3 class="wow fadeInUp" style="color: #ca912a;">PARTNERS</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" style="margin-bottom: 20px;">
                            Powered by <span style="color: #ca912a;">Advanced Technology</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s" style="color: rgba(255, 255, 255, 0.7); font-size: 1rem; line-height: 1.6;">
                            Our global technology partnerships span across continents, bringing together industry leaders in mobile forensics, cybersecurity, e-discovery, and digital investigation tools to deliver comprehensive solutions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partner Categories Section End -->

<!-- Featured Partnerships Section Start -->
<div class="featured-partnerships" style="padding: 80px 0; background-color: #000020">
    <div class="container">
        <!-- Section Title -->
        <!-- <div class="section-title text-center">
            <h2 class="wow fadeInUp" style="color: #fff; margin-bottom: 20px; font-size: 2.2rem;">
                Strategic Partnerships <span style="color: #ca912a;">Driving Excellence</span>
            </h2>
            <p class="wow fadeInUp" data-wow-delay="0.2s" style="color: rgba(255, 255, 255, 0.7); font-size: 1.1rem; margin-bottom: 60px; max-width: 600px; margin-left: auto; margin-right: auto;">
                Collaborating with industry leaders and government agencies to deliver cutting-edge digital forensics solutions.
            </p>
        </div> -->

        <!-- MSAB Partnership -->
        <div class="partnership-item" style="background: transparent; border-radius: 12px; padding: 50px; margin-bottom: 40px;">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                    <!-- Partner Logo Section (2/3 of left column) -->
                    <div class="partner-logo-large" style="height: 66.67%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                        <a href="https://www.msab.com" target="_blank" rel="noopener noreferrer" style="display: flex; align-items: center; justify-content: center; width: 100%; height: 100%;">
                            <img src="<?= base_url('assets/partners/MSAB_Certified Partner_standing_RGB_Negativ.png');?>" alt="MSAB Logo" style="max-height: 200px; max-width: 90%; object-fit: contain; cursor: pointer; transition: transform 0.3s ease;">
                        </a>
                    </div>
                    
                    <!-- Partnership Details Section (1/3 of left column) -->
                    <div class="partnership-details" style="height: 33.33%;">
                        <p style="color: rgba(255, 255, 255, 0.9); font-size: 1.1rem; line-height: 1.3; margin-bottom: 20px; text-align: justify;">
                            Working together with MSAB, Hex Forensics is using advanced mobile forensics technology to enable an enhanced approach to digital investigations. This partnership allows examiners to better serve their agency without increasing headcount or requiring drastic investments in new forensic equipment.
                        </p>
                        <p style="color: rgba(255, 255, 255, 0.9); font-size: 1.1rem; line-height: 1.3; margin-bottom: 25px; text-align: justify;">
                            Our collaboration brings world-class XRY technology to Africa, providing law enforcement agencies with the most advanced mobile extraction and analysis capabilities available globally. Through comprehensive training programs and ongoing support, we ensure investigators can leverage these powerful tools effectively.
                        </p>
                        <a href="<?= base_url('get-in-touch');?>" class="learn-more-btn" style="display: inline-block; background: #ff8c00; color: #fff; padding: 12px 30px; border-radius: 6px; text-decoration: none; font-weight: 600; font-size: 1rem; transition: all 0.3s ease; box-shadow: 0 3px 10px rgba(255, 140, 0, 0.3);">
                            LEARN MORE
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <a href="https://www.msab.com" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                        <div class="partnership-media" style="text-align: center; cursor: pointer; transition: transform 0.3s ease;">
                            <img src="https://www.gmdsoft.com/wp-content/uploads/2023/11/solution_img03.jpg" alt="Mobile Forensics Work" style="width: 100%; max-width: 700px; border-radius: 12px; box-shadow: 0 8px 25px rgba(0,0,0,0.15);">
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- DIA Partnership -->
        <div class="partnership-item" style="background: transparent; border-radius: 12px; padding: 50px; margin-bottom: 40px;">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-4 order-lg-2 order-1">
                    <!-- Partner Logo Section (2/3 of right column) -->
                    <div class="partner-logo-large" style="height: 66.67%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                        <a href="https://www.dia.gov.ng" target="_blank" rel="noopener noreferrer" style="display: flex; align-items: center; justify-content: center; width: 100%; height: 100%;">
                            <img src="<?= base_url('assets/partners/dia.png');?>" alt="DIA Logo" style="max-height: 200px; max-width: 90%; object-fit: contain; cursor: pointer; transition: transform 0.3s ease;">
                        </a>
                    </div>
                    
                    <!-- Partnership Details Section (1/3 of right column) -->
                    <div class="partnership-details" style="height: 33.33%;">
                        <h3 style="color: #fff; font-size: 2.2rem; font-weight: 700; margin-bottom: 15px; text-align: center;">Defence Intelligence Agency (DIA)</h3>
                        <p style="color: rgba(255, 255, 255, 0.9); font-size: 1.1rem; line-height: 1.3; margin-bottom: 20px; text-align: justify;">
                            Hex Forensics has had the privilege of partnering with the Defence Intelligence Agency (DIA) to establish a state-of-the-art digital forensic laboratory. This groundbreaking project represents a significant milestone in enhancing Nigeria's military intelligence and digital investigation capabilities.
                        </p>
                        <p style="color: rgba(255, 255, 255, 0.9); font-size: 1.1rem; line-height: 1.3; margin-bottom: 25px; text-align: justify;">
                            Our comprehensive approach included designing and building a fully equipped forensic lab with cutting-edge technology, providing specialized training programs for DIA personnel, and establishing protocols for advanced digital investigations. This partnership ensures Nigeria's defence intelligence operations have access to world-class forensic capabilities and expertise.
                        </p>
                        <a href="<?= base_url('get-in-touch');?>" class="learn-more-btn" style="display: inline-block; background: #ff8c00; color: #fff; padding: 12px 30px; border-radius: 6px; text-decoration: none; font-weight: 600; font-size: 1rem; transition: all 0.3s ease; box-shadow: 0 3px 10px rgba(255, 140, 0, 0.3);">
                            LEARN MORE
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 order-lg-1 order-2">
                    <a href="https://www.dia.gov.ng" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                        <div class="partnership-media" style="text-align: center; cursor: pointer; transition: transform 0.3s ease;">
                            <img src="<?= base_url('assets/images/what-we-do-img-1.jpg');?>" alt="Forensic Laboratory Setup" style="width: 100%; max-width: 700px; border-radius: 12px; box-shadow: 0 8px 25px rgba(0,0,0,0.15);">
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Mile2 Partnership -->
        <div class="partnership-item" style="background: transparent; border-radius: 12px; padding: 50px; margin-bottom: 40px;">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                    <!-- Partner Logo Section (2/3 of left column) -->
                    <div class="partner-logo-large" style="height: 66.67%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                        <a href="https://www.mile2.com" target="_blank" rel="noopener noreferrer" style="display: flex; align-items: center; justify-content: center; width: 100%; height: 100%;">
                            <img src="<?= base_url('assets/partners/Mile2-Logo-Cyber-Certs.png');?>" alt="Mile2 Logo" style="max-height: 200px; max-width: 90%; object-fit: contain; cursor: pointer; transition: transform 0.3s ease;">
                        </a>
                    </div>
                    
                    <!-- Partnership Details Section (1/3 of left column) -->
                    <div class="partnership-details" style="height: 33.33%;">
                        <p style="color: rgba(255, 255, 255, 0.9); font-size: 1.1rem; line-height: 1.3; margin-bottom: 20px; text-align: justify;">
                            Through our partnership with Mile2, Hex Forensics delivers world-class cybersecurity certifications and training programs across Africa. This strategic alliance enables us to offer internationally recognized credentials that advance professional development in the cybersecurity field.
                        </p>
                        <p style="color: rgba(255, 255, 255, 0.9); font-size: 1.1rem; line-height: 1.3; margin-bottom: 25px; text-align: justify;">
                            Together, we're building the next generation of information security professionals with comprehensive hands-on training, industry-recognized certifications, and expert-led workshops. Our training programs ensure professionals gain practical skills that directly translate to enhanced security capabilities in their organizations.
                        </p>
                        <a href="<?= base_url('get-in-touch');?>" class="learn-more-btn" style="display: inline-block; background: #ff8c00; color: #fff; padding: 12px 30px; border-radius: 6px; text-decoration: none; font-weight: 600; font-size: 1rem; transition: all 0.3s ease; box-shadow: 0 3px 10px rgba(255, 140, 0, 0.3);">
                            LEARN MORE
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <a href="https://www.mile2.com" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                        <div class="partnership-media" style="text-align: center; cursor: pointer; transition: transform 0.3s ease;">
                            <img src="<?= base_url('assets/partners/Mile2-Hex-Cert.png');?>" alt="Cybersecurity Training" style="width: 100%; max-width: 700px; border-radius: 12px; box-shadow: 0 8px 25px rgba(0,0,0,0.15);">
                        </div>
                    </a>
                    <!-- https://mile2.com/wp-content/uploads/PPT-slide.jpg -->
                </div>
            </div>
        </div>

        <!-- GMDSoft Partnership -->
        <div class="partnership-item" style="background: transparent; border-radius: 12px; padding: 50px; margin-bottom: 40px;">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-4 order-lg-2 order-1">
                    <!-- Partner Logo Section (2/3 of right column) -->
                    <div class="partner-logo-large" style="height: 66.67%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                        <a href="https://www.gmdsoft.com" target="_blank" rel="noopener noreferrer" style="display: flex; align-items: center; justify-content: center; width: 100%; height: 100%;">
                            <img src="https://www.gmdsoft.com/wp-content/uploads/2024/04/GMDSOFT_WT_Logo_Line.png" alt="GMDSoft Logo" style="max-height: 500px; max-width: 90%; object-fit: contain; cursor: pointer; transition: transform 0.3s ease;">
                        </a>
                    </div>
                    
                    <!-- Partnership Details Section (1/3 of right column) -->
                    <div class="partnership-details" style="height: 33.33%;">
                        <p style="color: rgba(255, 255, 255, 0.9); font-size: 1.1rem; line-height: 1.3; margin-bottom: 20px; text-align: justify;">
                            As the top trusted partner and exclusive distributor for GMDSoft in Nigeria, Hex Forensics brings world-class digital forensic software and investigation tools to law enforcement agencies across the country. This strategic partnership positions us as the premier provider of GMDSoft's innovative forensic solutions in West Africa.
                        </p>
                        <p style="color: rgba(255, 255, 255, 0.9); font-size: 1.1rem; line-height: 1.3; margin-bottom: 25px; text-align: justify;">
                            Our collaboration ensures Nigerian investigators have access to cutting-edge forensic software, comprehensive training programs, and ongoing technical support. Through this partnership, we deliver GMDSoft's advanced digital investigation capabilities while providing localized expertise and support that meets the specific needs of Nigerian law enforcement and security agencies.
                        </p>
                        <a href="<?= base_url('get-in-touch');?>" class="learn-more-btn" style="display: inline-block; background: #ff8c00; color: #fff; padding: 12px 30px; border-radius: 6px; text-decoration: none; font-weight: 600; font-size: 1rem; transition: all 0.3s ease; box-shadow: 0 3px 10px rgba(255, 140, 0, 0.3);">
                            LEARN MORE
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 order-lg-1 order-2">
                    <a href="https://www.gmdsoft.com" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                        <div class="partnership-media" style="text-align: center; cursor: pointer; transition: transform 0.3s ease;">
                            <img src="https://www.gmdsoft.com/wp-content/uploads/2023/11/solution_img04-1.jpg" alt="Digital Forensic Software" style="width: 100%; max-width: 700px; border-radius: 12px; box-shadow: 0 8px 25px rgba(0,0,0,0.15);">
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Featured Partnerships Section End -->

<!-- Partnership Benefits Section Start -->
<div class="partnership-benefits" style="padding: 80px 0; background-color: #000020;">
    <div class="container">
        <div class="section-title text-center">
            <h3 class="wow fadeInUp" style="color: #ca912a;">YOUR STRATEGIC ADVANTAGE</h3>
            <h2 class="wow fadeInUp" data-wow-delay="0.2s" style="color: #fff;">
                Partnering With Us <span style="color: #ca912a;">Elevates Your Mission</span>
            </h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p class="wow fadeInUp" data-wow-delay="0.4s" style="color: rgba(255, 255, 255, 0.8); font-size: 1.1rem; line-height: 1.7; margin-bottom: 60px;">
                        Our collaborations are more than just business arrangements; they are powerful alliances that have consistently led to groundbreaking successes. By combining our expertise with the unique strengths of our partners, we have solved complex cases, neutralized critical threats, and delivered justice where it was needed most. When you partner with Hex Forensics, you gain a dedicated ally committed to achieving shared objectives and creating a safer world.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="benefit-item wow fadeInUp" style="text-align: center; padding: 30px 20px;">
                    <div class="benefit-icon" style="width: 80px; height: 80px; margin: 0 auto 20px; background: rgba(202, 145, 42, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fa-solid fa-bullhorn" style="font-size: 2rem; color: #ca912a;"></i>
                    </div>
                    <h4 style="color: #fff; margin-bottom: 15px; font-size: 1.2rem;">Amplify Your Visibility</h4>
                    <p style="color: rgba(255, 255, 255, 0.7); font-size: 0.95rem;">Partner with us to reach dedicated professionals and decision-makers. We prioritize showcasing solutions that deliver real value to our community.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="benefit-item wow fadeInUp" data-wow-delay="0.2s" style="text-align: center; padding: 30px 20px;">
                    <div class="benefit-icon" style="width: 80px; height: 80px; margin: 0 auto 20px; background: rgba(202, 145, 42, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fa-solid fa-folder-open" style="font-size: 2rem; color: #ca912a;"></i>
                    </div>
                    <h4 style="color: #fff; margin-bottom: 15px; font-size: 1.2rem;">Comprehensive Partner Resources</h4>
                    <p style="color: rgba(255, 255, 255, 0.7); font-size: 0.95rem;">Equip your team for success with co-branded materials, dedicated support funds, and premium resources designed for professional engagement worldwide.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="benefit-item wow fadeInUp" data-wow-delay="0.4s" style="text-align: center; padding: 30px 20px;">
                    <div class="benefit-icon" style="width: 80px; height: 80px; margin: 0 auto 20px; background: rgba(202, 145, 42, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fa-solid fa-users-gear" style="font-size: 2rem; color: #ca912a;"></i>
                    </div>
                    <h4 style="color: #fff; margin-bottom: 15px; font-size: 1.2rem;">Direct Collaboration</h4>
                    <p style="color: rgba(255, 255, 255, 0.7); font-size: 0.95rem;">Beyond resources, we build genuine partnerships. Work directly with our teams to ensure optimal outcomes and exceptional experiences for mutual clients.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <div class="benefit-item wow fadeInUp" data-wow-delay="0.6s" style="text-align: center; padding: 30px 20px;">
                    <div class="benefit-icon" style="width: 80px; height: 80px; margin: 0 auto 20px; background: rgba(202, 145, 42, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fa-solid fa-graduation-cap" style="font-size: 2rem; color: #ca912a;"></i>
                    </div>
                    <h4 style="color: #fff; margin-bottom: 15px; font-size: 1.2rem;">Continuous Education & Growth</h4>
                    <p style="color: rgba(255, 255, 255, 0.7); font-size: 0.95rem;">Access specialized training programs, professional certifications, and expert-led workshops that empower your team to excel as trusted partners.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partnership Benefits Section End -->

<!-- Strategic CTAs Section Start -->
<div class="strategic-ctas" style="padding: 80px 0; background: linear-gradient(135deg, #000020 0%, rgba(202, 145, 42, 0.08) 50%, #000020 100%);">
    <div class="container">
        <!-- Primary Partnership CTA -->
        <div class="row mb-5">
            <div class="col-lg-10 offset-lg-1">
                <div class="primary-cta wow fadeInUp" style="text-align: center; background: transparent; padding: 40px 30px; border-radius: 10px; position: relative; overflow: hidden;">
                    <!-- <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(45deg, transparent 30%, rgba(202, 145, 42, 0.05) 50%, transparent 70%); z-index: 1;"></div> -->
                    <div style="position: relative; z-index: 2;">
                        <!-- <h2 style="color: #fff; font-size: 2rem; margin-bottom: 15px; font-weight: 600;">
                            Ready to <span style="color: #ca912a;">Partner</span> with Us?
                        </h2> -->
                        <h5 style="color: rgba(255, 255, 255, 0.8); font-size: 1.5rem; margin-bottom: 25px; max-width: 900px; margin-left: auto; margin-right: auto; line-height: 1.5;">
                            Join our network of government agencies, technology leaders, and training organizations. Together, we're advancing digital forensics and cybersecurity across Africa.
                        </h5>
                        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                            <a href="<?= base_url('get-in-touch');?>" class="cta-primary" style="display: inline-flex; align-items: center; padding: 12px 25px; background: #ca912a; filter: grayscale(0%) brightness(1.1); color: #fff; text-decoration: none; border-radius: 6px; font-weight: 600; font-size: 0.95rem; transition: all 0.3s ease; box-shadow: 0 2px 8px rgba(202, 145, 42, 0.2);">
                                <i class="fa-solid fa-handshake" style="margin-right: 8px; font-size: 1rem;"></i>
                                Start Partnership Discussion
                            </a>
                            <a href="<?= base_url('about-us');?>" class="cta-secondary" style="display: inline-flex; align-items: center; padding: 12px 25px; background: transparent; color: #fff; text-decoration: none; border-radius: 6px; font-weight: 500; font-size: 0.95rem; border: 1px solid rgba(255, 255, 255, 0.3); transition: all 0.3s ease;">
                                <i class="fa-solid fa-building" style="margin-right: 8px; font-size: 0.95rem;"></i>
                                Learn About Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Multi-Path CTAs Grid -->
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="pathway-cta wow fadeInUp" style="background: linear-gradient(135deg, rgba(0, 0, 32, 0.4) 0%, rgba(202, 145, 42, 0.03) 100%); padding: 25px 20px; border-radius: 8px; text-align: center; height: 100%; transition: all 0.3s ease;">
                    <div class="pathway-icon" style="width: 60px; height: 60px; background: linear-gradient(135deg, rgba(202, 145, 42, 0.12) 0%, rgba(202, 145, 42, 0.06) 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 18px;">
                        <i class="fa-solid fa-shield-halved" style="color: #ca912a; font-size: 1.4rem;"></i>
                    </div>
                    <h4 style="color: #fff; margin-bottom: 12px; font-size: 1.1rem;">Government Agencies</h4>
                    <p style="color: rgba(255, 255, 255, 0.7); margin-bottom: 18px; line-height: 1.5; font-size: 0.9rem;">
                        Enhance your investigative capabilities with cutting-edge digital forensics solutions and specialized training programs.
                    </p>
                    <a href="<?= base_url('get-in-touch');?>" class="pathway-btn" style="display: inline-flex; align-items: center; padding: 8px 16px; background: rgba(202, 145, 42, 0.15); color: #ca912a; text-decoration: none; border-radius: 5px; font-weight: 500; font-size: 0.85rem; transition: all 0.3s ease;">
                        Explore Solutions
                        <i class="fa-solid fa-arrow-right" style="margin-left: 6px; font-size: 0.8rem;"></i>
                    </a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="pathway-cta wow fadeInUp" data-wow-delay="0.2s" style="background: linear-gradient(135deg, rgba(0, 0, 32, 0.4) 0%, rgba(202, 145, 42, 0.03) 100%); padding: 25px 20px; border-radius: 8px; text-align: center; height: 100%; transition: all 0.3s ease;">
                    <div class="pathway-icon" style="width: 60px; height: 60px; background: linear-gradient(135deg, rgba(202, 145, 42, 0.12) 0%, rgba(202, 145, 42, 0.06) 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 18px;">
                        <i class="fa-solid fa-microchip" style="color: #ca912a; font-size: 1.4rem;"></i>
                    </div>
                    <h4 style="color: #fff; margin-bottom: 12px; font-size: 1.1rem;">Technology Partners</h4>
                    <p style="color: rgba(255, 255, 255, 0.7); margin-bottom: 18px; line-height: 1.5; font-size: 0.9rem;">
                        Join our technology ecosystem to deliver innovative forensic tools and expand market reach across Africa.
                    </p>
                    <a href="<?= base_url('get-in-touch');?>" class="pathway-btn" style="display: inline-flex; align-items: center; padding: 8px 16px; background: rgba(202, 145, 42, 0.15); color: #ca912a; text-decoration: none; border-radius: 5px; font-weight: 500; font-size: 0.85rem; transition: all 0.3s ease;">
                        Technology Integration
                        <i class="fa-solid fa-arrow-right" style="margin-left: 6px; font-size: 0.8rem;"></i>
                    </a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="pathway-cta wow fadeInUp" data-wow-delay="0.4s" style="background: linear-gradient(135deg, rgba(0, 0, 32, 0.4) 0%, rgba(202, 145, 42, 0.03) 100%); padding: 25px 20px; border-radius: 8px; text-align: center; height: 100%; transition: all 0.3s ease;">
                    <div class="pathway-icon" style="width: 60px; height: 60px; background: linear-gradient(135deg, rgba(202, 145, 42, 0.12) 0%, rgba(202, 145, 42, 0.06) 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 18px;">
                        <i class="fa-solid fa-graduation-cap" style="color: #ca912a; font-size: 1.4rem;"></i>
                    </div>
                    <h4 style="color: #fff; margin-bottom: 12px; font-size: 1.1rem;">Training Organizations</h4>
                    <p style="color: rgba(255, 255, 255, 0.7); margin-bottom: 18px; line-height: 1.5; font-size: 0.9rem;">
                        Collaborate with us to deliver world-class cybersecurity and digital forensics training across the continent.
                    </p>
                    <a href="<?= base_url('get-in-touch');?>" class="pathway-btn" style="display: inline-flex; align-items: center; padding: 8px 16px; background: rgba(202, 145, 42, 0.15); color: #ca912a; text-decoration: none; border-radius: 5px; font-weight: 500; font-size: 0.85rem; transition: all 0.3s ease;">
                        Training Partnerships
                        <i class="fa-solid fa-arrow-right" style="margin-left: 6px; font-size: 0.8rem;"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Contact Information Banner -->
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="contact-banner wow fadeInUp" style="background: linear-gradient(135deg, rgba(0, 0, 32, 0.6) 0%, rgba(202, 145, 42, 0.08) 50%, rgba(0, 0, 32, 0.6) 100%); padding: 25px; border-radius: 8px; text-align: center; border: 1px solid rgba(202, 145, 42, 0.2);">
                    <div style="display: flex; align-items: center; justify-content: center; flex-wrap: wrap; gap: 30px;">
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <i class="fa-solid fa-phone" style="color: #ca912a; font-size: 1.2rem;"></i>
                            <div>
                                <p style="color: rgba(255, 255, 255, 0.6); margin: 0; font-size: 0.8rem;">Call Us</p>
                                <p style="color: #fff; margin: 0; font-weight: 500; font-size: 0.95rem;">+234 906 677 9939</p>
                            </div>
                        </div>
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <i class="fa-solid fa-envelope" style="color: #ca912a; font-size: 1.2rem;"></i>
                            <div>
                                <p style="color: rgba(255, 255, 255, 0.6); margin: 0; font-size: 0.8rem;">Email Us</p>
                                <p style="color: #fff; margin: 0; font-weight: 500; font-size: 0.95rem;">info@hexforensics.com</p>
                            </div>
                        </div>
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <i class="fa-solid fa-calendar-days" style="color: #ca912a; font-size: 1.2rem;"></i>
                            <div>
                                <p style="color: rgba(255, 255, 255, 0.6); margin: 0; font-size: 0.8rem;">Schedule</p>
                                <p style="color: #fff; margin: 0; font-weight: 500; font-size: 0.95rem;">Book a Consultation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Strategic CTAs Section End -->


<style>
    .partner-card {
        position: relative;
        overflow: hidden;
    }
    
    .partner-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
    }
    
    .partner-card:hover .partner-logo-box {
        background: rgba(202, 145, 42, 0.1);
    }
    
    .btn-default:hover {
        background: #b37f1f !important;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(202, 145, 42, 0.3);
    }
    
    .btn-outline:hover {
        background: rgba(255, 255, 255, 0.1) !important;
        color: #ca912a !important;
        border-color: #ca912a !important;
        transform: translateY(-2px);
    }
    
    .partner-card-marquee:hover {
        transform: translateY(-5px);
        background: rgba(255, 255, 255, 0.08) !important;
        border-color: rgba(202, 145, 42, 0.3) !important;
    }
    
    /* Marquee Controls */
    .partners-marquee:hover + .marquee-controls-bottom {
        opacity: 1 !important;
    }
    
    .marquee-controls-bottom:hover {
        opacity: 1 !important;
    }
    
    .marquee-arrow:hover {
        background: rgba(202, 145, 42, 1) !important;
        transform: scale(1.1);
        box-shadow: 0 4px 12px rgba(202, 145, 42, 0.3);
    }
    
    .marquee-arrow:active {
        transform: scale(0.95);
    }
    
    /* Custom button arrow override */
    .btn-custom-arrow::before {
        display: none !important;
    }
    
    .btn-custom-arrow {
        padding: 15px 30px !important;
    }
    
    /* Mobile Responsive Styles */
    @media (max-width: 768px) {
        .page-header-box h1 {
            font-size: 2rem !important;
        }
        
        .page-header-box p {
            font-size: 1rem !important;
        }
        
        .section-title h2 {
            font-size: 1.8rem !important;
        }
        
        .section-title {
            text-align: center !important;
            margin-bottom: 30px !important;
        }
        
        .partner-card {
            margin-bottom: 20px !important;
        }
        
        .partner-card-marquee {
            min-width: 180px !important;
            padding: 15px !important;
            word-wrap: break-word !important;
            overflow-wrap: break-word !important;
        }
        
        .partner-card-marquee .partner-logo-box {
            height: 80px !important;
            padding: 12px !important;
        }
        
        .partner-card-marquee h4 {
            font-size: 0.9rem !important;
            word-wrap: break-word !important;
            white-space: normal !important;
        }
        
        .partner-card-marquee h5 {
            font-size: 0.75rem !important;
            word-wrap: break-word !important;
            white-space: normal !important;
        }
        
        .partner-card-marquee p {
            font-size: 0.7rem !important;
            word-wrap: break-word !important;
            white-space: normal !important;
            overflow-wrap: anywhere !important;
        }
        
        .specialty-inline {
            font-size: 0.6rem !important;
            padding: 2px 4px !important;
            white-space: nowrap !important;
            overflow: hidden !important;
            text-overflow: ellipsis !important;
            max-width: 70px !important;
        }
        
        .partner-location {
            flex-direction: column !important;
            align-items: flex-start !important;
            gap: 4px !important;
        }
        
        .partner-location > div:first-child {
            width: 100% !important;
        }
        
        .partner-cta h2 {
            font-size: 1.8rem !important;
        }
        
        .cta-buttons {
            flex-direction: column !important;
            align-items: stretch !important;
        }
        
        .cta-buttons a {
            width: 100%;
            text-align: center;
        }
        
        /* Partnership Benefits - Responsive Tiles */
        .benefit-item {
            padding: 20px 10px !important;
        }
        
        .benefit-item h4 {
            font-size: 1rem !important;
        }
        
        .benefit-item p {
            font-size: 0.85rem !important;
        }
        
        .benefit-icon {
            width: 60px !important;
            height: 60px !important;
            margin: 0 auto 15px !important;
        }
        
        .benefit-icon i {
            font-size: 1.5rem !important;
        }
    }
    
    /* Extra small devices - further tile adjustments */
    @media (max-width: 576px) {
        .benefit-item {
            padding: 15px 5px !important;
        }
        
        .benefit-item h4 {
            font-size: 0.9rem !important;
            margin-bottom: 10px !important;
        }
        
        .benefit-item p {
            font-size: 0.8rem !important;
        }
        
        .benefit-icon {
            width: 50px !important;
            height: 50px !important;
            margin: 0 auto 10px !important;
        }
        
        .benefit-icon i {
            font-size: 1.2rem !important;
        }
    }
    
    /* Featured Partnerships Styling */
    .partnership-item {
        min-height: 600px;
    }
    
    .partner-logo-large {
        min-height: 400px;
    }
    
    .partner-logo-large img:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease;
    }
    
    .partnership-details {
        min-height: 200px;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
    }
    
    .learn-more-btn:hover {
        background: #e67c00 !important;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(255, 140, 0, 0.4) !important;
    }
    
    .partnership-btn:hover {
        background: #b8821f !important;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(202, 145, 42, 0.3);
    }
    
    .partnership-cta:hover {
        border-color: rgba(202, 145, 42, 0.4) !important;
        background: rgba(202, 145, 42, 0.08) !important;
    }
    
    .partnership-media img:hover {
        transform: scale(1.03);
        transition: transform 0.4s ease;
    }
    
    /* Partnership Details Styling */
    .partnership-details h3 {
        position: relative;
    }
    
    .partnership-details h3::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background: #ff8c00;
        border-radius: 2px;
    }
    
    /* Responsive Adjustments for Featured Partnerships */
    @media (max-width: 768px) {
        .featured-partnerships {
            padding: 60px 0 !important;
        }
        .partnership-item {
            padding: 40px 25px !important;
            margin-bottom: 30px !important;
            min-height: auto !important;
        }
        .partnership-item h3 {
            font-size: 1.8rem !important;
            margin-bottom: 20px !important;
        }
        .partnership-item .col-lg-6 {
            margin-bottom: 30px !important;
        }
        .partner-logo-large {
            margin-bottom: 25px !important;
            height: auto !important;
            min-height: auto !important;
        }
        .partner-logo-large img {
            max-height: 120px !important;
        }
        .partnership-details {
            height: auto !important;
            min-height: auto !important;
        }
        .partnership-media img {
            max-width: 100% !important;
            border-radius: 8px !important;
        }
        .partnership-cta {
            padding: 30px 20px !important;
        }
        .partnership-details p {
            font-size: 1rem !important;
            text-align: left !important;
        }
        .learn-more-btn {
            width: 100%;
            text-align: center;
            padding: 15px 30px !important;
        }
    }
    
    @media (max-width: 576px) {
        .partnership-item {
            padding: 30px 20px !important;
        }
        .partnership-item h3 {
            font-size: 1.6rem !important;
        }
        .partnership-details p {
            font-size: 0.95rem !important;
        }
        .partner-logo-large img {
            max-height: 100px !important;
        }
    }
    
    /* Contact Banner Hover Effects */
    .contact-banner:hover {
        border-color: rgba(202, 145, 42, 0.4) !important;
        background: linear-gradient(135deg, rgba(202, 145, 42, 0.2) 0%, rgba(202, 145, 42, 0.08) 100%) !important;
    }
    
    /* Mobile Responsive for Strategic CTAs */
    @media (max-width: 768px) {
        .strategic-ctas {
            padding: 60px 0 !important;
        }
        .primary-cta {
            padding: 40px 25px !important;
        }
        .primary-cta h2 {
            font-size: 2.2rem !important;
        }
        .primary-cta p {
            font-size: 1.1rem !important;
        }
        .primary-cta div {
            flex-direction: column !important;
            gap: 15px !important;
        }
        .cta-primary,
        .cta-secondary {
            width: 100%;
            justify-content: center !important;
        }
        .contact-banner > div {
            flex-direction: column !important;
            gap: 25px !important;
        }
    }
</style>

<script nonce="{csp-script-nonce}">
    document.addEventListener('DOMContentLoaded', function() {
        // Government Partners Marquee (Left to Right)
        const governmentMarquee = document.getElementById('governmentPartnersTrack');
        const governmentContainer = document.getElementById('governmentMarqueeContainer');
        if (governmentMarquee && governmentContainer) {
            const scrollSpeed = 0.5; // pixels per frame
            let governmentPosition = 0;
            let governmentPaused = false;
            let governmentAnimationId;
            let governmentManualControl = false;

            function scrollGovernment() {
                if (!governmentPaused && !governmentManualControl) {
                    governmentPosition += scrollSpeed;
                    
                    // Reset position when we've scrolled through half the content
                    if (governmentPosition >= governmentMarquee.scrollWidth / 2) {
                        governmentPosition = 0;
                    }
                    
                    governmentMarquee.style.transform = `translateX(${-governmentPosition}px)`;
                }
                governmentAnimationId = requestAnimationFrame(scrollGovernment);
            }

            // Manual scroll function
            function manualScrollGovernment(direction) {
                governmentManualControl = true;
                const scrollAmount = 250; // pixels to scroll
                
                // Add smooth transition
                governmentMarquee.style.transition = 'transform 0.6s ease-in-out';
                
                if (direction === 'left') {
                    governmentPosition = Math.max(0, governmentPosition - scrollAmount);
                } else {
                    governmentPosition = Math.min(governmentMarquee.scrollWidth / 2, governmentPosition + scrollAmount);
                }
                
                governmentMarquee.style.transform = `translateX(${-governmentPosition}px)`;
                
                // Remove transition after animation completes and resume auto-scroll
                setTimeout(() => {
                    governmentMarquee.style.transition = '';
                    governmentManualControl = false;
                }, 3000);
            }

            // Start the animation
            governmentAnimationId = requestAnimationFrame(scrollGovernment);

            // Pause on hover
            governmentContainer.addEventListener('mouseenter', function() {
                governmentPaused = true;
            });

            governmentContainer.addEventListener('mouseleave', function() {
                governmentPaused = false;
            });

            // Add click handlers for manual controls
            const governmentArrows = governmentContainer.parentElement.querySelectorAll('.marquee-arrow[data-target="governmentPartnersTrack"]');
            governmentArrows.forEach(arrow => {
                arrow.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    const direction = this.getAttribute('data-direction');
                    manualScrollGovernment(direction);
                });
            });
        }

        // Technology Partners Marquee (Right to Left)
        const technologyMarquee = document.getElementById('technologyPartnersTrack');
        const technologyContainer = document.getElementById('technologyMarqueeContainer');
        if (technologyMarquee && technologyContainer) {
            const scrollSpeed = 0.5; // pixels per frame
            let technologyPosition = 0;
            let technologyPaused = false;
            let technologyAnimationId;
            let technologyManualControl = false;

            // Start from the end for reverse scrolling
            technologyPosition = technologyMarquee.scrollWidth / 2;

            function scrollTechnology() {
                if (!technologyPaused && !technologyManualControl) {
                    technologyPosition -= scrollSpeed; // Subtract for reverse direction
                    
                    // Reset position when we've scrolled through half the content (reverse)
                    if (technologyPosition <= 0) {
                        technologyPosition = technologyMarquee.scrollWidth / 2;
                    }
                    
                    technologyMarquee.style.transform = `translateX(${-technologyPosition}px)`;
                }
                technologyAnimationId = requestAnimationFrame(scrollTechnology);
            }

            // Manual scroll function
            function manualScrollTechnology(direction) {
                technologyManualControl = true;
                const scrollAmount = 250; // pixels to scroll
                
                // Add smooth transition
                technologyMarquee.style.transition = 'transform 0.6s ease-in-out';
                
                if (direction === 'left') {
                    technologyPosition = Math.max(0, technologyPosition - scrollAmount);
                } else {
                    technologyPosition = Math.min(technologyMarquee.scrollWidth / 2, technologyPosition + scrollAmount);
                }
                
                technologyMarquee.style.transform = `translateX(${-technologyPosition}px)`;
                
                // Remove transition after animation completes and resume auto-scroll
                setTimeout(() => {
                    technologyMarquee.style.transition = '';
                    technologyManualControl = false;
                }, 3000);
            }

            // Start the animation
            technologyAnimationId = requestAnimationFrame(scrollTechnology);

            // Pause on hover
            technologyContainer.addEventListener('mouseenter', function() {
                technologyPaused = true;
            });

            technologyContainer.addEventListener('mouseleave', function() {
                technologyPaused = false;
            });

            // Add click handlers for manual controls
            const technologyArrows = technologyContainer.parentElement.querySelectorAll('.marquee-arrow[data-target="technologyPartnersTrack"]');
            technologyArrows.forEach(arrow => {
                arrow.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    const direction = this.getAttribute('data-direction');
                    manualScrollTechnology(direction);
                });
            });
        }
    });
</script>

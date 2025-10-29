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
                    <h3 class="wow fadeInUp" style="color: #ca912a;">PARTNERSHIPS</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                        Collaborating with <span>Industry Leaders</span>
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay="0.4s" style="margin-top: 20px; font-size: 1.1rem; color: #666;">
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
                    <div class="partners-marquee" style="position: relative; overflow: hidden; width: 100%; padding: 20px 0; -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent); mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);">
                        <div class="partners-track" id="governmentPartnersTrack" style="display: inline-flex; align-items: center; white-space: nowrap; will-change: transform;">
                            <?php 
                            $governmentPartners = [
                                [
                                    'file' => 'dss.png',
                                    'name' => 'Department of State Services',
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
                                    'name' => 'Defence Intelligence Agency',
                                    'abbreviation' => 'DIA',
                                    'country' => 'Nigeria',
                                    'description' => 'Military intelligence and strategic operations',
                                    'url' => 'https://www.dia.gov.ng'
                                ],
                                [
                                    'file' => 'npf.png',
                                    'name' => 'Nigeria Police Force',
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
                                <div class="partner-card-marquee" style="display: inline-flex; flex-direction: column; margin: 0 15px; min-width: 220px; background: rgba(255, 255, 255, 0.05); border-radius: 8px; padding: 18px; transition: all 0.3s ease; border: 1px solid rgba(202, 145, 42, 0.1);">
                                    <div class="partner-logo-box" style="height: 70px; display: flex; align-items: center; justify-content: center; margin-bottom: 12px; background: rgba(202, 145, 42, 0.05); border-radius: 6px; padding: 10px;">
                                        <img src="<?= base_url('assets/partners/' . $partner['file']);?>" 
                                             alt="<?= $partner['name'];?> logo" 
                                             style="max-height: 100%; max-width: 100%; object-fit: contain;">
                                    </div>
                                    <div class="partner-content">
                                        <h4 style="font-size: 1rem; margin-bottom: 4px; color: #fff; word-wrap: break-word; white-space: normal;"><?= $partner['abbreviation'];?></h4>
                                        <h5 style="font-size: 0.8rem; margin-bottom: 6px; color: #ca912a; font-weight: 500; word-wrap: break-word; white-space: normal;"><?= $partner['name'];?></h5>
                                        <p style="color: rgba(255, 255, 255, 0.7); font-size: 0.75rem; margin-bottom: 8px; line-height: 1.3; word-wrap: break-word; white-space: normal; overflow-wrap: anywhere;"><?= $partner['description'];?></p>
                                        <div class="partner-location" style="display: flex; align-items: center; color: rgba(255, 255, 255, 0.5); font-size: 0.7rem; word-wrap: break-word; white-space: normal;">
                                            <i class="fa-solid fa-location-dot" style="margin-right: 5px; color: #ca912a;"></i>
                                            <?= $partner['country'];?>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                                endforeach;
                            endfor; 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div><br><br><br><br></div>

        <!-- Technology Partners -->
        <div class="partner-category-section" style="margin-bottom: 80px;">
            <div class="row align-items-center">
                <!-- Partners Marquee Section (2/3) - Left Side -->
                <div class="col-lg-8 col-md-12 order-lg-1 order-2">
                    <div class="partners-marquee" style="position: relative; overflow: hidden; width: 100%; padding: 20px 0; -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent); mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);">
                        <div class="partners-track-reverse" id="technologyPartnersTrack" style="display: inline-flex; align-items: center; white-space: nowrap; will-change: transform;">
                            <?php 
                            $technologyPartners = [
                                [
                                    'file' => 'MSAB-white.png',
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
                                    'file' => 'stratign-logo-white.svg',
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
                                <div class="partner-card-marquee" style="display: inline-flex; flex-direction: column; margin: 0 15px; min-width: 220px; background: rgba(255, 255, 255, 0.05); border-radius: 8px; padding: 18px; transition: all 0.3s ease; border: 1px solid rgba(202, 145, 42, 0.2);">
                                    <div class="partner-logo-box" style="height: 70px; display: flex; align-items: center; justify-content: center; margin-bottom: 12px; background: rgba(202, 145, 42, 0.05); border-radius: 6px; padding: 10px;">
                                        <img src="<?= base_url('assets/partners/' . $partner['file']);?>" 
                                             alt="<?= $partner['name'];?> logo" 
                                             style="max-height: 100%; max-width: 100%; object-fit: contain;">
                                    </div>
                                    <div class="partner-content">
                                        <div class="specialty-badge" style="display: inline-block; background: rgba(202, 145, 42, 0.15); color: #ca912a; padding: 3px 8px; border-radius: 12px; font-size: 0.65rem; margin-bottom: 8px; font-weight: 500; word-wrap: break-word; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100%;">
                                            <?= $partner['specialty'];?>
                                        </div>
                                        <h4 style="font-size: 1rem; margin-bottom: 4px; color: #fff; word-wrap: break-word; white-space: normal;"><?= $partner['name'];?></h4>
                                        <p style="color: rgba(255, 255, 255, 0.7); font-size: 0.75rem; margin-bottom: 8px; line-height: 1.3; word-wrap: break-word; white-space: normal; overflow-wrap: anywhere;"><?= $partner['description'];?></p>
                                        <div class="partner-location" style="display: flex; align-items: center; color: rgba(255, 255, 255, 0.5); font-size: 0.7rem; word-wrap: break-word; white-space: normal;">
                                            <i class="fa-solid fa-location-dot" style="margin-right: 5px; color: #ca912a;"></i>
                                            <?= $partner['country'];?>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                                endforeach;
                            endfor; 
                            ?>
                        </div>
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

<!-- Partnership Benefits Section Start -->
<div class="partnership-benefits" style="padding: 80px 0; background-color: #000020;">
    <div class="container">
        <div class="section-title text-center">
            <h3 class="wow fadeInUp" style="color: #ca912a;">WHY PARTNER WITH US</h3>
            <!-- <h2 class="wow fadeInUp" data-wow-delay="0.2s" style="color: #fff; margin-bottom: 60px;">
                Benefits of <span style="color: #ca912a;">Partnership</span>
            </h2> -->
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="benefit-item wow fadeInUp" style="text-align: center; padding: 30px 20px;">
                    <div class="benefit-icon" style="width: 80px; height: 80px; margin: 0 auto 20px; background: rgba(202, 145, 42, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fa-solid fa-handshake" style="font-size: 2rem; color: #ca912a;"></i>
                    </div>
                    <h4 style="color: #fff; margin-bottom: 15px; font-size: 1.2rem;">Trusted Collaboration</h4>
                    <p style="color: rgba(255, 255, 255, 0.7); font-size: 0.95rem;">Long-term partnerships built on trust and mutual success</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="benefit-item wow fadeInUp" data-wow-delay="0.2s" style="text-align: center; padding: 30px 20px;">
                    <div class="benefit-icon" style="width: 80px; height: 80px; margin: 0 auto 20px; background: rgba(202, 145, 42, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fa-solid fa-rocket" style="font-size: 2rem; color: #ca912a;"></i>
                    </div>
                    <h4 style="color: #fff; margin-bottom: 15px; font-size: 1.2rem;">Innovation</h4>
                    <p style="color: rgba(255, 255, 255, 0.7); font-size: 0.95rem;">Access to cutting-edge technology and research</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="benefit-item wow fadeInUp" data-wow-delay="0.4s" style="text-align: center; padding: 30px 20px;">
                    <div class="benefit-icon" style="width: 80px; height: 80px; margin: 0 auto 20px; background: rgba(202, 145, 42, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fa-solid fa-globe" style="font-size: 2rem; color: #ca912a;"></i>
                    </div>
                    <h4 style="color: #fff; margin-bottom: 15px; font-size: 1.2rem;">Global Reach</h4>
                    <p style="color: rgba(255, 255, 255, 0.7); font-size: 0.95rem;">International network and market opportunities</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="benefit-item wow fadeInUp" data-wow-delay="0.6s" style="text-align: center; padding: 30px 20px;">
                    <div class="benefit-icon" style="width: 80px; height: 80px; margin: 0 auto 20px; background: rgba(202, 145, 42, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fa-solid fa-award" style="font-size: 2rem; color: #ca912a;"></i>
                    </div>
                    <h4 style="color: #fff; margin-bottom: 15px; font-size: 1.2rem;">Excellence</h4>
                    <p style="color: rgba(255, 255, 255, 0.7); font-size: 0.95rem;">Commitment to the highest standards of quality</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partnership Benefits Section End -->

<!-- Call to Action Section Start -->
<div class="partner-cta" style="padding: 80px 0; background-color: rgba(255, 255, 255, 0.05);">
    <!-- #fff; white-->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2">
                <div class="cta-content text-center wow fadeInUp">
                    <h2 style="font-size: 2.5rem; margin-bottom: 20px; color: #fff;">
                        Become a <span style="color: #ca912a;">Partner</span>
                    </h2>
                    <p style="font-size: 1.1rem; color: rgba(255, 255, 255, 0.8); margin-bottom: 30px; max-width: 700px; margin-left: auto; margin-right: auto;">
                        Join our network of trusted partners and collaborate on groundbreaking forensic and security solutions. Together, we can make a difference in fighting crime and protecting communities.
                    </p>
                    <div class="cta-buttons" style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                        <a href="<?= base_url('contact');?>" class="btn-default btn-custom-arrow" style="display: inline-block; padding: 15px 40px; background: #ca912a; color: #fff; text-decoration: none; border-radius: 5px; font-weight: 600; transition: all 0.3s ease;">
                            Partner With Us <i class="fa-solid fa-arrow-right" style="margin-left: 8px; transform: rotate(-45deg); display: inline-block;"></i>
                        </a>
                        <a href="<?= base_url('services');?>" class="btn-outline btn-custom-arrow" style="display: inline-block; padding: 15px 40px; background: transparent; color: #fff; text-decoration: none; border-radius: 5px; font-weight: 600; border: 2px solid rgba(255, 255, 255, 0.7); transition: all 0.3s ease;">
                            Our Services <i class="fa-solid fa-arrow-right" style="margin-left: 8px; transform: rotate(-45deg); display: inline-block;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Call to Action Section End -->


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
    
    .partner-card-marquee:hover .partner-logo-box {
        background: rgba(202, 145, 42, 0.1) !important;
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
            height: 60px !important;
            padding: 8px !important;
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
        
        .specialty-badge {
            font-size: 0.6rem !important;
            padding: 2px 6px !important;
            white-space: nowrap !important;
            overflow: hidden !important;
            text-overflow: ellipsis !important;
            max-width: 100% !important;
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
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Government Partners Marquee (Left to Right)
        const governmentMarquee = document.getElementById('governmentPartnersTrack');
        if (governmentMarquee) {
            const scrollSpeed = 0.5; // pixels per frame
            let governmentPosition = 0;
            let governmentPaused = false;
            let governmentAnimationId;

            function scrollGovernment() {
                if (!governmentPaused) {
                    governmentPosition += scrollSpeed;
                    
                    // Reset position when we've scrolled through half the content
                    if (governmentPosition >= governmentMarquee.scrollWidth / 2) {
                        governmentPosition = 0;
                    }
                    
                    governmentMarquee.style.transform = `translateX(${-governmentPosition}px)`;
                }
                governmentAnimationId = requestAnimationFrame(scrollGovernment);
            }

            // Start the animation
            governmentAnimationId = requestAnimationFrame(scrollGovernment);

            // Pause on hover
            governmentMarquee.parentElement.addEventListener('mouseenter', function() {
                governmentPaused = true;
            });

            governmentMarquee.parentElement.addEventListener('mouseleave', function() {
                governmentPaused = false;
            });
        }

        // Technology Partners Marquee (Right to Left)
        const technologyMarquee = document.getElementById('technologyPartnersTrack');
        if (technologyMarquee) {
            const scrollSpeed = 0.5; // pixels per frame
            let technologyPosition = 0;
            let technologyPaused = false;
            let technologyAnimationId;

            // Start from the end for reverse scrolling
            technologyPosition = technologyMarquee.scrollWidth / 2;

            function scrollTechnology() {
                if (!technologyPaused) {
                    technologyPosition -= scrollSpeed; // Subtract for reverse direction
                    
                    // Reset position when we've scrolled through half the content (reverse)
                    if (technologyPosition <= 0) {
                        technologyPosition = technologyMarquee.scrollWidth / 2;
                    }
                    
                    technologyMarquee.style.transform = `translateX(${-technologyPosition}px)`;
                }
                technologyAnimationId = requestAnimationFrame(scrollTechnology);
            }

            // Start the animation
            technologyAnimationId = requestAnimationFrame(scrollTechnology);

            // Pause on hover
            technologyMarquee.parentElement.addEventListener('mouseenter', function() {
                technologyPaused = true;
            });

            technologyMarquee.parentElement.addEventListener('mouseleave', function() {
                technologyPaused = false;
            });
        }
    });
</script>

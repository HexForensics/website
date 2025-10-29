<!-- <div style="width: 100%; height: 4px; background-color: #ca912a"></div> -->

<!-- Trusted By Section Start -->
<div class="trusted-by-section" style="background-color: #000020; padding: 80px 0;">
    <div><br><br><br><br></div>
    <div class="container">
        <!-- Section Title Start -->
        <div class="section-title text-center" style="margin-bottom: 50px;">
            <!-- <h3 class="wow fadeInUp" style="color: #ca912a;">PARTNERSHIPS</h3> -->
            <h2 class="wow fadeInUp" data-wow-delay="0.2s" style="color: #fff;">We Are Trusted By Organizations Worldwide</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4s" style="color: rgba(255, 255, 255, 0.7); max-width: 700px; margin: 0 auto;">
                Hex Forensics collaborates with government agencies, defense institutions, and industry leaders around the world.
            </p>
        </div>
        <!-- Section Title End -->
    </div>

    <!-- Partner Logos Marquee Start -->
    <div class="partner-logos-marquee" style="position: relative; overflow: hidden; width: 100%; padding: 40px 0;">
        <div class="logos-track" id="partnerLogosTrack">
            <?php 
            $partnerLogos = [
                [
                    'file' => 'dss.png',
                    'name' => 'Department of State Services (DSS)',
                    'country' => 'Nigeria',
                    'url' => 'https://www.dss.gov.ng'
                ],
                [
                    'file' => 'navy.png',
                    'name' => 'The Nigerian Navy',
                    'country' => 'Nigeria',
                    'url' => 'https://www.navy.mil.ng'
                ],
                [
                    'file' => 'stratign-logo-white.svg',
                    'name' => 'Stratign',
                    'country' => 'Dubai, UAE',
                    'url' => 'https://www.stratign.com'
                ],
                [
                    'file' => 'dia.png',
                    'name' => 'Defence Intelligence Agency (DIA)',
                    'country' => 'Nigeria',
                    'url' => 'https://www.dia.gov.ng'
                ],
                [
                    'file' => 'npf.png',
                    'name' => 'The Nigeria Police Force (NPF)',
                    'country' => 'Nigeria',
                    'url' => 'https://www.npf.gov.ng'
                ],
                [
                    'file' => 'Mile2-Logo-Cyber-Certs.png',
                    'name' => 'Mile2',
                    'country' => 'USA',
                    'url' => 'https://www.mile2.com'
                ],
                [
                    'file' => 'MSAB_Certified Partner_standing_RGB_Negativ.png',
                    'name' => 'MSAB',
                    'country' => 'Sweden',
                    'url' => 'https://www.msab.com'
                ],
                [
                    'file' => 'airforce.png',
                    'name' => 'The Nigerian Air Force',
                    'country' => 'Nigeria',
                    'url' => 'https://www.airforce.mil.ng'
                ],
                [
                    'file' => 'army.png',
                    'name' => 'The Nigerian Army',
                    'country' => 'Nigeria',
                    'url' => 'https://www.army.mil.ng'
                ],
                [
                    'file' => 'QCyber-white.svg',
                    'name' => 'Q Cyber Technologies',
                    'country' => 'Luxembourg',
                    'url' => 'https://www.qcyber.com'
                ],
                [
                    'file' => 'GMDSOFT-Logo.png',
                    'name' => 'GMDSoft',
                    'country' => 'South Korea',
                    'url' => 'https://www.gmdsoft.com'
                ],
                
                [
                    'file' => 'exterro-logo.svg',
                    'name' => 'Exterro',
                    'country' => 'USA',
                    'url' => 'https://www.exterro.com'
                ]
            ];
            
            // Duplicate logos 8 times for seamless scrolling
            for ($i = 0; $i < 8; $i++): 
                foreach ($partnerLogos as $partner):
            ?>
                <a href="<?= $partner['url'];?>" 
                   target="_blank" 
                   rel="noopener noreferrer"
                   class="partner-logo-item"
                   title="<?= $partner['name'];?> - <?= $partner['country'];?>"
                   style="display: inline-flex; flex-direction: column; align-items: center; margin: 0 40px; text-decoration: none; transition: all 0.3s ease;">
                    <div class="logo-container" style="height: 120px; width: 240px; display: flex; align-items: center; justify-content: center; padding: 20px; background: rgba(255, 255, 255, 0.05); border-radius: 10px; transition: all 0.3s ease;">
                        <img src="<?= base_url('assets/partners/' . $partner['file']);?>" 
                             alt="<?= $partner['name'];?> logo" 
                             style="max-height: 100%; max-width: 100%; object-fit: contain; filter: grayscale(10%) brightness(1.0); transition: all 0.3s ease;">
                    </div>
                    <p style="color: rgba(255, 255, 255, 0.5); font-size: 14px; margin-top: 12px; text-align: center; transition: all 0.3s ease;">
                        <?= $partner['name'];?> <br>
                        <?= $partner['country'];?>
                    </p>
                </a>
            <?php 
                endforeach;
            endfor; 
            ?>
        </div>
    </div>
    <!-- Partner Logos Marquee End -->
</div>
<!-- Trusted By Section End -->

<style>
    .partner-logos-marquee {
        -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
        mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
    }

    .logos-track {
        display: inline-flex;
        align-items: center;
        white-space: nowrap;
        will-change: transform;
    }

    .partner-logo-item:hover .logo-container {
        background: rgba(202, 145, 42, 0.1);
        transform: translateY(-5px);
    }

    .partner-logo-item:hover img {
        filter: grayscale(0%) brightness(1);
    }

    .partner-logo-item:hover p {
        color: #ca912a;
    }

    /* Mobile Responsive Styles */
    @media (max-width: 768px) {
        .trusted-by-section {
            padding: 40px 0 !important;
        }
        
        .partner-logos-marquee {
            padding: 20px 0 !important;
        }
        
        .partner-logo-item {
            margin: 0 15px !important;
        }
        
        .partner-logo-item .logo-container {
            height: 50px !important;
            width: 100px !important;
            padding: 10px !important;
        }
        
        .partner-logo-item p {
            font-size: 11px !important;
            margin-top: 5px !important;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const marquee = document.getElementById('partnerLogosTrack');
        if (!marquee) return;

        const scrollSpeed = 0.7; // pixels per frame
        let position = 0;
        let isPaused = false;
        let animationId;

        function scroll() {
            if (!isPaused) {
                position += scrollSpeed;
                
                // Reset position when we've scrolled through half the content
                if (position >= marquee.scrollWidth / 2) {
                    position = 0;
                }
                
                marquee.style.transform = `translateX(${-position}px)`;
            }
            animationId = requestAnimationFrame(scroll);
        }

        // Start the animation
        animationId = requestAnimationFrame(scroll);

        // Pause on hover
        marquee.parentElement.addEventListener('mouseenter', function() {
            isPaused = true;
        });

        marquee.parentElement.addEventListener('mouseleave', function() {
            isPaused = false;
        });
    });
</script>

<div style="width: 100%; height: 4px; background-color: #ca912a"></div>

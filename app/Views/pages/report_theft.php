<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">Report Content Theft</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url();?>">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">report theft</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Report Theft Section Start -->
<div class="report-theft-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h3 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Protect Our Intellectual Property</h3>
                    <h2 class="text-anime-style-3" data-cursor="-opaque" style="perspective: 400px;">
                        <div class="split-line" style="display: block; text-align: center; position: relative;">
                            <div style="position: relative; display: inline-block; transform: translate(0px, 0px); opacity: 1;">Help Us Fight Content Theft</div>
                        </div>
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                        If you've found our content being used without permission on another website, please let us know. We take intellectual property theft seriously and appreciate your help in protecting our work.
                    </p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <!-- Alert Box Start -->
                <div class="alert-box wow fadeInUp" data-wow-delay="0.25s" style="background: #f8f9fa; border-left: 4px solid #ca912a; padding: 20px; margin-bottom: 30px; border-radius: 5px;">
                    <h4 style="color: #ca912a; margin-bottom: 10px;">
                        <i class="fa-solid fa-shield-halved" style="margin-right: 8px;"></i>
                        What Constitutes Content Theft?
                    </h4>
                    <ul style="margin-bottom: 0; padding-left: 20px; line-height: 1.8;">
                        <li>Our text, articles, or case studies copied verbatim</li>
                        <li>Our images, graphics, or logos used without attribution</li>
                        <li>Our service descriptions or methodology plagiarized</li>
                        <li>Our unique forensic processes or techniques claimed by others</li>
                    </ul>
                </div>
                <!-- Alert Box End -->

                <!-- Success/Error Messages -->
                <?php if (session()->has('success')): ?>
                <div class="alert alert-success wow fadeInUp" style="background: #d4edda; border: 1px solid #c3e6cb; color: #155724; padding: 20px; border-radius: 5px; margin-bottom: 30px;">
                    <i class="fa-solid fa-circle-check" style="margin-right: 10px;"></i>
                    <?= session('success') ?>
                </div>
                <?php endif; ?>

                <?php if (session()->has('error')): ?>
                <div class="alert alert-danger wow fadeInUp" style="background: #f8d7da; border: 1px solid #f5c6cb; color: #721c24; padding: 20px; border-radius: 5px; margin-bottom: 30px;">
                    <i class="fa-solid fa-circle-exclamation" style="margin-right: 10px;"></i>
                    <?= session('error') ?>
                </div>
                <?php endif; ?>

                <!-- Report Form Start -->
                <div class="report-theft-form wow fadeInUp" data-wow-delay="0.5s">
                    <div class="contact-form" style="background: #ffffff; padding: 40px; border-radius: 10px; box-shadow: 0 5px 30px rgba(0,0,0,0.1);">
                        <form id="reportTheftForm" method="post" action="<?= base_url('submit-theft-report');?>">
                            <div class="row">
                                <!-- Your Name -->
                                <div class="form-group col-md-6 mb-4 allow-copy">
                                    <label for="reporter_name" style="font-weight: 600; margin-bottom: 8px; display: block;">Your Name *</label>
                                    <input type="text" name="reporter_name" id="reporter_name" class="form-control allow-copy" placeholder="Your full name" required style="padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; width: 100%;">
                                </div>

                                <!-- Your Email -->
                                <div class="form-group col-md-6 mb-4 allow-copy">
                                    <label for="reporter_email" style="font-weight: 600; margin-bottom: 8px; display: block;">Your Email *</label>
                                    <input type="email" name="reporter_email" id="reporter_email" class="form-control allow-copy" placeholder="your@email.com" required style="padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; width: 100%;">
                                </div>

                                <!-- Infringing Website URL -->
                                <div class="form-group col-md-12 mb-4 allow-copy">
                                    <label for="infringing_url" style="font-weight: 600; margin-bottom: 8px; display: block;">Infringing Website URL *</label>
                                    <input type="url" name="infringing_url" id="infringing_url" class="form-control allow-copy" placeholder="https://example.com/stolen-content" required style="padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; width: 100%;">
                                    <small style="color: #666; font-size: 0.875rem;">The exact URL where our content appears without permission</small>
                                </div>

                                <!-- Our Original Content URL -->
                                <div class="form-group col-md-12 mb-4 allow-copy">
                                    <label for="original_url" style="font-weight: 600; margin-bottom: 8px; display: block;">Our Original Content URL *</label>
                                    <input type="url" name="original_url" id="original_url" class="form-control allow-copy" placeholder="https://hexforensics.com/our-content" required style="padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; width: 100%;">
                                    <small style="color: #666; font-size: 0.875rem;">The URL of the original content on our website</small>
                                </div>

                                <!-- Type of Theft -->
                                <div class="form-group col-md-12 mb-4 allow-copy">
                                    <label for="theft_type" style="font-weight: 600; margin-bottom: 8px; display: block;">Type of Content Stolen *</label>
                                    <select name="theft_type" id="theft_type" class="form-control allow-copy" required style="padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; width: 100%; background-color: white;">
                                        <option value="">-- Select Type --</option>
                                        <option value="text">Text/Articles</option>
                                        <option value="images">Images/Graphics</option>
                                        <option value="logo">Logo/Branding</option>
                                        <option value="services">Service Descriptions</option>
                                        <option value="methodology">Methodology/Process</option>
                                        <option value="multiple">Multiple Types</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <!-- Additional Details -->
                                <div class="form-group col-md-12 mb-4 allow-copy">
                                    <label for="details" style="font-weight: 600; margin-bottom: 8px; display: block;">Additional Details *</label>
                                    <textarea name="details" id="details" class="form-control allow-copy" rows="6" placeholder="Please provide any additional information that might help us (e.g., screenshots, specific paragraphs copied, date discovered, etc.)" required style="padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; width: 100%; resize: vertical;"></textarea>
                                </div>

                                <!-- Evidence/Screenshots -->
                                <div class="form-group col-md-12 mb-4 allow-copy">
                                    <label for="evidence_links" style="font-weight: 600; margin-bottom: 8px; display: block;">Evidence Links (Optional)</label>
                                    <textarea name="evidence_links" id="evidence_links" class="form-control allow-copy" rows="3" placeholder="Links to screenshots or other evidence (e.g., Dropbox, Google Drive links)" style="padding: 12px 15px; border: 1px solid #ddd; border-radius: 5px; width: 100%; resize: vertical;"></textarea>
                                    <small style="color: #666; font-size: 0.875rem;">Upload screenshots to a cloud service and paste the links here</small>
                                </div>

                                <!-- Submit Button -->
                                <div class="form-group col-md-12 mb-0 text-center">
                                    <button type="submit" class="btn-default" style="background: #ca912a; color: white; padding: 15px 40px; border: none; border-radius: 5px; font-weight: 600; cursor: pointer; transition: all 0.3s;">
                                        <i class="fa-solid fa-paper-plane" style="margin-right: 8px;"></i>
                                        Submit Report
                                    </button>
                                </div>

                                <!-- Privacy Notice -->
                                <div class="col-md-12 mt-4 allow-copy">
                                    <p style="text-align: center; color: #666; font-size: 0.875rem; line-height: 1.6;">
                                        <i class="fa-solid fa-lock" style="color: #ca912a; margin-right: 5px;"></i>
                                        Your information will be kept confidential and used solely for investigating the reported content theft. We appreciate your help in protecting our intellectual property.
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Report Form End -->

                <!-- What Happens Next Section Start -->
                <div class="what-next-section wow fadeInUp" data-wow-delay="0.75s" style="margin-top: 50px; background: #2C3E50; color: white; padding: 40px; border-radius: 10px;">
                    <h3 style="color: #ca912a; margin-bottom: 20px; text-align: center;">
                        <i class="fa-solid fa-timeline" style="margin-right: 10px;"></i>
                        What Happens Next?
                    </h3>
                    <div class="row">
                        <div class="col-md-4 text-center mb-4 mb-md-0">
                            <div style="font-size: 2.5rem; color: #ca912a; margin-bottom: 15px;">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <h4 style="color: #ca912a; margin-bottom: 10px;">1. Investigation</h4>
                            <p style="font-size: 0.9rem; line-height: 1.6;">We'll review your report and verify the content theft within 48 hours.</p>
                        </div>
                        <div class="col-md-4 text-center mb-4 mb-md-0">
                            <div style="font-size: 2.5rem; color: #ca912a; margin-bottom: 15px;">
                                <i class="fa-solid fa-scale-balanced"></i>
                            </div>
                            <h4 style="color: #ca912a; margin-bottom: 10px;">2. Legal Action</h4>
                            <p style="font-size: 0.9rem; line-height: 1.6;">We'll send a DMCA takedown notice or pursue appropriate legal measures.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <div style="font-size: 2.5rem; color: #ca912a; margin-bottom: 15px;">
                                <i class="fa-solid fa-bell"></i>
                            </div>
                            <h4 style="color: #ca912a; margin-bottom: 10px;">3. Follow-Up</h4>
                            <p style="font-size: 0.9rem; line-height: 1.6;">We'll update you on the outcome and thank you for your assistance.</p>
                        </div>
                    </div>
                </div>
                <!-- What Happens Next Section End -->
            </div>
        </div>
    </div>
</div>
<!-- Report Theft Section End -->

<style>
    .report-theft-section {
        padding: 80px 0;
        background: #f8f9fa;
    }
    
    .form-control:focus,
    select:focus {
        outline: none;
        border-color: #ca912a !important;
        box-shadow: 0 0 0 0.2rem rgba(202, 145, 42, 0.25) !important;
    }
    
    .btn-default:hover {
        background: #b8821f !important;
        transform: translateY(-2px);
        box-shadow: 0 5px 20px rgba(202, 145, 42, 0.4);
    }
    
    @media (max-width: 768px) {
        .report-theft-section {
            padding: 50px 0;
        }
        
        .contact-form {
            padding: 30px 20px !important;
        }
        
        .what-next-section {
            padding: 30px 20px !important;
        }
    }
</style>

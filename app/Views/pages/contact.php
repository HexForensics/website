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
                    <h1 class="text-anime-style-3" style="color: #fff; text-transform: uppercase; letter-spacing: 1px;">GET IN TOUCH</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url();?>" style="color: #ca912a">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page" style="color: rgba(255,255,255,0.7)">Contact</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Page Contact Us Start -->
<div class="page-contact-us">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <!-- <h3 class="wow fadeInUp">contact us</h3> -->
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">We would love to hear from you!</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Page Contact Box Start -->
                <div class="page-contact-box parallaxie" style="background-image: url(<?= base_url('assets/pictures/street.jpg')?>);">
                    <!-- Contact Info List Start -->
                    <div class="contact-info-list">
                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp phone-number allow-copy">
                            <div class="icon-box">
                                <img src="<?= base_url('assets/images/icon-phone-accent.svg');?>" alt="">
                            </div>
                            <div class="contact-info-content phone-number allow-copy">
                                <h3>contact us</h3>
                                <p class="phone-number allow-copy"><a href="tel:+2349066779939" class="phone-number allow-copy">+234 90 6677 9939</a></p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp email-address allow-copy" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="<?= base_url('assets/images/icon-mail-accent.svg');?>" alt="">
                            </div>
                            <div class="contact-info-content email-address allow-copy">
                                <h3>e-mail us</h3>
                                <p class="email-address allow-copy"><a href="mailto:info@hexforensics.com" class="email-address allow-copy">info@hexforensics.com</a></p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="<?= base_url('assets/images/icon-location.svg');?>" alt="">
                            </div>
                            <div class="contact-info-content">
                                <h3>our location</h3>
                                <p>Abuja, Nigeria</p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->
                    </div>
                    <!-- Contact Info List End -->

                    <div class="contact-us-form">
                        <!-- Section Title Start -->
                        <div class="section-title dark-section wow fadeInUp">
                            <h2 class="wow fadeInUp" data-cursor="-opaque">Get in touch with us</h2>
                        </div>
                        <!-- Section Title End -->

                        <div class="member-contact-form contact-form">
                            <!-- Form Status Message -->
                            <div id="formAlert" style="display:none; padding: 15px 20px; border-radius: 5px; margin-bottom: 20px; font-weight: 500;"></div>

                            <form id="contactForm" action="<?= base_url('submit-contact'); ?>" method="POST" class="wow fadeInUp" data-wow-delay="0.2s">
                                <?= csrf_field() ?>
                                <div class="row">                                
                                    <div class="form-group col-md-6 mb-4">
                                        <label for="name" style="font-weight: 600; margin-bottom: 8px; display: block;">Full Name *</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="John Doe" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
    
                                    <div class="form-group col-md-6 mb-4">
                                        <label for="phone" style="font-weight: 600; margin-bottom: 8px; display: block;">Phone Number</label>
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="+234 123 456 7890">
                                        <div class="help-block with-errors"></div>
                                    </div>
    
                                    <div class="form-group col-md-6 mb-4">
                                        <label for="email" style="font-weight: 600; margin-bottom: 8px; display: block;">Email Address *</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="your@email.com" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
    
                                    <div class="form-group col-md-6 mb-4">
                                        <label for="title" style="font-weight: 600; margin-bottom: 8px; display: block;">Subject *</label>
                                        <input type="text" name="title" class="form-control" id="title" placeholder="How can we help?" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
    
                                    <div class="form-group col-md-12 mb-4">
                                        <label for="message" style="font-weight: 600; margin-bottom: 8px; display: block;">Message *</label>
                                        <textarea name="message" class="form-control" id="message" rows="4" placeholder="Tell us more about your inquiry..." required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <!-- Cloudflare Turnstile CAPTCHA -->
                                    <div class="form-group col-md-12 mb-4">
                                        <?php if (!empty($turnstile_site_key)): ?>
                                        <div class="cf-turnstile" data-sitekey="<?= esc($turnstile_site_key); ?>" data-theme="light"></div>
                                        <?php endif; ?>
                                    </div>
    
                                    <div class="col-md-12">
                                        <button type="submit" id="submitBtn" class="btn-default btn-highlighted">
                                            <span id="btnText">submit message</span>
                                            <span id="btnSpinner" style="display:none;">
                                                <i class="fa-solid fa-spinner fa-spin" style="margin-right: 8px;"></i> Sending...
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Validation Error Styling -->
                        <style>
                            .help-block.with-errors {
                                color: #dc3545;
                                font-size: 0.875rem;
                                margin-top: 0.25rem;
                                display: block;
                                font-weight: 500;
                            }
                            .form-control.error {
                                border-color: #dc3545 !important;
                            }
                            .form-control:invalid:not(:placeholder-shown) {
                                border-color: #dc3545;
                            }
                        </style>

                        <!-- AJAX Form Handler -->
                        <script nonce="{csp-script-nonce}">
                        (function() {
                            var form = document.getElementById('contactForm');
                            var btn = document.getElementById('submitBtn');
                            var btnText = document.getElementById('btnText');
                            var btnSpinner = document.getElementById('btnSpinner');
                            var alertBox = document.getElementById('formAlert');

                            form.addEventListener('submit', function(e) {
                                e.preventDefault();

                                // Hide previous alert
                                alertBox.style.display = 'none';

                                // Show spinner, disable button
                                btnText.style.display = 'none';
                                btnSpinner.style.display = 'inline';
                                btn.disabled = true;
                                btn.style.opacity = '0.7';

                                var formData = new FormData(form);

                                fetch(form.action, {
                                    method: 'POST',
                                    body: formData,
                                    headers: {
                                        'X-Requested-With': 'XMLHttpRequest'
                                    }
                                })
                                .then(function(response) { return response.json(); })
                                .then(function(data) {
                                    // Show message
                                    alertBox.style.display = 'block';
                                    alertBox.textContent = data.message;

                                    if (data.status === 'success') {
                                        alertBox.style.background = '#d4edda';
                                        alertBox.style.color = '#155724';
                                        alertBox.style.border = '1px solid #c3e6cb';
                                        form.reset();
                                    } else {
                                        alertBox.style.background = '#f8d7da';
                                        alertBox.style.color = '#721c24';
                                        alertBox.style.border = '1px solid #f5c6cb';
                                    }

                                    // Refresh CSRF token from server response
                                    if (data.csrf_token) {
                                        var csrfField = form.querySelector('input[name="csrf_test_name"]');
                                        if (csrfField) csrfField.value = data.csrf_token;
                                    }
                                })
                                .catch(function() {
                                    alertBox.style.display = 'block';
                                    alertBox.textContent = 'A network error occurred. Please check your connection and try again.';
                                    alertBox.style.background = '#f8d7da';
                                    alertBox.style.color = '#721c24';
                                    alertBox.style.border = '1px solid #f5c6cb';
                                    alertBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
                                })
                                .finally(function() {
                                    // Restore button
                                    btnText.style.display = 'inline';
                                    btnSpinner.style.display = 'none';
                                    btn.disabled = false;
                                    btn.style.opacity = '1';
                                });
                            });
                        })();
                        </script>
                    </div>
                </div>
                <!-- Page Contact Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Contact Us End -->

<!-- Google Map Section Start -->
<div class="google-map">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <!-- Google Map IFrame Start -->
                <div class="google-map-iframe">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126093.78244412612!2d7.367466999170517!3d9.024416364816126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e745f4cd62fd9%3A0x53bd17b4a20ea12b!2sAbuja%2C%20Federal%20Capital%20Territory%2C%20Nigeria!5e0!3m2!1snl!2snl!4v1700749745636!5m2!1snl!2snl" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- Google Map IFrame End -->
            </div>
        </div>
    </div>
</div>
<!-- Google Map Section End -->
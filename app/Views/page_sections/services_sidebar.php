<!-- Page Single Sidebar Start -->
<div class="page-single-sidebar">
    <!-- Page Category List Start -->
    <div class="page-catagery-list wow fadeInUp d-none">
        <h3>Other Services</h3>
        <ul>
            <li><a href="<?= base_url('services/intelligence');?>" <?php if($page_title == "Intelligence"){echo 'style="display: none"';}?>>Intelligence</a></li>
            <li><a href="<?= base_url('services/digital-forensics');?>" <?php if($page_title == "Digital Forensics"){echo 'style="display: none"';}?>>Digital Forensics</a></li>
            <li><a href="<?= base_url('services/cyber-security');?>" <?php if($page_title == "Cyber Security"){echo 'style="display: none"';}?>>Cyber Security</a></li>
            <li><a href="<?= base_url('services/fraud-investigation');?>" <?php if($page_title == "Fraud Investigation"){echo 'style="display: none"';}?>>Fraud Investigation</a></li>
            <li><a href="<?= base_url('services/training-and-education');?>" <?php if($page_title == "Training & Education"){echo 'style="display: none"';}?>>Training & Education</a></li>
        </ul>
    </div>

    <!-- Page Category List End -->
    <!-- Sidebar CTA Box Start -->
    <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.2s">
        <div class="sidebar-cta-logo">
            <img src="<?= base_url('assets/logo/logo.png');?>" alt="" style="max-width: 100px">
        </div>
        <div class="sidebar-cta-content">
            <p>Solving complex investigations using the knowledge of science.</p>
        </div>
        <div class="sidebar-cta-contact">
            <div class="icon-box">
                <img src="<?= base_url('assets/images/icon-mail.svg');?>" alt="">
            </div>
            <div class="sidebar-cta-contact-content email-address allow-copy">
                <h3 class="email-address allow-copy">
                    <a href="mailto:info@hexforensics.com" class="email-address allow-copy">info@hexforensics.com</a>
                </h3>
                <p>Get in-touch with us</p>
            </div>
        </div>
    </div>
    <!-- Sidebar CTA Box End -->
</div>
<!-- Page Single Sidebar End -->
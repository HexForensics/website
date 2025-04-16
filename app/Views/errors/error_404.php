<?= view("layout/header.php"); ?>

<!-- error section start -->
<div class="error-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="error-page-image wow fadeInUp">
                    <img src="<?= base_url("assets/images/404-error-img.png"); ?>" alt="">
                </div>
                <div class="error-page-content">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay="0.25s" data-cursor="-opaque">Oops! <span>Page not found</span></h2>
                    </div>
                    <div class="error-page-content-body">
                        <p class="wow fadeInUp" data-wow-delay="0.5s">We couldn't find the page you’re looking for, but don’t worry—we never lose evidence.</p>
                        <a class="btn-default wow fadeInUp" data-wow-delay="0.75s" href="<?= base_url(""); ?>">back to home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- error section end -->

<?= view("layout/footer.php"); ?>
<!-- ***** Contact Us Start ***** -->
<section class="section colored" id="contact-us">
    <div class="container">
        <!-- ***** Section Title Start ***** -->
        <div class="row">
            <div class="col-lg-12">
                <div class="center-heading">
                    <h2 class="section-title">Beri Ulasan</h2>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6">
                <div class="center-text">
                    <p>Anda dapat memberikan layanan LAPMAS ulasan. Kritik & Saran akan sangat membantu
                        kami untuk terus berkembang.
                    </p>
                </div>
            </div>
        </div>
        <!-- ***** Section Title End ***** -->

        <div class="row">
            <!-- ***** Contact Text Start ***** -->
            <!-- <div class="col-lg-4 col-md-6 col-sm-12">
                <h5 class="margin-bottom-30">Keep in touch</h5>
                <div class="contact-text">
                    <p>110-220 Quisque diam odio, maximus ac consectetur eu, 10260
                        <br>auctor non lorem
                    </p>
                </div>
            </div> -->
            <!-- ***** Contact Text End ***** -->

            <!-- ***** Contact Form Start ***** -->
            <?php if ($this->session->userdata('nik') == null) { ?>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="contact-form">
                    <form id="contact" action="" method="get">
                        <div class="row">
                            <div class="col-12">
                                <fieldset>
                                    <a href="<?= site_url() ?>auth/login" id="form-submit"
                                        class="btn btn-block main-button">Login Untuk Memberi
                                        Ulasan</a>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ***** Contact Form End ***** -->
            <?php } else { ?>
            <div class="col-12 text-center">
                <fieldset>
                    <a href="<?= site_url() ?>masyarakat/ulasan" class="btn btn-block main-button">Beri Ulasan </a>
                </fieldset>
            </div>
            <?php } ?>

        </div>
    </div>
</section>
<!-- ***** Contact Us End ***** -->
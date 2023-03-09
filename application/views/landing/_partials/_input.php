<!-- ***** Features Small Start ***** -->
<section class="section home-feature mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-12 col-md-6 col-sm-6 col-12"
                        data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                        <div class="features-small-item">
                            <!-- <div class="icon">
                                    <i><img src="assets/images/featured-item-01.png" alt=""></i>
                                </div> -->
                            <h3 class="features-title"> <b>Sampaikan Laporan Anda</b> </h3>
                            <p>Isi Form Dengan Benar Agar Tidak Terjadi Kesalahan</p>
                            <div class="col-lg-12 col-md-6 col-sm-12 mt-5">
                                <div class="contact-form">
                                    <!-- <form action="<?= site_url() ?>lapor/" method="POST"> -->
                                    <?= form_open_multipart('lapor/'); ?>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <fieldset>
                                                <input name="judul_laporan" type="text" class="form-control" id="name"
                                                    placeholder="Ketik Judul Laporan Anda" required="">
                                                <?= form_error('judul_laporan', '<small class="text-danger pl-2">', '</small>') ?>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <textarea name="isi_laporan" rows="12" class="form-control" id="message"
                                                    placeholder="Ketik Isi Laporan Anda" required=""></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <fieldset>
                                                <input type="file" class="dropify" name="foto_laporan"
                                                    data-allowed-file-extensions="jpg png jpeg">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="main-button btn-block">
                                                    <b>LAPOR!</b> </button>
                                            </fieldset>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Features Small Item End ***** -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Small End ***** -->
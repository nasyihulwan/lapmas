<!-- ***** Counter Parallax Start ***** -->
<section class="counter">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="count-item">
                        <strong>
                            <?= $this->db->get('pengaduan')->num_rows() ?>
                        </strong>
                        <span>JUMLAH LAPORAN SEKARANG</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Counter Parallax End ***** -->
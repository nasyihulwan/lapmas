<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last ">
                    <h3><?= $title ?></h3>
                    <p class="text-subtitle text-muted"><?= $subtitle ?>
                    </p>
                </div>
                <?php $this->load->view("__partials/_breadcrumb.php") ?>
            </div>
        </div>

        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="alert alert-dark" role="alert">
                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                        <span>Anda dapat menyelesaikan pengaduan setelah 3 hari Anda menanggapi pengaduan atau setelah
                            Masyarakat
                            melakukan tanggapan balik.</span>
                    </div>
                    <div class="card">
                        <?= $this->session->flashdata('message') ?>
                        <div class="card-content">
                            <div class="card-body">
                                <?php 
                                // add 3 days to date
                                if ($this->db->get_where('tanggapan', ['id_pengaduan' => $queryAduan['id_pengaduan']])->num_rows() >= 1) {
                                    $uploadDate = $getDate['tgl_tanggapan'];
                                    $date = strtotime($uploadDate);
                                    $date = strtotime("+3 day", $date);
                                    $date = date('Y-m-d', $date);
                                  if (  
                                    date('Y-m-d') >= $date || $queryAduan['tanggapan_balik'] != null) 
                                { ?>
                                <?php } ?>
                                <?php } else if($this->db->get_where('tanggapan', ['id_pengaduan' => $queryAduan['id_pengaduan']])->num_rows() == 0) { ?>
                                <form method="POST"
                                    action="<?= site_url('pengaduan/proses/insertTanggapan/') ?><?= $queryAduan['p_id'] ?>">
                                    <?php } ?>

                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">ID Pengaduan</label>
                                                <input type="text" name="id_petugas"
                                                    value="<?= $this->session->userdata('id_petugas') ?>" hidden>
                                                <input type="text" name="aduan"
                                                    value="<?= $queryAduan['id_pengaduan'] ?>" hidden>
                                                <input type="text" name="id_pengaduan" class="form-control"
                                                    value="<?= $queryAduan['p_id'] ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">NIK</label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                    value="<?= $queryAduan['nik'] ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Tanggal Pengaduan</label>
                                                <input type="text" name="tgl_pengaduan" class="form-control" value="<?php 
                                                    $tanggal = date("Y-m-d", strtotime($queryAduan['tgl_pengaduan']));  
                                                    echo tgl_indo($tanggal, true) ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Tanggal Kejadian</label>
                                                <input type="text" name="tgl_pengaduan" class="form-control" value="<?php 
                                                    $tanggal = date("Y-m-d", strtotime($queryAduan['tgl_kejadian']));  
                                                    echo tgl_indo($tanggal, true) ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Judul Laporan</label>
                                                <input type="text" name="tgl_pengaduan" class="form-control"
                                                    value="<?= $queryAduan['judul_laporan'] ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Tempat Kejadian</label>
                                                <input type="text" name="tgl_pengaduan" class="form-control"
                                                    value="<?= $queryAduan['tempat_kejadian'] ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Kategori</label>
                                                <input type="text" name="tgl_pengaduan" class="form-control"
                                                    value="<?= $queryAduan['nama_kategori'] ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <div class="form-group mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Isi
                                                        Laporan</label>
                                                    <button type="button" class="btn btn-block btn-outline-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalScrollable<?= $queryAduan['p_id'] ?>">
                                                        Lihat
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label class="form-label">Lampiran</label>
                                                <div class="form-group mb-3" data-bs-toggle="modal"
                                                    data-bs-target="#galleryModal">
                                                    <button type="button" class="btn btn-block btn-outline-primary">
                                                        Lihat
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Status</label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                    value="<?= ucfirst($queryAduan['status']) ?>"
                                                    name="status_pengaduan" disabled>
                                            </div>
                                        </div> -->

                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <div class="form-group mb-3">
                                                    <label for="exampleFormControlTextarea1"
                                                        class="form-label">Tanggapan Petugas</label>
                                                    <?php if ($this->db->get_where('tanggapan', ['id_pengaduan' => $queryAduan['id_pengaduan']])->num_rows() >= 1) { ?>
                                                    <button type="button" class="btn btn-block btn-outline-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#tanggapanPetugas<?= $queryAduan['p_id'] ?>">
                                                        Lihat
                                                    </button>
                                                    <?php } else { ?>
                                                    <textarea name="tanggapan" class="form-control"
                                                        id="exampleFormControlTextarea1" rows="9" required></textarea>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if ($queryAduan['tanggapan_balik'] != null ) { ?>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <div class="form-group mb-3">
                                                    <label for="exampleFormControlTextarea1"
                                                        class="form-label">Tanggapan Balik</label>
                                                    <button type="button" class="btn btn-block btn-outline-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#tanggapanBalik<?= $queryAduan['p_id'] ?>">
                                                        Lihat
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <?php } ?>


                                        <div class="col-12 d-flex justify-content-end">
                                            <?php 
                                                // add 3 days to date
                                            if ($this->db->get_where('tanggapan', ['id_pengaduan' => $queryAduan['id_pengaduan']])->num_rows() >= 1) {
                                                $uploadDate = $getDate['tgl_tanggapan'];
                                                $date = strtotime($uploadDate);
                                                $date = strtotime("+3 day", $date);
                                                $date = date('Y-m-d', $date);
                                             
                                            if (
                                            date('Y-m-d') >= $date || $queryAduan['tanggapan_balik'] != null
                                            ) { ?>
                                            <div class="col-md-12 col-12">
                                                <div class="form-group">
                                                    <div class="form-group mb-3 mt-2">
                                                        <button type="button" class="btn btn-block btn-primary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#xlarge<?= $queryAduan['p_id'] ?>">
                                                            SELESAI
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } else { ?>
                                            <button class="btn btn-block btn-primary me-1 mb-1">MENUNGGU TANGGAPAN
                                                BALIK</button>
                                            <?php } ?>
                                            <?php } else if($this->db->get_where('tanggapan', ['id_pengaduan' => $queryAduan['id_pengaduan']])->num_rows() == 0) { ?>
                                            <button type="submit"
                                                class="btn btn-block btn-primary me-1 mb-1">TANGGAPI</button>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Modal -->
        <div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="galleryModalTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-centered scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">
                            <?= $queryAduan['judul_laporan'] ?> -
                            <?= $queryAduan['tgl_pengaduan'] ?>
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-secondary" role="alert">

                            <?php 
                            $ekstensi_1 = substr($queryAduan['lampiran_1'], -3); 
                            if ($ekstensi_1 == 'mp4') { ?>
                            Lampiran 1 - <b><?= $queryAduan['lampiran_1'] ?></b> - <a
                                href="<?= base_url() ?>assets/images/laporan/pengaduan/<?= $queryAduan['nik'] ?>/<?= $queryAduan['lampiran_1'] ?>"
                                type="button" class="btn badge btn-primary mb-2" download>Download</a>
                            <br>
                            <video width="730" height="570" controls>
                                <source
                                    src="<?= base_url() ?>assets/images/laporan/pengaduan/<?= $queryAduan['nik'] ?>/<?= $queryAduan['lampiran_1'] ?>"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <?php } else if($ekstensi_1 == 'pdf') { ?>
                            Lampiran 1 - <b><?= $queryAduan['lampiran_1'] ?></b> - <a
                                href="<?= base_url() ?>assets/images/laporan/pengaduan/<?= $queryAduan['nik'] ?>/<?= $queryAduan['lampiran_1'] ?>"
                                type="button" class="btn badge btn-primary mb-2" download>Download</a>
                            <?php } else { ?>
                            Lampiran 1 - <b><?= $queryAduan['lampiran_1'] ?></b> - <a
                                href="<?= base_url() ?>assets/images/laporan/pengaduan/<?= $queryAduan['nik'] ?>/<?= $queryAduan['lampiran_1'] ?>"
                                type="button" class="btn badge btn-primary mb-2" download>Download</a>
                            <br>
                            <img src="<?= base_url() ?>assets/images/laporan/pengaduan/<?= $queryAduan['nik'] ?>/<?= $queryAduan['lampiran_1'] ?>"
                                alt="<?= $queryAduan['lampiran_1'] ?>" width="320" height="240">
                            <?php } ?>

                            <?php if ($queryAduan['lampiran_2'] != null): ?>
                            <hr>
                            <?php 
                            $ekstensi_2 = substr($queryAduan['lampiran_2'], -3); 
                            if ($ekstensi_2 == 'mp4') { ?>
                            Lampiran 2 - <b><?= $queryAduan['lampiran_2'] ?></b> - <a
                                href="<?= base_url() ?>assets/images/laporan/pengaduan/<?= $queryAduan['nik'] ?>/<?= $queryAduan['lampiran_2'] ?>"
                                type="button" class="btn badge btn-primary mb-2" download>Download</a>
                            <br>
                            <video width="730" height="570" controls>
                                <source
                                    src="<?= base_url() ?>assets/images/laporan/pengaduan/<?= $queryAduan['nik'] ?>/<?= $queryAduan['lampiran_2'] ?>"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <?php } else if($ekstensi_2 == 'pdf') { ?>
                            Lampiran 2 - <b><?= $queryAduan['lampiran_2'] ?></b> - <a
                                href="<?= base_url() ?>assets/images/laporan/pengaduan/<?= $queryAduan['nik'] ?>/<?= $queryAduan['lampiran_2'] ?>"
                                type="button" class="btn badge btn-primary mb-2" download>Download</a>
                            <?php } else { ?>
                            Lampiran 2 - <b><?= $queryAduan['lampiran_2'] ?></b> - <a
                                href="<?= base_url() ?>assets/images/laporan/pengaduan/<?= $queryAduan['nik'] ?>/<?= $queryAduan['lampiran_2'] ?>"
                                type="button" class="btn badge btn-primary mb-2" download>Download</a>
                            <br>
                            <img src="<?= base_url() ?>assets/images/laporan/pengaduan/<?= $queryAduan['nik'] ?>/<?= $queryAduan['lampiran_2'] ?>"
                                alt="<?= $queryAduan['lampiran_2'] ?>" width="320" height="240">
                            <?php } ?>
                            <?php endif; ?>

                            <?php if ($queryAduan['lampiran_3'] != null): ?>
                            <hr>
                            <?php 
                            $ekstensi_3 = substr($queryAduan['lampiran_3'], -3); 
                            if ($ekstensi_3 == 'mp4') { ?>
                            Lampiran 3 - <b><?= $queryAduan['lampiran_3'] ?></b> - <a
                                href="<?= base_url() ?>assets/images/laporan/pengaduan/<?= $queryAduan['nik'] ?>/<?= $queryAduan['lampiran_3'] ?>"
                                type="button" class="btn badge btn-primary mb-2" download>Download</a>
                            <br>
                            <video width="730" height="570" controls>
                                <source
                                    src="<?= base_url() ?>assets/images/laporan/pengaduan/<?= $queryAduan['nik'] ?>/<?= $queryAduan['lampiran_3'] ?>"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <?php } else if($ekstensi_3 == 'pdf') { ?>
                            Lampiran 3 - <b><?= $queryAduan['lampiran_3'] ?></b> - <a
                                href="<?= base_url() ?>assets/images/laporan/pengaduan/<?= $queryAduan['nik'] ?>/<?= $queryAduan['lampiran_3'] ?>"
                                type="button" class="btn badge btn-primary mb-2" download>Download</a>
                            <?php } else { ?>
                            Lampiran 3 - <b><?= $queryAduan['lampiran_3'] ?></b> - <a
                                href="<?= base_url() ?>assets/images/laporan/pengaduan/<?= $queryAduan['nik'] ?>/<?= $queryAduan['lampiran_3'] ?>"
                                type="button" class="btn badge btn-primary mb-2" download>Download</a>
                            <br>
                            <img src="<?= base_url() ?>assets/images/laporan/pengaduan/<?= $queryAduan['nik'] ?>/<?= $queryAduan['lampiran_3'] ?>"
                                alt="<?= $queryAduan['lampiran_3'] ?>" width="320" height="240">
                            <?php } ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModalScrollable<?= $queryAduan['p_id'] ?>" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">
                            <?= $queryAduan['judul_laporan'] ?> -
                            <?= $queryAduan['tgl_pengaduan'] ?>
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= $queryAduan['isi_laporan'] ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="tanggapanPetugas<?= $queryAduan['p_id'] ?>" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">
                            Tanggapan -
                            <?= $queryAduan['judul_laporan'] ?>
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-secondary" role="alert">
                            Ditanggapi pada
                            <b><?= tgl_indo(date("Y-m-d", strtotime($queryAduan['tgl_tanggapan']))) ?></b>
                        </div>
                        <?= $queryAduan['tanggapan'] ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="tanggapanBalik<?= $queryAduan['p_id'] ?>" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">
                            Tanggapan Balik Masyarakat -
                            <?= $queryAduan['judul_laporan'] ?>
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php if ($queryAduan['tanggapan_balik'] == null) { ?>
                        <div class="alert alert-secondary" role="alert">
                            Belum ditanggapi balik oleh Masyarakat
                        </div>
                        <?php } else { ?>
                        <div class="alert alert-secondary" role="alert">
                            Ditanggapi balik oleh Masyarakat pada
                            <b><?= tgl_indo(date("Y-m-d", strtotime($queryAduan['tgl_tanggapan_balik']))) ?></b>
                        </div>
                        <?= $getDate['tanggapan_balik'] ?>
                        <?php } ?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!--Extra Large Modal -->
        <div class="modal fade text-left w-100" id="xlarge<?= $queryAduan['p_id'] ?>" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel16" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                <div class="modal-content">
                    <!-- <form enctype="multipart/form-data"
                        action="<?= site_url() ?>pengaduan/proses/detail/<?= $queryAduan['id_pengaduan'] ?>"
                        method="POST"> -->
                    <?php echo form_open_multipart('pengaduan/proses/updateSelesai'); ?>
                    <div class="row">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel16">
                                Upload Bukti Selesai
                            </h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="id_pengaduan" value="<?= $queryAduan['id_pengaduan'] ?>">
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <div class="alert alert-secondary" role="alert">
                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                        <span>Ekstensi file yang didukung : <b>jpg, jpeg, png, pdf &
                                                mp4</b>. Anda
                                            dapat
                                            mengupload bukti selesai hingga
                                            maksimal <b>3 lampiran</b></span>
                                    </div>
                                    <label>Lampiran</label>
                                    <!-- <input type="file" name="foto_bukti"> -->
                                    <input type="file" class="dropify" id="lampiran_1" name="lampiran_1"
                                        data-allowed-file-extensions="jpg jpeg png pdf mp4" required>
                                    <br>
                                    <div id="div_lam_2">
                                        <label>Lampiran 2 (Opsional)</label>
                                        <input type="file" class="dropify" id="lampiran_2" name="lampiran_2"
                                            data-allowed-file-extensions="jpg jpeg png pdf mp4">
                                        <br>
                                    </div>
                                    <div id="div_lam_3">
                                        <label>Lampiran 3 (Opsional)</label>
                                        <input type="file" class="dropify" id="lampiran_3" name="lampiran_3"
                                            data-allowed-file-extensions="jpg jpeg png pdf mp4">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Close</span>
                            </button>
                            <button type="submit" class="btn btn-primary ml-1" data-backdrop="static">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Konfirmasi</span>
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Page Specific Script -->
    <script src="<?= base_url() ?>assets/extensions/jquery/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        // *** DROPIFY *** ///
        // Used events
        var lampiran_1 = $('#lampiran_1').dropify();
        var lampiran_2 = $('#lampiran_2').dropify();

        lampiran_1.on('dropify.beforeClear', function(event, element) {
            return confirm("Apakah Anda benar-benar ingin menghapus \"" + element.file
                .name + "\" ?");
        });
        lampiran_2.on('dropify.beforeClear', function(event, element) {
            return confirm("Apakah Anda benar-benar ingin menghapus \"" + element.file
                .name + "\" ?");
        });

        lampiran_1.on('dropify.afterClear', function(event, element) {
            $("#div_lam_2").hide();
            $("#div_lam_3").hide();
            Swal.fire(
                'Dihapus!',
                'File Anda telah dihapus.',
                'success'
            )
        });
        lampiran_2.on('dropify.afterClear', function(event, element) {
            $("#div_lam_3").hide();
            Swal.fire(
                'Dihapus!',
                'File Anda telah dihapus.',
                'success'
            )
        });

        lampiran_1.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });
        lampiran_2.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });
        // *** DROPIFY END *** ///

        $("#div_lam_2").hide();
        $("#div_lam_3").hide();

        $('#lampiran_1').on("change", function() {
            if (document.getElementById("lampiran_1").files.length == 0) {
                $("#div_lam_2").hide();
                $("#div_lam_3").hide();
            } else if (document.getElementById("lampiran_1").files.length == 1) {
                $("#div_lam_2").show();
            }
        });

        $('#lampiran_2').on("change", function() {
            if (document.getElementById("lampiran_1").files.length == 0) {
                $("#div_lam_3").hide();
            } else if (document.getElementById("lampiran_1").files.length == 1) {
                $("#div_lam_3").show();
            }
        });

    });
    </script>
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
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <form action="<?= site_url('pengaduan/vnv/update/') ?><?=$queryAduan['p_id']?>"
                                    method="POST">
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">ID Pengaduan</label>
                                                <input type="text" class="form-control"
                                                    value="<?= $queryAduan['p_id'] ?>" name="id_pengaduan" disabled>
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
                                                <input type="text" id="first-name-column" class="form-control"
                                                    value="<?= $queryAduan['nama_kategori'] ?>" name="status_pengaduan"
                                                    disabled>
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

                                        <div class="col-6">
                                            <button type="button" class="btn btn-block btn-outline-danger"
                                                data-bs-toggle="modal" data-bs-target="#default">
                                                Tolak
                                            </button>
                                        </div>
                                        <div class="col-6">
                                            <a href="#" id="setujui"
                                                class="setujui btn btn-block btn-primary me-1 mb-1">Setujui</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <button id="password1" class="btn btn-outline-info btn-lg btn-block">
            SETUJUI
        </button> -->

        <!-- Modal -->
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

        <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <form action="<?= site_url() ?>pengaduan/vnv/tolak/<?=$queryAduan['p_id']?>" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel1">
                                Tolak Pengaduan
                            </h5>
                            <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-secondary" role="alert">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <span>Silahkan input alasan Anda menolak Pengaduan ini.</span>
                            </div>
                            <div class="form-group">
                                <textarea name="alasan_tolak" cols="15" rows="2.5" placeholder="Alasan" maxlength="50"
                                    class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Close</span>
                            </button>
                            <button type="submit" class="btn btn-danger ml-1">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Tolak</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url() ?>assets/extensions/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/extensions/bootstrap-maxlength.min.js"></script>
    <script>
    // Setup maxlength
    $('.alasan_tolak').maxlength({
        alwaysShow: true,
        validate: false,
        allowOverMax: true,
        customMaxAttribute: "50",
    });
    </script>
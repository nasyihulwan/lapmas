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
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">ID Pengaduan</label>
                                            <input type="text" class="form-control" value="<?= $queryAduan['p_id'] ?>"
                                                name="id_pengaduan" disabled>
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
                                            <label for="first-name-column">Tanggal Selesai</label>
                                            <input type="text" name="tgl_pengaduan" class="form-control" value="<?php 
                                                    $tanggal = date("Y-m-d", strtotime($queryAduan['tgl_selesai']));  
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
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">ID - Nama Petugas</label>
                                            <input type="text" id="first-name-column" class="form-control"
                                                value="<?= $queryAduan['id_petugas'] . " - " . $queryAduan['nama_petugas'] ?>"
                                                name="status_pengaduan" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <div class="form-group mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Tanggapan
                                                    Petugas</label>
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
                                                <label for="exampleFormControlTextarea1" class="form-label">Tanggapan
                                                    Balik</label>
                                                <button type="button" class="btn btn-block btn-outline-primary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#tanggapanBalik<?= $queryAduan['p_id'] ?>">
                                                    Lihat
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <div class="col-md-12 col-12 mb-2">
                                        <div class="form-group">
                                            <label class="form-label">Lampiran Bukti Selesai</label>
                                            <div class="form-group mb-3" data-bs-toggle="modal"
                                                data-bs-target="#buktiSelesai">
                                                <button type="button" class="btn btn-block btn-outline-primary">
                                                    Lihat
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex">
                                        <a href="<?= site_url() ?>pengaduan/selesai"
                                            class="btn btn-block btn-outline-secondary me-1 mb-1">KEMBALI</a>
                                    </div>
                                    <div class="col-6 d-flex">
                                        <a href="#" class="btn btn-block btn-primary me-1 mb-1">PRINT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalScrollable<?= $queryAduan['p_id'] ?>" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">
                            <?= $queryAduan['judul_laporan'] ?> -
                            Tanggal Pengaduan :
                            <?php $tanggal = date("Y-m-d", strtotime($queryAduan['tgl_pengaduan'])); echo tgl_indo($tanggal, true) ?>
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
                            Tanggal Pengaduan :
                            <?php $tanggal = date("Y-m-d", strtotime($queryAduan['tgl_pengaduan'])); echo tgl_indo($tanggal, true) ?>
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

        <div class="modal fade" id="buktiSelesai" tabindex="-1" role="dialog" aria-labelledby="galleryModalTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-centered scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">
                            <?= $queryAduan['judul_laporan'] ?> -
                            Tanggal Pengaduan :
                            <?php $tanggal = date("Y-m-d", strtotime($queryAduan['tgl_pengaduan'])); echo tgl_indo($tanggal, true) ?>
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-secondary" role="alert">
                            Diselesaikai oleh <b>
                                Petugas: <?= $queryAduan['nama_petugas'] ?></b> pada
                            <b><?= tgl_indo(date("Y-m-d", strtotime($queryAduan['tgl_selesai']))) ?></b>
                        </div>

                        <?php 
                            $ekstensi_1 = substr($queryAduan['ls_1'], -3); 
                            if ($ekstensi_1 == 'mp4') { ?>
                        Lampiran 1 - <b><?= $queryAduan['ls_1'] ?></b> - <a
                            href="<?= base_url() ?>assets/images/laporan/selesai/<?= $queryAduan['ls_1'] ?>"
                            type="button" class="btn badge btn-primary mb-2" download>Download</a>
                        <br>
                        <video width="730" height="570" controls>
                            <source src="<?= base_url() ?>assets/images/laporan/selesai/<?= $queryAduan['ls_1'] ?>"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <?php } else if($ekstensi_1 == 'pdf') { ?>
                        Lampiran 1 - <b><?= $queryAduan['ls_1'] ?></b> - <a
                            href="<?= base_url() ?>assets/images/laporan/selesai/<?= $queryAduan['ls_1'] ?>"
                            type="button" class="btn badge btn-primary mb-2" download>Download</a>
                        <?php } else { ?>
                        Lampiran 1 - <b><?= $queryAduan['ls_1'] ?></b> - <a
                            href="<?= base_url() ?>assets/images/laporan/selesai/<?= $queryAduan['ls_1'] ?>"
                            type="button" class="btn badge btn-primary mb-2" download>Download</a>
                        <br>
                        <img src="<?= base_url() ?>assets/images/laporan/selesai/<?= $queryAduan['ls_1'] ?>"
                            alt="<?= $queryAduan['ls_1'] ?>" width="320" height="240">
                        <?php } ?>

                        <?php if ($queryAduan['ls_2'] != null): ?>
                        <hr>
                        <?php 
                            $ekstensi_2 = substr($queryAduan['ls_2'], -3); 
                            if ($ekstensi_2 == 'mp4') { ?>
                        Lampiran 2 - <b><?= $queryAduan['ls_2'] ?></b> - <a
                            href="<?= base_url() ?>assets/images/laporan/selesai/<?= $queryAduan['ls_2'] ?>"
                            type="button" class="btn badge btn-primary mb-2" download>Download</a>
                        <br>
                        <video width="730" height="570" controls>
                            <source src="<?= base_url() ?>assets/images/laporan/selesai/<?= $queryAduan['ls_2'] ?>"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <?php } else if($ekstensi_2 == 'pdf') { ?>
                        Lampiran 2 - <b><?= $queryAduan['ls_2'] ?></b> - <a
                            href="<?= base_url() ?>assets/images/laporan/selesai/<?= $queryAduan['ls_2'] ?>"
                            type="button" class="btn badge btn-primary mb-2" download>Download</a>
                        <?php } else { ?>
                        Lampiran 2 - <b><?= $queryAduan['ls_2'] ?></b> - <a
                            href="<?= base_url() ?>assets/images/laporan/selesai/<?= $queryAduan['ls_2'] ?>"
                            type="button" class="btn badge btn-primary mb-2" download>Download</a>
                        <br>
                        <img src="<?= base_url() ?>assets/images/laporan/selesai/<?= $queryAduan['ls_2'] ?>"
                            alt="<?= $queryAduan['ls_2'] ?>" width="320" height="240">
                        <?php } ?>
                        <?php endif; ?>

                        <?php if ($queryAduan['ls_3'] != null): ?>
                        <hr>
                        <?php 
                            $ekstensi_3 = substr($queryAduan['ls_3'], -3); 
                            if ($ekstensi_3 == 'mp4') { ?>
                        Lampiran 3 - <b><?= $queryAduan['ls_3'] ?></b> - <a
                            href="<?= base_url() ?>assets/images/laporan/selesai/<?= $queryAduan['ls_3'] ?>"
                            type="button" class="btn badge btn-primary mb-2" download>Download</a>
                        <br>
                        <video width="730" height="570" controls>
                            <source src="<?= base_url() ?>assets/images/laporan/selesai/<?= $queryAduan['ls_3'] ?>"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <?php } else if($ekstensi_3 == 'pdf') { ?>
                        Lampiran 3 - <b><?= $queryAduan['ls_3'] ?></b> - <a
                            href="<?= base_url() ?>assets/images/laporan/selesai/<?= $queryAduan['ls_3'] ?>"
                            type="button" class="btn badge btn-primary mb-2" download>Download</a>
                        <?php } else { ?>
                        Lampiran 3 - <b><?= $queryAduan['ls_3'] ?></b> - <a
                            href="<?= base_url() ?>assets/images/laporan/selesai/<?= $queryAduan['ls_3'] ?>"
                            type="button" class="btn badge btn-primary mb-2" download>Download</a>
                        <br>
                        <img src="<?= base_url() ?>assets/images/laporan/selesai/<?= $queryAduan['ls_3'] ?>"
                            alt="<?= $queryAduan['ls_3'] ?>" width="320" height="240">
                        <?php } ?>
                        <?php endif; ?>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                            <?= $queryAduan['judul_laporan'] ?> - Tanggal Pengaduan :
                            <?php $tanggal = date("Y-m-d", strtotime($queryAduan['tgl_pengaduan'])); echo tgl_indo($tanggal, true) ?>
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-secondary" role="alert">
                            Ditanggapi oleh <b>
                                Petugas: <?= $queryAduan['nama_petugas'] ?></b> pada
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
                            <?= $queryAduan['judul_laporan'] ?> - Tanggal Pengaduan :
                            <?php $tanggal = date("Y-m-d", strtotime($queryAduan['tgl_pengaduan'])); echo tgl_indo($tanggal, true) ?>
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

    </div>
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
                                            <input type="text" name="tgl_pengaduan" class="form-control"
                                                value="<?= $queryAduan['tgl_pengaduan'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <div class="form-group mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Isi
                                                    Laporan</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="9"
                                                    disabled>
                                                        <?php echo htmlspecialchars($queryAduan['isi_laporan']); ?>
                                                    </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label class="form-label">Foto Pengaduan</label>
                                            <div class="row gallery" data-bs-toggle="modal"
                                                data-bs-target="#galleryModalFoto<?= $queryAduan['foto'] ?>">
                                                <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                                                    <a href="#">
                                                        <img class="w-100 active"
                                                            src="<?= base_url() ?>assets/images/laporan/<?= $queryAduan['foto'] ?>"
                                                            data-bs-target="#Gallerycarousel" data-bs-slide-to="0">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Status</label>
                                            <input type="text" id="first-name-column" class="form-control" value="<?php if ($queryAduan['status'] == 'selesai') {
                                                        echo 'Selesai';
                                                    }  ?>" name="status_pengaduan" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">ID Petugas</label>
                                            <input type="text" id="first-name-column" class="form-control"
                                                value="<?= $queryAduan['id_petugas'] ?>" name="status_pengaduan"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <div class="form-group mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Tanggapan
                                                    Petugas</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="9"
                                                    disabled>
                                                        <?php echo htmlspecialchars($queryAduan['tanggapan']); ?>
                                                    </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <div class="form-group mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Tanggapan
                                                    Masyarakat</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="9"
                                                    disabled>
                                                        <?php echo htmlspecialchars($queryAduan['tanggapan_balik']); ?>
                                                    </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Tanggal Selesai</label>
                                            <input type="text" id="first-name-column" class="form-control"
                                                value="<?= $queryAduan['tgl_selesai'] ?>" name="status_pengaduan"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label class="form-label">Foto Bukti</label>
                                            <div class="row gallery" data-bs-toggle="modal"
                                                data-bs-target="#galleryModalBukti<?= $queryAduan['foto_bukti'] ?>">
                                                <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                                                    <a href="#">
                                                        <img class="w-100 active"
                                                            src="<?= base_url() ?>assets/images/laporan/bukti_selesai/<?= $queryAduan['foto_bukti'] ?>"
                                                            data-bs-target="#Gallerycarousel" data-bs-slide-to="0">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <a href="<?= site_url() ?>pengaduan/selesai"
                                            class="btn btn-primary me-1 mb-1">KEMBALI</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="galleryModalFoto<?= $queryAduan['foto'] ?>" tabindex="-1" role="dialog"
            aria-labelledby="galleryModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="galleryModalTitle">
                            <?= $queryAduan['id_pengaduan'] . ' - ' . $queryAduan['nik'] . ' - ' . $queryAduan['foto']?>
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div id="Gallerycarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100"
                                        src="<?= base_url() ?>assets/images/laporan/<?= $queryAduan['foto'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="galleryModalBukti<?= $queryAduan['foto_bukti'] ?>" tabindex="-1" role="dialog"
            aria-labelledby="galleryModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="galleryModalTitle">
                            <?= $queryAduan['id_pengaduan'] . ' - ' . $queryAduan['nik'] . ' - ' . $queryAduan['foto']?>
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div id="Gallerycarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100"
                                        src="<?= base_url() ?>assets/images/laporan/<?= $queryAduan['foto'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
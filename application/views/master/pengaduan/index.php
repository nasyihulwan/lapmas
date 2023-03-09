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

        <!-- Basic Tables start -->
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Pengaduan</th>
                                <th>Tanggal Pengaduan</th>
                                <th>NIK</th>
                                <th>Judul Laporan</th>
                                <th>Isi Laporan</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 1; foreach ($queryAduan as $r) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $r->id_pengaduan ?></td>
                                <td><?= $r->tgl_pengaduan ?></td>
                                <td><?= $r->nik ?></td>
                                <td><?= $r->judul_laporan ?></td>
                                <td>
                                    <button type="button" class="btn badge bg-warning" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalScrollable<?= $r->id_pengaduan ?>">
                                        Lihat
                                    </button>
                                </td>
                                <td>
                                    <button type="button" class="btn badge bg-warning" data-bs-toggle="modal"
                                        data-bs-target="#galleryModal<?= $r->id_pengaduan ?>">
                                        Lihat
                                    </button>
                                </td>
                                <td>
                                    <?php if ($this->uri->segment(2) == 'vnv') { ?>
                                    <a href="<?= site_url() ?>pengaduan/vnv/detail/<?= $r->id_pengaduan ?>"
                                        class="btn badge bg-info">Detail</a>
                                    <a href="<?= site_url() ?>pengaduan/vnv/update/<?= $r->id_pengaduan ?>"
                                        class="btn badge bg-success">Setujui</a>
                                    <?php } else { ?>
                                    <a href="<?= site_url() ?>pengaduan/proses/detail/<?= $r->id_pengaduan ?>"
                                        class="btn badge bg-info">Detail</a>
                                    <!-- <a href="<?= site_url() ?>pengaduan/validasi/update/<?= $r->id_pengaduan ?>"
                                        class="btn badge bg-success">Setujui</a> -->
                                    <?php } ?>
                                </td>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalScrollable<?= $r->id_pengaduan ?>" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalScrollableTitle">
                                                    <?= $r->id_pengaduan ?> - <?= $r->judul_laporan ?> -
                                                    <?= $r->nik ?>
                                                </h5>
                                                <button type="button" class="close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <?= $r->isi_laporan ?>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-secondary"
                                                    data-bs-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Close</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="modal fade" id="galleryModal<?= $r->id_pengaduan ?>" tabindex="-1"
                                    role="dialog" aria-labelledby="galleryModalTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="galleryModalTitle">
                                                    <?= $r->id_pengaduan . ' - ' . $r->judul_laporan . ' - ' . $r->foto?>
                                                </h5>
                                                <button type="button" class="close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <div id="Gallerycarousel" class="carousel slide carousel-fade"
                                                    data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100"
                                                                src="<?= base_url() ?>assets/images/laporan/<?= $r->foto ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
        <!-- Basic Tables end -->


    </div>
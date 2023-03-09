<div class="content-wrapper container">
    <div class="page-heading">
        <h3><?= $title ?></h3>
    </div>
    <div class="page-content">
        <section>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <table class="table" id="table1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Pengaduan</th>
                                            <th>Tanggal Pengaduan</th>
                                            <th>Judul Laporan</th>
                                            <th style="width: 10%">Foto</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; foreach ($laporan as $l) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $l->p_id ?></td>
                                            <td><?= $l->tgl_pengaduan ?></td>
                                            <td><?= $l->judul_laporan ?></td>
                                            <td><img src="<?= base_url() ?>assets/images/laporan/<?= $l->foto ?>"
                                                    style="max-width: 100%" alt="<?= $l->foto ?>"></td>
                                            <?php if ($l->status == '0') { ?>
                                            <td><span class="badge bg-danger">Pending</span></td>
                                            <?php } else if($l->status == 'proses') { ?>
                                            <td><span class="badge bg-warning">Proses</span></td>
                                            <?php } else { ?>
                                            <td><span class="badge bg-success">Selesai</span></td>
                                            <?php } ?>

                                            <td>
                                                <?php if ($l->status == 'proses') { ?>
                                                <button type="button" class="btn badge bg-info" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalScrollable<?= $l->id_pengaduan ?>">
                                                    Lihat Tanggapan
                                                </button>
                                                <a href="<?= site_url() ?>" class="btn badge bg-success">Beri Tanggapan
                                                    Balik</a>
                                                <?php } ?>
                                            </td>
                                        </tr>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalScrollable<?= $l->id_pengaduan ?>"
                                            tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalScrollableTitle">
                                                            <?= $l->p_id ?> - <?= $l->judul_laporan ?> -
                                                            <?= $l->nik ?>
                                                        </h5>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?= $l->tanggapan ?>
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
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<div class="content-wrapper container">
    <div class="page-heading">
        <h3><?= $title ?></h3>
    </div>
    <div class="page-content">
        <section>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <?= $this->session->flashdata('message') ?>
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
                                            <th style="width: 20%">Bukti Selesai</th>
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
                                            <?php if ($l->status == 'selesai') { ?>
                                            <td>
                                                <img src="<?= base_url() ?>assets/images/laporan/bukti_selesai/<?= $l->foto_bukti ?>"
                                                    alt="foto_bukti" style="max-width: 55%;">
                                            </td>
                                            <?php } ?>

                                            <td>
                                                <?php if ($l->status == 'selesai') { ?>
                                                <button type="button" class="btn badge bg-info" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalScrollable<?= $l->id_pengaduan ?>">
                                                    Lihat Tanggapan Petugas
                                                </button>

                                                <?php } ?>

                                                <?php if ($l->status == 'proses' && $this->db->get_where('tanggapan', ['id_pengaduan' => $l->p_id])->num_rows() >= 1) { ?>
                                                <button type="button" class="btn badge bg-info" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModalScrollable<?= $l->id_pengaduan ?>">
                                                    Lihat Tanggapan Petugas
                                                </button>
                                                <?php if ($l->tanggapan_balik != null) { ?>
                                                <button type="button" class="btn badge bg-success"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#default<?= $l->id_pengaduan ?>">
                                                    Lihat Tanggapan Saya
                                                </button>
                                                <?php } else { ?>
                                                <button type="button" class="btn badge bg-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#inlineForm<?= $l->id_pengaduan ?>">
                                                    Beri Tanggapan
                                                    Balik
                                                </button>
                                                <?php } ?>
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

                                        <div class="modal fade text-left" id="default<?= $l->id_pengaduan ?>"
                                            tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="myModalLabel1">
                                                            <?= $l->p_id ?> - <?= $l->judul_laporan ?> -
                                                            <?= $l->nik ?>
                                                        </h5>
                                                        <button type="button" class="close rounded-pill"
                                                            data-bs-dismiss="modal" aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>
                                                            <?= $l->tanggapan_balik ?>
                                                        </p>
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

                                        <div class="modal fade" id="exampleModalScrollable<?= $l->tanggapan_balik ?>"
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
                                                        <?= $l->tanggapan_balik ?>
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

                                        <!--form Modal -->
                                        <div class="modal fade text-left" id="inlineForm<?= $l->id_pengaduan ?>"
                                            tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel33">
                                                            Form Tanggapan Balik - <?= $l->id_pengaduan ?>
                                                        </h4>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                    <form
                                                        action="<?= site_url() ?>masyarakat/tanggapanBalik/<?= $l->id_pengaduan ?> ?>"
                                                        method="POST">
                                                        <div class="modal-body">
                                                            <label>Tanggapan</label>
                                                            <div class="form-group">
                                                                <textarea name="tanggapan_balik" class="form-control"
                                                                    cols="30" rows="10"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light-secondary"
                                                                data-bs-dismiss="modal">
                                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                                <span class="d-none d-sm-block">Close</span>
                                                            </button>
                                                            <button type="submit" class="btn btn-primary ml-1"
                                                                data-bs-dismiss="modal">
                                                                <!-- <i class="bx bx-check d-block d-sm-none"></i> -->
                                                                <span class="d-none d-sm-block">Submit</span>
                                                            </button>
                                                        </div>
                                                    </form>
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
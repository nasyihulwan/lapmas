<div class="content-wrapper container">
    <div class="page-heading">
        <h3><?= $title ?></h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon purple mb-2">
                                            <i class="fa fa-paper-plane"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">
                                            Laporan Dikirim
                                        </h6>
                                        <h6 class="font-extrabold mb-0">
                                            <?= $this->db->get_where('pengaduan', ['nik' => $this->session->userdata('nik')])->num_rows() ?>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if ($this->db->get_where('pengaduan', ['nik' => $this->session->userdata('nik'), 'status' => '0'])->num_rows() >= 1) { ?>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon red mb-2">
                                            <i class="fa fa-bars"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Laporan Pending</h6>
                                        <h6 class="font-extrabold mb-0">
                                            <?= $this->db->get_where('pengaduan', ['nik' => $this->session->userdata('nik'), 'status' => '0'])->num_rows() ?>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }  ?>
                    <?php if ($this->db->get_where('pengaduan', ['nik' => $this->session->userdata('nik'), 'status' => 'proses'])->num_rows() >= 1) { ?>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon blue mb-2">
                                            <i class="fa fa-list-ul"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Laporan Proses</h6>
                                        <h6 class="font-extrabold mb-0">
                                            <?= $this->db->get_where('pengaduan', ['nik' => $this->session->userdata('nik'), 'status' => 'proses'])->num_rows() ?>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }  ?>
                    <?php if ($this->db->get_where('pengaduan', ['nik' => $this->session->userdata('nik'), 'status' => 'selesai'])->num_rows() >= 1) { ?>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon green mb-2">
                                            <i class="fa fa-check"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Laporan Selesai</h6>
                                        <h6 class="font-extrabold mb-0">
                                            <?= $this->db->get_where('pengaduan', ['nik' => $this->session->userdata('nik'), 'status' => 'selesai'])->num_rows() ?>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }  ?>
                </div>
            </div>
            <!-- <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body py-4 px-5">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="assets/images/faces/1.jpg" alt="Face 1" />
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold"><?= $this->session->userdata('nama') ?></h5>
                                <h6 class="text-muted mb-0"><?= $this->session->userdata('nik') ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </section>
    </div>
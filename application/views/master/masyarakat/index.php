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
                <div class="card-header">
                    <a href="<?= site_url() ?>user/add/masyarakat" class="btn btn-outline-primary">Tambah Data</a>
                </div>
                <div class="card-body">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>No Telp</th>
                                <th width="10%">Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($masyarakat as $m) { ?>
                            <tr>
                                <form action="<?= site_url() ?>pengaturan/updateStatusMasyarakat/<?= $m->nik ?>"
                                    method="post">
                                    <td><?= $no++ ?></td>
                                    <td><?= $m->nik ?></td>
                                    <td><?= $m->nama ?></td>
                                    <td><?= $m->username ?></td>
                                    <td><?= $m->telp ?></td>
                                    <td>
                                        <?php if ($m->status == 'active') { ?>
                                        <button type="button" class="btn badge bg-success">
                                            Aktif
                                        </button>
                                        <?php } else if($m->status == '0') { ?>
                                        <button type="button" class="btn badge bg-warning">
                                            Nonaktif
                                        </button>
                                        <?php } else { ?>
                                        <button type="button" class="btn badge bg-danger">
                                            Soft Deleted
                                        </button>
                                        <?php } ?>

                                    </td>
                                    <td>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <select name="status" class="form-select">
                                                        <option value="active"
                                                            <?php if ($m->status == 'active') { echo "selected"; } ?>>
                                                            Aktif</option>
                                                        <option value="0"
                                                            <?php if ($m->status == '0') { echo "selected"; } ?>>
                                                            Nonaktif</option>
                                                        <option value="deleted"
                                                            <?php if ($m->status == 'deleted') { echo "selected"; } ?>>
                                                            Soft Deleted</option>
                                                    </select>
                                                </div>
                                                <div class="col-6">
                                                    <button type="submit" class="btn btn-block btn-primary">
                                                        Update
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </form>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
        <!-- Basic Tables end -->


    </div>
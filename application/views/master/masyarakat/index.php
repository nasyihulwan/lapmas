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
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>No Telp</th>
                                <th>Status</th>
                                <!-- <th>Aksi</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($masyarakat as $m) { ?>
                            <tr>
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
                                <!-- <td>
                                    <button type="button" class="btn badge bg-danger">
                                        Delete
                                    </button>

                                    <button type="button" class="btn badge bg-info">
                                        Update
                                    </button>
                                </td> -->
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
        <!-- Basic Tables end -->


    </div>
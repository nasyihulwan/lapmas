<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <h1 class="auth-title">Log in.</h1>
                    <p class="auth-subtitle mb-3">Masuk dengan data yang Anda masukkan saat registrasi.</p>
                    <p><?= $this->session->flashdata('message') ?></p>
                    <form action="<?= site_url() ?>auth/login" method="POST">

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" name="username"
                                placeholder="Username">
                            <?= form_error('username', '<small class="text-danger pl-2">', '</small>') ?>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" name="password"
                                placeholder="Password">
                            <?= form_error('password', '<small class="text-danger pl-2">', '</small>') ?>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Belum punya akun? <a href="<?= site_url() ?>auth/register"
                                class="font-bold">Sign
                                up</a>.</p>
                        <p><a class="font-bold" href="<?= site_url() ?>">Kembali</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                    <div class="auth-logo">
                        <!-- <a href="index.html"><img
                                src="<?= base_url() ?>assets/landing/images/no_outline_lapmas_logo.png" alt="Logo"></a> -->
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <h1 class="auth-title">Register</h1>
                    <p class="auth-subtitle mb-5">Masukkan data Anda untuk mendaftar ke situs web kami.</p>

                    <form action="<?= site_url() ?>auth/register" method="POST">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" name="nik" placeholder="NIK">
                            <?= form_error('nik', '<small class="text-danger pl-2">', '</small>') ?>
                            <div class="form-control-icon">
                                <i class="bi bi-bar-chart-steps"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" name="nama" placeholder="Nama">
                            <?= form_error('nama', '<small class="text-danger pl-2">', '</small>') ?>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" name="username"
                                placeholder="Username">
                            <?= form_error('username', '<small class="text-danger pl-2">', '</small>') ?>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" name="password1"
                                placeholder="Password">
                            <?= form_error('password1', '<small class="text-danger pl-2">', '</small>') ?>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" name="password2"
                                placeholder="Confirm Password">
                            <?= form_error('password2', '<small class="text-danger pl-2">', '</small>') ?>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" name="telp"
                                placeholder="Nomor Ponsel">
                            <?= form_error('telp', '<small class="text-danger pl-2">', '</small>') ?>
                            <div class="form-control-icon">
                                <i class="bi bi-phone"></i>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class='text-gray-600'>Sudah punya akun? <a href="<?= base_url() ?>auth/login"
                                class="font-bold">Log
                                in</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>

</html>
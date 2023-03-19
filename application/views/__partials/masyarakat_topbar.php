<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <div class="header-top">
                    <div class="container">
                        <div class="logo">
                            <a href="<?= site_url() ?>masyarakat"><img
                                    src="<?= base_url() ?>assets/images/logo/no_outline_lapmas_logo.png" alt="Logo"
                                    style="width: 80%; height: 40%;" srcset=""></a></a>
                        </div>
                        <div class="header-top-right">
                            <div class="dropdown">
                                <a href="#" id="topbarUserDropdown"
                                    class="user-dropdown d-flex align-items-center dropend dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-md2">
                                        <img src="<?= base_url() ?>assets/images/faces/1.jpg" alt="Avatar" />
                                    </div>
                                    <div class="text">
                                        <h6 class="user-dropdown-name"><?= $this->session->userdata('nama') ?></h6>
                                        <p class="user-dropdown-status text-sm text-muted">
                                            <?= $this->session->userdata('nik') ?>
                                        </p>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg"
                                    aria-labelledby="topbarUserDropdown">
                                    <li><a class="dropdown-item" href="<?= site_url() ?>masyarakat/profile">Profile</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?= site_url() ?>auth/m_logout">Logout</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Burger button responsive -->
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="main-navbar">
                    <div class="container">
                        <ul>
                            <li class="menu-item">
                                <a href="<?= site_url() ?>" class="menu-link">
                                    <span><i class="bi bi-arrow-left"></i> Halaman Utama</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= site_url() ?>masyarakat" class="menu-link">
                                    <span><i class="bi bi-grid-fill"></i> Dashboard</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= site_url() ?>lapor" class="menu-link">
                                    <span><i class="bi bi-send-fill"></i> Kirim Laporan</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= site_url() ?>masyarakat/laporan" class="menu-link">
                                    <span><i class="bi bi-stack"></i> Laporan Saya</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?= site_url() ?>masyarakat/ulasan" class="menu-link">
                                    <span><i class="bi bi-star-fill"></i> Beri Ulasan</span>
                                </a>
                            </li>

                            <!-- <li class="menu-item has-sub">
                                <a href="#" class="menu-link">
                                    <span><i class="bi bi-stack"></i> Components</span>
                                </a>
                                <div class="submenu">
                                    Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it.
                                    <div class="submenu-group-wrapper">
                                        <ul class="submenu-group">
                                            <li class="submenu-item">
                                                <a href="component-alert.html" class="submenu-link">Alert</a>
                                            </li>
                                        </ul>

                                        <ul class="submenu-group">

                                            <li class="submenu-item has-sub">
                                                <a href="#" class="submenu-link">Extra Components</a>

                                                3 Level Submenu
                                                <ul class="subsubmenu">
                                                    <li class="subsubmenu-item">
                                                        <a href="extra-component-avatar.html"
                                                            class="subsubmenu-link">Avatar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li> -->


                        </ul>
                    </div>
                </nav>
            </header>
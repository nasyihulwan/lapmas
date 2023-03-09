 <!-- ***** Header Area Start ***** -->
 <header class="header-area header-sticky">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <nav class="main-nav">
                     <!-- ***** Logo Start ***** -->
                     <a href="#" class="logo">
                         <img src="<?= base_url() ?>assets/landing/images/logo.png" alt="Softy Pinko" />
                     </a>
                     <!-- ***** Logo End ***** -->
                     <!-- ***** Menu Start ***** -->
                     <ul class="nav">
                         <li><a href="#welcome" class="active">Home</a></li>
                         <!-- <li><a href="#features">About</a></li> -->
                         <li><a href="#testimonials">Ulasan</a></li>
                         <li><a href="#contact-us">Hubungi Kami</a></li>
                         <?php if ($this->session->userdata('nik') != null) { ?>
                         <li><a href="<?= site_url() ?>lapor">Lapor</a></li>
                         <li><a href="<?= site_url() ?>masyarakat">Dashboard</a></li>
                         <li><a href="<?= site_url() ?>auth/m_logout">Keluar</a></li>
                         <?php } else { ?>
                         <li><a href="<?= site_url() ?>auth/login">Masuk</a></li>
                         <?php if ($this->session->userdata('id_petugas') == null) { ?>
                         <li><a href="<?= site_url() ?>auth/register">Daftar</a></li>
                         <?php } ?>
                         <?php } ?>

                     </ul>
                     <a class='menu-trigger'>
                         <span>Menu</span>
                     </a>
                     <!-- ***** Menu End ***** -->
                 </nav>
             </div>
         </div>
     </div>
 </header>
 <!-- ***** Header Area End ***** -->
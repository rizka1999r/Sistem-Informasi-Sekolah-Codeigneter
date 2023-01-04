  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">

    <div class="container d-flex justify-content-between">
      
      <div class="logo">
        
        <h1><a href="<?php echo base_url('/Home')?>"><span>SDN</span>1 PURWADADI</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="<?php echo base_url('/Home')?>">Home</a></li>
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Sambutan Kepala Sekolah</a></li>
              <li class="dropdown"><a href="#"><span> Profil Sekolah</span><i class="bi bi-chevron-right"></i></a>
              <ul>
                  <li><a href="<?php echo base_url("Profil/identitas")?>">Identitas Sekolah</a></li>
                  <li><a href="<?php echo base_url("Profil/pelengkap")?>">Data Pelengkap</a></li>
                  <li><a href="<?php echo base_url("Profil/Periodik")?>">Data Periodik</a></li>
                  <li><a href="<?php echo base_url("Profil/Lainnya")?>">Data Lainnya</a></li>
                </ul>
              </li>
              <li><a href="<?php echo base_url("Profil/Sejarah")?>">Sejarah</a></li>
              <li><a href="<?php echo base_url("Profil/Visi")?>">Visi</a></li>
              <li><a href="<?php echo base_url("Profil/Sarana")?>">Sarana dan Prasarana</a></li>
              <li class="dropdown"><a href="#"><span>Struktur Organisasi</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Sekolah</a></li>
                  <li><a href="<?php echo base_url("Profil/Komite")?>">Komite Sekolah</a></li>
                  <li><a href="#">Osis</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Staff</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="<?php echo base_url("PendidikController/Pendidik")?>">Tenaga Pendidik</a></li>
                  <li><a href="<?php echo base_url("KependidikanController/Kependidikan")?>">Tenaga Kependidikan</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('BeritaController/Berita')?>">Berita</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('/Home/Prestasi')?>">Prestasi</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('/Home/ekstra')?>">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('/Home/Kontak')?>">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <div style="margin-top: 90px;"></div>
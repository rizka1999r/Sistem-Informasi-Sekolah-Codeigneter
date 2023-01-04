<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('img/Logo.png')?>" rel="icon">
  <link href="<?php echo base_url('img/Logo.png')?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
<!--   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet"> -->
  <link href="<?php echo base_url('css/fonts.googleapis.css') ?>" rel="stylesheet">
  
  
  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('vendor/animate.css/animate.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('vendor/bootstrap-icons/bootstrap-icons.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('vendor/boxicons/css/boxicons.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('vendor/glightbox/css/glightbox.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('vendor/swiper/swiper-bundle.min.css')?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('css/style.css')?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eBusiness - v4.6.0
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


<?= $this->include('layout/navbar'); ?>

<?= $this-> renderSection('content'); ?>

   <!-- ======= Footer ======= -->
   <footer>
    <div class="footer-area">
      <div class="container mt">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2>Social Media Kami</h2>
                </div>
                <p>Ayo Follow dan Ikuti informasi seputar kegiatan di SDN 1 PURWADADI di social media kami :</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="<?php echo base_url('')?>"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('')?>"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('')?>"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('')?>"><i class="bi bi-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
              <div class="footer-logo">
                  <h2>Informasi</h2>
                </div>
                <p>
                Infomasi Kontak Tentang SDN 1 Purwadadi
                </p>
                <div class="footer-contacts">
                  <p><span>Nomor Telepon:</span>265653360</p>
                  <p><span>Nomor Fax:</span>-</p>
                  <p><span>Email:</span>sdn1.purwadadi@gmail.com</p>
                  <p><span>Working Hours:</span> 07.00 AM</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
       <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
              <div class="footer-logo">
                  <h2>Denah Lokasi</h2>
                </div>
                <div class="flicker-img">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.13834363651!2d108.65499211415057!3d-7.449942875483102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6586645bf90b13%3A0x306ace4968791e4e!2sSD%20Negeri%201%20Purwadadi!5e0!3m2!1sid!2sid!4v1636805921080!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>eBusiness</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
            -->
              Designed by <a href="https://bootstrapmade.com/">Rizka Ramdani</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?php echo base_url('vendor/glightbox/js/glightbox.min.js'); ?>"></script>
  <script src="<?php echo base_url('vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
  <script src="<?php echo base_url('vendor/php-email-form/validate.js'); ?>"></script>
  <script src="<?php echo base_url('vendor/swiper/swiper-bundle.min.js'); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('js/main.js'); ?>"></script>

</body>

</html>
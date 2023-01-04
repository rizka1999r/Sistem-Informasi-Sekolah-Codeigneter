<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
  <!-- ======= hero Section ======= -->
  <section id="hero" style="margin-top: -90px;">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(<?php echo base_url("img/hero-carousel/1.jpg");?>)">
            <div class="carousel-container">
              <div class="container">
                <!-- <h2 class="animate__animated animate__fadeInDown">The Best Business Information </h2> -->
                <p class="animate__animated animate__fadeInUp">Selamat Datang di website SDN 1 Purwadadi</p>
                <!-- <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> -->
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(<?php echo base_url("img/hero-carousel/2.jpg");?>)">
            <div class="carousel-container">
              <div class="container">
                <!-- <h2 class="animate__animated animate__fadeInDown">At vero eos et accusamus</h2> -->
                <p class="animate__animated animate__fadeInUp">Website ini sengaja kami buat untuk kepentingan sekolah juga sebagai sarana informasi </p>
                <!-- <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> -->
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(<?php echo base_url("img/hero-carousel/3.jpg");?>)">
            <div class="carousel-container">
              <div class="container">
               <!--  <h2 class="animate__animated animate__fadeInDown">Temporibus autem quibusdam</h2>
                <p class="animate__animated animate__fadeInUp">Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a> -->
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero Section -->

   <!-- ======= Blog Section ======= -->
   <div id="blog" class="blog-area">
   <div class="container mb-4 mt-4">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
              <h2><a style="color: #444444;" href="<?php echo base_url('BeritaController/Berita')?>">BERITA TERBARU</a></h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <?php foreach ($Berita as $row) : ?>
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="/img/berita/<?= $row["gambar"];?>" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="date-type">
                    <i class="fa fa-calendar"></i><?= $row["create_date"];?>
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html"><?= $row["judul"];?></a>
                  </h4>
                  <p>
                  <?= $row["isi"];?>
                  </p>
                </div>
                <span>
                  <a href="blog.html" class="ready-btn">Read more</a>
                </span>
                <?php endforeach; ?>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
          </div>
        </div>
    </div><!-- End Blog Section -->

<!-- ======= Team Section ======= -->
<div class="col-md-12 col-sm-12 col-xs-12 ">
<div class="swiper-container">
<div class="section-headline text-center">
      <h2><a style="color: #444444;" href="<?php echo base_url("PendidikController/Pendidik")?>">PENDIDIK</a></h2>
    </div>
      <div class="swiper-wrapper">
        <?php foreach ($Pendidik as $row) : ?>
        <div class="swiper-slide">
          <div class="container">
            <div class="slide-card text-center">
              <img class="slide-card-img-top" src="/img/guru/<?= $row["gambar"];?>" alt="" />
              <div class="slide-card-body">
                <h5 style="width: auto;"><?= $row["nama"];?><br/>
                  <span><?= $row["kategori"];?></span>
                </h5>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    
</div>
      <!-- Add Arrows -->
<!-- <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div> -->
<!-- End Team Section -->
    
  <?= $this->endSection(); ?>
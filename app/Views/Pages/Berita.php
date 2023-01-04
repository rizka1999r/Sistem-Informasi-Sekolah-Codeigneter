<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

        <div class="container mb-4">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>BERITA</h2>
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
<?= $this->endSection(); ?>
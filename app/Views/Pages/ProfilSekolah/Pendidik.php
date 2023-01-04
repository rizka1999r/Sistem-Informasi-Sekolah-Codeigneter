<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?php
// $data = file_get_contents('json/Guru.json');
// $menu = json_decode($data, true);

// $menu = $menu["menu"];
?>
<div class="container">
    <div class="row mt-3">
    <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                  <h2>TENAGA PENDIDIK</h2>
                </div>
              </div>
            </div>
            <div class="row">
                <?php foreach ($Pendidik as $row) : ?>
                <div class="col-md-4">
                <div class="card mb-3">
                <img src="/img/guru/<?= $row["gambar"];?>" class="card-img-top" >
                 <div class="card-body">
                <h5 class="card-title"><?= $row["nama"];?></h5>
                <p class="card-text"><?= $row["kategori"];?></p>
                </div>
                </div>
                </div>
                <?php endforeach; ?>
<?= $this->endSection(); ?>
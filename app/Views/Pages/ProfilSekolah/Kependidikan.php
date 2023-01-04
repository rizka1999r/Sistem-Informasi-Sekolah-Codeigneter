<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?php
/* $data = file_get_contents('json/Kependidikan.json');
$menu = json_decode($data, true); */

// $menu = $result;

// echo "<pre>";
// print_r($guru);
// echo "</pre>";
// die;
// $menu = $menu["menu"];
?>
<div class="container">
    <div class="row mt-3">
    <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                  <h2>TENAGA KEPENDIDIKAN</h2>
                </div>
              </div>
            </div>
            <div class="row">
                <?php foreach ($kependidikan as $row) : ?>
                <div class="col-md-4">
                <div class="card mb-3">
                <img src="/img/guru/<?= $row["gambar"];?>" class="card-img-top" style="width: 347px; height: 472px;">
                 <div class="card-body">
                <h5 class="card-title"><?= $row["nama"];?></h5>
                <p class="card-text"><?= $row["kategori"];?></p>
                </div>
                </div>
                </div>
                <?php endforeach; ?>
<?= $this->endSection(); ?>
<?php
require 'functions.php';

$keyword = $_GET['keyword'];
$fegelein = cari($keyword);
?>

<?php foreach ($fegelein as $fgl) : ?>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="card h-100">
            <img src="assets/img/<?= $fgl['gambar']; ?>" class="card-img-top" alt="...">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title"><?= $fgl['judul'] ?></h5>
                <p class="card-text"><?= $fgl['deskripsi'] ?></p>
            </div>
        </div>
    </div>
<?php endforeach; ?>

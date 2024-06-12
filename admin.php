<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}

require 'functions.php';
$fegelein = query("SELECT * FROM fegelein");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $fegelein = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFEBCD;
        }
        .container {
            margin-top: 50px;
        }
        .table img {
            width: 75px;
            height: auto;
        }
        .actions {
            display: flex;
            gap: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Daftar Artikel</h1>
            <div>
                <a href="index.php" class="btn btn-secondary">Kembali ke Beranda</a>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>

        <a href="tambah.php" class="btn btn-primary mb-3">Tambah Data Artikel</a>

        <form action="" method="post" class="d-flex mb-4">
            <input class="form-control me-2" type="text" name="keyword" size="40" autofocus placeholder="Masukan keyword pencarian" autocomplete="off">
            <button class="btn btn-outline-success" type="submit" name="cari">Cari!</button>
        </form>

        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>No.</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach($fegelein as $row) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><img src="assets/img/<?= $row["gambar"]; ?>" alt=""></td>
                    <td><?= $row["judul"] ?></td>
                    <td><?= $row["deskripsi"] ?></td>
                    <td class="actions">
                        <a href="ubah.php?id=<?= $row["id"] ?>" class="btn btn-warning btn-sm">Ubah</a>
                        <a href="hapus.php?id=<?= $row["id"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda akan menghapus permanen data ini, anda yakin?');">Hapus</a>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>

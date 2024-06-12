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

// ambil data di URL
$id = $_GET["id"];

// query data fegelein berdasarkan id
$wst = query("SELECT * FROM fegelein WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil diubah atau tidak
    if( ubah($_POST) > 0 ) {
        echo "
        <script>
            alert('data berhasil diubah!');
            document.location.href = 'admin.php';
            </script>
            ";
    } else {
        echo "
        <script>
            alert('data gagal diubah!');
            document.location.href = 'admin.php';
            </script>
            ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #FFEBCD;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .form-control, .form-label {
            margin-bottom: 15px;
        }
        .card {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .img-preview {
            margin-top: 15px;
            max-height: 150px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Ubah Data Artikel</h1>
        <div class="card">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $wst["id"] ?>">
                <input type="hidden" name="gambarLama" value="<?= $wst["gambar"] ?>">
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control" required value="<?= $wst["judul"] ?>">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" id="deskripsi" class="form-control" required value="<?= $wst["deskripsi"] ?>">
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label> <br>
                    <img src="assets/img/<?= $wst['gambar']; ?>" class="img-preview" alt="">
                    <input type="file" name="gambar" id="gambar" class="form-control">
                </div>
                <div class="d-flex justify-content-between">
                    <a href="admin.php" class="btn btn-secondary">Kembali</a>
                    <button type="submit" name="submit" class="btn btn-primary">Ubah Data</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

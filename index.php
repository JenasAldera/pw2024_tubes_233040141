<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$fegelein = query("SELECT * FROM fegelein");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History N Memes</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-size: cover;
            background-color: #FFEBCD;
            padding-top: 56px;
            scroll-behavior: smooth;
        }

        .jumbotron {
            background-image: url(assets/History.jpg);
            background-size: cover;
            color: white;
            margin-bottom: 0;
            min-height: 100vh;
            padding-top: 100px;
        }

        .card {
            background-color: #FFEBCD;
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            background-color: #291300;
            color: #D2B48C;
            border-radius: 10px;
        }

        .navbar {
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <?php require "layout/header.php"; ?>

    <div class="jumbotron jumbotron-fluid text-center" id="home">
        <div class="container">
            <h1 class="display-4">Welcome To History N Memes</h1>
            <p class="lead">Belajar Sejarah? atau Meme? Dua-duanya lahh!</p>
        </div>
    </div>

    <div class="container my-5" id="konten">
        <div class="row justify-content-center mb-4">
            <div class="col-md-8">
                <form action="" method="post" class="d-flex">
                    <input class="form-control me-2" type="search" name="keyword" id="keyword" placeholder="Cari..." aria-label="Search" autocomplete="off">
                    <button class="btn btn-outline-success" type="submit" name="cari">Cari</button>
                </form>
            </div>
        </div>
        <div class="row wrap" id="result">
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
        </div>
    </div>

    <?php require "layout/footer.php"; ?>
    
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>

        // AJAX js
        document.getElementById('keyword').addEventListener('input', function() {
            var keyword = this.value;
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'search.php?keyword=' + keyword, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById('result').innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        });
    </script>
</body>

</html>

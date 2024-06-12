<?php 
require 'functions.php';

if ( isset($_POST["register"]) ) {
    if ( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('User baru berhasil ditambahkan');
                window.location.href = 'login.php';
            </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFEBCD;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-box {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            max-height: 80vh; /* Set maximum height */
            overflow-y: auto; /* Enable vertical scroll if needed */
        }


        .login-box h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .user-box {
            margin-bottom: 20px;
        }

        .user-box label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .user-box input {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 10px;
        }

        form button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #0056b3;
        }

        .register-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }

        .register-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Registrasi</h2>
    <form action="" method="post">
        <div class="user-box">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" maxlength="20" required="">
        </div>

        <div class="user-box">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required="">
        </div>

        <div class="user-box">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required="">
        </div>

        <div class="user-box">
            <label for="password2">Konfirmasi Password</label>
            <input type="password" name="password2" id="password2" required="">
        </div>
        
        <button type="submit" name="register">Buat Akun</button>
    </form>
    <a href="login.php" class="register-link">Sudah punya akun?</a>
</div>

</body>
</html>

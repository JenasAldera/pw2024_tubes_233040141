<?php 
session_start();
require 'functions.php';

// Check if the "Remember Me" checkbox is checked and set cookies accordingly
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    // Check username
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        // Check password
        if (password_verify($password, $row["password"])) {
            // Set session
            $_SESSION["login"] = true;
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role'];

            // Check if "Remember Me" checkbox is checked
            if (isset($_POST["remember"])) {
                // Set cookies for id and key (hashed username) with a longer expiration time
                setcookie('id', $row['id'], time() + (30 * 24 * 60 * 60)); // 30 days expiration
                setcookie('key', hash('sha256', $row['username']), time() + (30 * 24 * 60 * 60)); // 30 days expiration
            }
            // Redirect to appropriate page based on user role
            if ($row['role'] == 'admin') {
                header("Location: admin.php");
            } else {
                header("Location: index.php");
            }
            exit();
        }
    }
    // If login fails, set error flag
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
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

        .title {
            color: white;
            font-size: 3rem;
            margin-bottom: 20px;
            text-align: center;
            text-shadow: 2px 2px 3px black;
            border-radius: 10px;
            padding: 20px;
        }

        .title span {
            color: red;
        }

        .title p {
            font-size: 1rem;
            text-shadow: none;
            color: black;
        }

        .login-box {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            max-height: 80vh; /* Set maximum height */
            overflow-y: auto; /* Enable vertical scroll if needed */
            margin: auto;
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

        .remember-box {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .remember-box input {
            width: auto;
        }

        .remember-box label {
            margin-left: 5px;
        }

        .user-box button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .user-box button:hover {
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

<?php if (isset($error)) : ?>
    <script>
        alert('Username / Password Salah!');
    </script>
<?php endif; ?>

<div class="container">
    <div class="title"><span> History </span> N Memes
    <p>Silahkan Login, atau buat akun sebelum masuk</p>
    </div>
    <div class="login-box">
        <h2>Login</h2>
        <form action="" method="post">
            <!-- Username input -->
            <div class="user-box">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" maxlength="20" required="">
            </div>

            <!-- Password input -->
            <div class="user-box">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required="">
            </div>

            <!-- Remember Me checkbox -->
            <div class="user-box remember-box">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
            </div>
            
            <!-- Login button -->
            <div class="user-box">
                <button type="submit" name="login">Login</button>
            </div>
        </form>
        <a href="registrasi.php" class="register-link">Belum punya akun?</a>
    </div>
</div>

</body>
</html>

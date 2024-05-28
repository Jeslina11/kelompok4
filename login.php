<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "kel4"; 

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

session_start();

function redirectTo($page) {
    header("Location: $page");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login'])) {
        // Handle login
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Dummy authentication
        if ($email === 'user@example.com' && $password === 'password') {
            $_SESSION['user'] = $email;
            redirectTo('halaman.php');
        } else {
            $loginError = "Email or password is incorrect.";
        }
    } elseif (isset($_POST['register'])) {
        // Handle registration
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        if ($password === $confirmPassword) {
            // Registration logic here
            $_SESSION['user'] = $email;
            redirectTo('halaman.php');
        } else {
            $registerError = "Passwords do not match.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap">
</head>
<body>

<header>
    <a href="#" class="logo">Tou<span>rs.</span></a>
    <ul class="navbar">
        <li><a href="halaman.php" id="home">Home</a></li>
        <li><a href="about.php" id="about">About</a></li>
        <li><a href="Wisata.php" id="wisata">Wisata</a></li>
        <li><a href="login.php" id="login">Login</a></li>
    </ul>
</header>

<div class="container">
    <div class="main-box login">
        <h1>Masuk</h1>
        <?php if (!empty($loginError)) { echo "<p style='color:red;'>$loginError</p>"; } ?>
        <form action="" method="POST">
            <div class="input-box">
                <span class="icon"><i class="bx bxs-envelope"></i></span>
                <input type="email" name="email" required>
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><i class="bx bxs-lock-alt"></i></span>
                <input type="password" name="password" required>
                <label>Kata sandi</label>
            </div>
            <div class="check">
                <label><input type="checkbox">Ingatkan saya!</label>
                <a href="#">Lupa kata sandi?</a>
            </div>
            <button type="submit" name="login" class="main-btn">Masuk</button>
            <div class="register">
                <p>Tidak memiliki akun?<a href="#" class="register-link"> Daftar</a></p>
            </div>
        </form>
    </div>
    <div class="main-box register">
        <h1>Daftar</h1>
        <?php if (!empty($registerError)) { echo "<p style='color:red;'>$registerError</p>"; } ?>
        <form action="" method="POST">
            <div class="input-box">
                <span class="icon"><i class="bx bxs-user"></i></span>
                <input type="text" name="username" required>
                <label>Nama pengguna</label>
            </div>
            <div class="input-box">
                <span class="icon"><i class="bx bxs-envelope"></i></span>
                <input type="email" name="email" required>
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><i class="bx bxs-lock-alt"></i></span>
                <input type="password" name="password" required>
                <label>Kata sandi</label>
            </div>

            <div class="input-box">
                <span class="icon"><i class="bx bxs-lock-alt"></i></span>
                <input type="password" name="confirmPassword" required>
                <label>Verifikasi Kata sandi</label>
            </div>
            <div class="check">
                <label><input type="checkbox">Saya menerima semua syarat & ketentuan</label>
            </div>
            <button type="submit" name="register" class="main-btn">Daftar</button>
            <div class="register">
                <p>Sudah punya akun?<a href="#" class="login-link"> Masuk</a></p>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll(".navbar a");

    links.forEach(link => {
        link.addEventListener("click", function (event) {
            links.forEach(link => {
                link.classList.remove("active");
            });
            this.classList.add("active");
        });
    });

    const currentLocation = window.location.href;
    links.forEach(link => {
        if (link.href === currentLocation) {
            link.classList.add("active");
        }
    });
});

const container = document.querySelector('.container');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');

registerLink.addEventListener('click', () => {
    container.classList.add('active');
});

loginLink.addEventListener('click', () => {
    container.classList.remove('active');
});
</script>

</body>
</html>

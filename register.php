<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="regis-style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap">
</head>
<body>

<header>
    <a href="#" class="logo">
      <img src="image/logo.png" alt="Logo" />
  </a>
      <ul class="navbar">
        <li><a href="halaman.html" id="home">Beranda</a></li>
        <li><a href="#holiday" id="about">Tentang</a></li>
        <li><a href="informasi umum.html" id="informasi">Informasi umum</a></li>
        <li><a href="wisata.html" id="about">Wisata</a></li>
        <li class="login"><a href="login.php" id="loginButton">Masuk</a></li>
    </ul>
</header>

<div class="hero">
    <video autoplay muted id="myVideo">
      <source src="3.mp4" type="video/mp4">
    </video>

    <div class="container">
        <div class="main-box register">
            <h1>Daftar</h1>
            <form action="proses_register.php" method="post">
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
                    <input type="password" required>
                    <label>Konfirmasi Kata sandi</label>
                </div>
                <div class="check">
                    <label><input type="checkbox">Saya menerima semua syarat & ketentuan</label>
                </div>
                <button type="submit" class="main-btn">Daftar</button>
                <div class="register">
                    <p>Sudah punya akun?<a href="login.php" class="login-link"> Masuk</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

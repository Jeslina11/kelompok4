<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Enkripsi password
    $email = $_POST['email'];

    // Query untuk memasukkan data user baru ke database
    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Registrasi berhasil. <a href='login.php'>Login sekarang</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

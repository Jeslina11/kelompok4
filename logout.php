<?php
session_start();
require 'config.php';
// Menghapus semua session
session_destroy();
// Redirect ke halaman login
header('Location: login.php');
exit;
?>

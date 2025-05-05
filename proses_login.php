<?php
session_start();

// Contoh akun dummy
$valid_username = "admin";
$valid_password = "12345";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == $valid_username && $password == $valid_password) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
    exit();
} else {
    echo "<script>alert('Login gagal! Coba lagi.'); window.location='login.php';</script>";
}
?>

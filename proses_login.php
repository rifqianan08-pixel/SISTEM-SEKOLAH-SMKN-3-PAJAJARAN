<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

// Query user
$query = mysqli_query($koneksi, "
    SELECT * FROM user 
    WHERE username='$username' 
    AND password='$password'
");

$data = mysqli_fetch_assoc($query);

// Cek login
if ($data) {
    $_SESSION['login']    = true;
    $_SESSION['username'] = $data['username'];
    $_SESSION['role']     = $data['role'];

    header("Location: dashboard.php");
    exit;
} else {
    header("Location: index.php?error=1");
    exit;
}

<?php
// kode ini akan di buka ketika jefri sudah melakukan commit di github
/*
session_start();

$penumpang_id = $_SESSION["penumpang_id"];
$nama = $_SESSION["nama"];
$role = $_SESSION["role"];

$notification = $_SESSION['notification'] ?? null;
if ($notification) {
    unset($_SESSION['notification']);
}

if (empty($_SESSION["username"]) || empty($_SESSION["role"])) {
    $_SESSION['notification'] = [
        'type' => 'danger',
        'message' => 'Silahkan login lagi'
    ];
    header('Location: ./auth/login.php');
    exit();
} */
?>
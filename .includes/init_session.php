<?php
session_start();

$nama = $_SESSION["nama"];
$email = $_SESSION["email"];

$notification = $_SESSION['notification'] ?? null;
if ('notification') {
    unset($_SESSION['notification']);
}

?>



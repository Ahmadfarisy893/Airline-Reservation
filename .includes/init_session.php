<?php
session_start();

$nama = $_SESSION["nama"];
$user = $_SESSION["user"];

$notification = $_SESSION['notification'] ?? null;
if ('notification') {
    unset($_SESSION['notification']);
}

?>



<?php
$penumpangId = isset($_SESSION["penumpang_id"]) ? $_SESSION["penumpang_id"] : null;
$nama = isset($_SESSION["nama"]) ? $_SESSION["nama"] : null;

$notification = $_SESSION['notification'] ?? null;
if ($notification) {
    unset($_SESSION['notification']);
}
?>
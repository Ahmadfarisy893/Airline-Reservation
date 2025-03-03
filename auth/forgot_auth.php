<?php
session_start();
require_once("../config.php");

if(isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $password = $_POST['password'];

    $sql = "UPDATE penumpang SET
    password='$password'
    WHERE nama='nama'";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data siswa berhasil ditambahkan!";
        
    header('Location: login.php');
    exit();
    } else {
        $_SESSION['notifikasi'] = "Data siswa gagal ditambahkan!";
    }

}
$conn->close();
?>
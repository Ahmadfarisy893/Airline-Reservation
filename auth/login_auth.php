<?php
session_start();
require_once("../config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    $sql = "SELECT * FROM penumpang WHERE nama='$nama'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($email, $row["email"])) {
            $_SESSION["nama"] = $nama;
            $_SESSION["penumpang_id"] = $row["penumpang_id"];

        }
    
    $_SESSION['notification'] = [
        'type' => 'primary',
        'message' => 'Selamat datang!'
    ];
    header('Location: ../kategori.php');
    exit();
    
    } else {
        $_SESSION['notification'] = [
        'type' => 'danger',
        'message' => 'nama atau emailnya salah'
        ];
    }

    header('Location: login.php');
    exit();
}
$conn->close();
?>
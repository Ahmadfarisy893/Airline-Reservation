<?php
session_start();
require_once("../config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_nama = $_POST['email-nama'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM penumpang WHERE nama = '$email_nama' OR email = '$email_nama'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row["password"])) {
            $_SESSION["nama"] = $row["nama"];
            $_SESSION["penumpang_id"] = $row["penumpang_id"];

        }
    
    $_SESSION['notification'] = [
        'type' => 'primary',
        'message' => 'Selamat datang!'
    ];
    header('Location: ../dashboard.php');
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
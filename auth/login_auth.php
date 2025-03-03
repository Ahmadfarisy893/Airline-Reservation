<?php
session_start();
require_once("../config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM penumpang WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (isset($password, $row["password"])) {
        $_SESSION["penumpang_id"] = $row['penumpang_id'];
        $_SESSION["nama"] = $row["nama"];
        $_SESSION["email"] = $row["email"];
    
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

    } else { 
        $_SESSION['notification'] = [
            'type' => 'danger',
            'message' => 'username atau password salah'
        ];
    }
    header('Location: login.php');
    exit();
}
$conn->close();
?>
<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "airline_reservation";
// membuat koneksi ke databse menggunakan mysql
$conn = mysqli_connect($host, $username, $password, $database);

// cek apkah berhasil terkoneksi
if ($conn->connect_error) {
    // Menampilkan pesan ini jika gagal terkoneksi
    die("Database gagal terkoneksi: " . $conn->connect_error);
    
}
?>
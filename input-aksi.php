<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nisn = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];

    $query = "INSERT INTO tb_data (nis, nama, alamat, telepon) VALUES ('$nisn', '$nama', '$alamat', '$telepon')";
    $result = pg_query($db, $query);

    if ($result) {
        header('location:index.php');
    } else {
        echo "Error: " . pg_last_error();
    }
}
?>
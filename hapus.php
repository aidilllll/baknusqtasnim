<?php
include 'koneksi.php';
$id = $_GET['id'];

    $query = "DELETE FROM tb_data WHERE nis= $id";
    $result = pg_query($db, $query);

    if ($result) {
        header('location:index.php');
    } else {
        echo "Error: " . pg_last_error();
    }
?>

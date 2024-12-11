<?php
include("config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM pegawai WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: list-pegawai.php");
    } else {
        die("Gagal menghapus data: " . mysqli_error($conn));
    }
}
?>

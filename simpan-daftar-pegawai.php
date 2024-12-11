<?php
include("config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jabatan = $_POST['jabatan'];
    $email = $_POST['email'];

    $sql = "INSERT INTO pegawai (nama, jenis_kelamin, jabatan, email) 
            VALUES ('$nama', '$jenis_kelamin', '$jabatan', '$email')";

    if (mysqli_query($conn, $sql)) {
        header("Location: list-pegawai.php");
    } else {
        die("Gagal menyimpan data: " . mysqli_error($conn));
    }
}
?>

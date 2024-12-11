<?php
include("config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jabatan = $_POST['jabatan'];
    $email = $_POST['email'];

    $sql = "UPDATE pegawai SET 
            nama = '$nama', 
            jenis_kelamin = '$jenis_kelamin', 
            jabatan = '$jabatan', 
            email = '$email' 
            WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: list-pegawai.php");
    } else {
        die("Gagal mengupdate data: " . mysqli_error($conn));
    }
}
?>

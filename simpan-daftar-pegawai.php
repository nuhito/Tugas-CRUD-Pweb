<?php
include("config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jabatan = $_POST['jabatan'];
    $email = $_POST['email'];

    $target_dir = "uploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    $foto = $_FILES['foto']['name'];
    $target_file = $target_dir . basename($foto);
    move_uploaded_file($_FILES['foto']['tmp_name'], $target_file);

    $sql = "INSERT INTO pegawai (nama, jenis_kelamin, jabatan, email, foto) 
            VALUES ('$nama', '$jenis_kelamin', '$jabatan', '$email', '$foto')";

    if (mysqli_query($conn, $sql)) {
        header("Location: list-pegawai.php");
    } else {
        die("Gagal menyimpan data: " . mysqli_error($conn));
    }
}
?>


<?php
include("config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jabatan = $_POST['jabatan'];
    $email = $_POST['email'];

    $sql = "SELECT foto FROM pegawai WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    $foto_lama = $data['foto'];

    if (!empty($_FILES['foto']['name'])) {
        $target_dir = "uploads/";
        $foto = $_FILES['foto']['name'];
        $target_file = $target_dir . basename($foto);

        move_uploaded_file($_FILES['foto']['tmp_name'], $target_file);

        if (file_exists("uploads/$foto_lama")) {
            unlink("uploads/$foto_lama");
        }
    } else {
        $foto = $foto_lama;
    }

    $sql = "UPDATE pegawai SET 
            nama = '$nama', 
            jenis_kelamin = '$jenis_kelamin', 
            jabatan = '$jabatan', 
            email = '$email', 
            foto = '$foto' 
            WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: list-pegawai.php");
    } else {
        die("Gagal mengupdate data: " . mysqli_error($conn));
    }
}
?>

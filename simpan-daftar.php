<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];

    $sql = "INSERT INTO siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) 
            VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')";

    if (mysqli_query($conn, $sql)) {
        header("Location: list-siswa.php");
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($conn);
    }
}
?>

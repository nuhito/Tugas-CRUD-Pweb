<?php
include("config.php");

if (!isset($_GET['id'])) {
    header('Location: list-siswa.php');
}

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM siswa WHERE id = $id");
$data = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) < 1) {
    die("Data tidak ditemukan.");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1>Edit Data Siswa</h1>
    <form action="proses-edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?>">
        </div>
        <div class="form-group">
            <label>Alamat:</label>
            <textarea class="form-control" name="alamat"><?= $data['alamat'] ?></textarea>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin:</label><br>
            <input type="radio" name="jenis_kelamin" value="Laki-laki" <?= ($data['jenis_kelamin'] == 'Laki-laki') ? 'checked' : '' ?>> Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan" <?= ($data['jenis_kelamin'] == 'Perempuan') ? 'checked' : '' ?>> Perempuan
        </div>
        <div class="form-group">
            <label>Agama:</label>
            <select class="form-control" name="agama">
                <option <?= ($data['agama'] == 'Islam') ? 'selected' : '' ?>>Islam</option>
                <option <?= ($data['agama'] == 'Kristen') ? 'selected' : '' ?>>Kristen</option>
                <option <?= ($data['agama'] == 'Hindu') ? 'selected' : '' ?>>Hindu</option>
                <option <?= ($data['agama'] == 'Budha') ? 'selected' : '' ?>>Budha</option>
                <option <?= ($data['agama'] == 'Katolik') ? 'selected' : '' ?>>Katolik</option>
                <option <?= ($data['agama'] == 'Konghucu') ? 'selected' : '' ?>>Konghucu</option>
                <option <?= ($data['agama'] == 'Lain') ? 'selected' : '' ?>>Lain</option>
            </select>
        </div>
        <div class="form-group">
            <label>Sekolah Asal:</label>
            <input type="text" class="form-control" name="sekolah_asal" value="<?= $data['sekolah_asal'] ?>">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>

<?php
include("config.php");

if (!isset($_GET['id'])) {
    header('Location: list-pegawai.php');
}

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM pegawai WHERE id = $id");
$data = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) < 1) {
    die("Data tidak ditemukan.");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pegawai</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1 class="text-center">Edit Data Pegawai</h1>
    <form action="proses-edit-pegawai.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?>" required>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin:</label><br>
            <input type="radio" name="jenis_kelamin" value="Laki-laki" <?= ($data['jenis_kelamin'] == 'Laki-laki') ? 'checked' : '' ?>> Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan" <?= ($data['jenis_kelamin'] == 'Perempuan') ? 'checked' : '' ?>> Perempuan
        </div>
        <div class="form-group">
            <label>Jabatan:</label>
            <input type="text" class="form-control" name="jabatan" value="<?= $data['jabatan'] ?>" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" name="email" value="<?= $data['email'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>

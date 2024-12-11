<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Pegawai</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1 class="text-center">Formulir Pendaftaran Pegawai</h1>
    <form action="simpan-daftar-pegawai.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama:</label>
        <input type="text" class="form-control" name="nama" required>
    </div>
    <div class="form-group">
        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan
    </div>
    <div class="form-group">
        <label>Jabatan:</label>
        <input type="text" class="form-control" name="jabatan" required>
    </div>
    <div class="form-group">
        <label>Email:</label>
        <input type="email" class="form-control" name="email" required>
    </div>
    <div class="form-group">
        <label>Foto:</label>
        <input type="file" class="form-control" name="foto" accept="image/*" required>
    </div>
    <button type="submit" class="btn btn-success">Daftar</button>
</form>
</body>
</html>

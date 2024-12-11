<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1 class="text-center">Formulir Pendaftaran Siswa Baru</h1>
    <form action="simpan-daftar.php" method="POST">
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label>Alamat:</label>
            <textarea class="form-control" name="alamat"></textarea>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin:</label><br>
            <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
        </div>
        <div class="form-group">
            <label>Agama:</label>
            <select class="form-control" name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Katolik</option>
                <option>Konghucu</option>
                <option>Lain</option>
            </select>
        </div>
        <div class="form-group">
            <label>Sekolah Asal:</label>
            <input type="text" class="form-control" name="sekolah_asal">
        </div>
        <button type="submit" class="btn btn-success">Daftar</button>
    </form>
</body>
</html>

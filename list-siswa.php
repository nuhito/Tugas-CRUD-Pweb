<?php
include("config.php");
$result = mysqli_query($conn, "SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1 class="text-center">Siswa yang sudah mendaftar</h1>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= $row['jenis_kelamin']; ?></td>
                <td><?= $row['agama']; ?></td>
                <td><?= $row['sekolah_asal']; ?></td>
                <td>
                    <a href="edit-siswa.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="hapus-siswa.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin hapus?');" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>

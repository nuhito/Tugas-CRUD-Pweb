<?php
include("config.php");
$result = mysqli_query($conn, "SELECT * FROM pegawai");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pegawai</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1 class="text-center">Daftar Pegawai</h1>
    
    <div class="d-flex justify-content-end mb-3">
        <a href="cetak-pegawai.php" target="_blank" class="btn btn-primary">Cetak Laporan PDF</a>
    </div>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Jabatan</th>
                <th>Email</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td>
                    <img src="uploads/<?= $row['foto']; ?>" alt="<?= $row['nama']; ?>" style="width: 50px; height: 50px; object-fit: cover;">
                </td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['jenis_kelamin']; ?></td>
                <td><?= $row['jabatan']; ?></td>
                <td><?= $row['email']; ?></td>
                <td>
                    <a href="edit-pegawai.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="hapus-pegawai.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin hapus?');" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>

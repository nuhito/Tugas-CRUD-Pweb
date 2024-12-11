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
        <td><img src="uploads/<?= $row['foto']; ?>" alt="<?= $row['nama']; ?>" style="width: 50px; height: 50px; object-fit: cover;"></td>
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

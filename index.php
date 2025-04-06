<?php
require 'config.php';
$mhs = query("SELECT * FROM config");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <button type="submit"><a href="tambah.php">Tambah Data</a></button>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Universitas</th>
            <th>Program Studi</th>
            <th>Aksi</th>
        </tr>
        <?php $i=1 ?>
        <?php foreach($mhs as $row) :?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $row['Nama']; ?></td>
            <td><?= $row['NIM']; ?></td>
            <td><?= $row['Univ']; ?></td>
            <td><?= $row['Prodi']; ?></td>
            <td><a href="update.php?NIM=<?= $row['NIM']; ?>">Update</a> | <a href="hapus.php?NIM=<?= $row['NIM']; ?>">Hapus</a></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>
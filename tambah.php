<?php 
require "config.php";

if (isset($_POST["submit"])) {
    if (insert($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan');
                document.location.href='index.php';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal ditambahkan');
                document.location.href='index.php';
            </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="" method="post">
        <label for="Nama">Nama</label>
        <input type="text" name="Nama" id="Nama" value="" require required autocomplete="off"><br>
        <label for="Nim">NIM</label>
        <input type="text" name="Nim" id="Nim" value="" require required autocomplete="off"><br>
        <label for="Univ">Universitas</label>
        <input type="text" name="Univ" id="Univ" value="" require required autocomplete="off"><br>
        <label for="Prodi">Program Studi</label>
        <input type="text" name="Prodi" id="Prodi" value="" require required autocomplete="off"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
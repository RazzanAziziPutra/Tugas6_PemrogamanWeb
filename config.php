<?php
$conn = mysqli_connect('localhost:4306', 'root', '', 'Data_Mahasiswa');

if (!$conn) {
    die("Koneksi Anda gagal: " . mysqli_connect_error());
}

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows= [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[]=$row;
    }
    return $rows;
}

function insert($data){
    global $conn;

    if (isset($_POST['submit'])) {
        $Nama=htmlspecialchars($data['Nama']);
        $Nim=htmlspecialchars($data['Nim']);
        $Universitas=htmlspecialchars($data['Univ']);
        $Prodi=htmlspecialchars($data['Prodi']);

        $querry = "INSERT INTO config VALUES ('$Nama', '$Nim', '$Universitas', '$Prodi')"; 
        mysqli_query($conn, $querry);

        return mysqli_affected_rows($conn);
      }
}

function hapus($Nim){
    global $conn;
    mysqli_query($conn, "DELETE FROM config WHERE NIM=$Nim");
    return mysqli_affected_rows($conn);
}

function update($data){
    global $conn;

        $Nama=htmlspecialchars($data['Nama']);
        $Nim=htmlspecialchars($data['Nim']);
        $Universitas=htmlspecialchars($data['Univ']);
        $Prodi=htmlspecialchars($data['Prodi']);

        $querry = "UPDATE config SET 
                        Nama = '$Nama',
                        NIM = '$Nim',
                        Univ = '$Universitas',
                        Prodi = '$Prodi'
                    WHERE NIM = '$Nim'"; 
        mysqli_query($conn, $querry);

        return mysqli_affected_rows($conn);
}

?>
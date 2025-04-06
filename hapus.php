<?php
include 'config.php';

$Nim = $_GET['NIM'];

mysqli_query($conn, "DELETE FROM config WHERE NIM=$Nim") or die(mysqli_error($conn));

header("Location: index.php");
exit();
?>

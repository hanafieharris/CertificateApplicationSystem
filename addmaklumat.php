<?php
session_start();
require_once('connection.php');

$noic = $_POST['noic'];
$nama = $_POST['nama'];
$nopelajar = $_POST['nopelajar'];
$kursus = $_POST['kursus'];
$notel = $_POST['notel'];
$emel = $_POST['emel'];
$alamat = $_POST['alamat'];


$sql = "INSERT INTO pelajar (noic,nama,nopelajar,kursus,notel,emel,alamat) VALUES ('$noic','$nama','$nopelajar', '$kursus' ,  '$notel' ,  '$emel'
, '$alamat' );";
mysqli_query($conn, $sql);
header("location:info2.php");


?>
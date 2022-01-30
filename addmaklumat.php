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
$poskod = $_POST['poskod'];
$daerah = $_POST['daerah'];
$negeri = $_POST['negeri'];


$sql = "UPDATE pelajar SET noic = '$noic', nama = '$nama', nopelajar = '$nopelajar', kursus = '$kursus' , notel = '$notel' , emel = '$emel' , alamat = '$alamat'
,poskod = '$poskod', daerah = '$daerah' , negeri = '$negeri' WHERE noic='$noic'";
mysqli_query($conn, $sql);
$sql1 = "INSERT INTO pelajar (noic,nama,nopelajar,kursus,notel,emel,alamat, poskod,daerah,negeri) VALUES ('$noic','$nama','$nopelajar', '$kursus' ,  '$notel' ,  '$emel'
, '$alamat' , '$poskod' , '$daerah' , '$negeri' );";
mysqli_query($conn, $sql1);

header("location:info2.php");


?>
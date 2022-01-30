<?php
session_start();
require_once('connection.php');

$noic = $_POST['noic'];
$nama = $_POST['nama'];
$kursus = $_POST['kursus'];
$notel = $_POST['notel'];
$jenis_sijil = $_POST['jenis_sijil'];
$jenis_sijil1 = $_POST['jenis_sijil1'];
$jenis_sijil2 = $_POST['jenis_sijil2'];
$jenis_sijil3 = $_POST['jenis_sijil3'];
$tarikh= $_POST['tarikh'];


$sql = "UPDATE permohonan SET noic = '$noic', nama = '$nama', kursus='$kursus' , notel = '$notel' , jenis_sijil = '$jenis_sijil', jenis_sijil1 = '$jenis_sijil1' 
,jenis_sijil2 = '$jenis_sijil2',jenis_sijil3 = '$jenis_sijil3', tarikh = '$tarikh'  WHERE noic = '$noic'";
mysqli_query($conn, $sql);
$sql1 = "INSERT INTO permohonan (noic, nama ,kursus ,notel , jenis_sijil, jenis_sijil1, jenis_sijil2, jenis_sijil3 ,tarikh ) VALUES ('$noic','$nama','$kursus' , '$notel', '$jenis_sijil', '$jenis_sijil1','$jenis_sijil2' 
,'$jenis_sijil3' ,'$tarikh');";
mysqli_query($conn, $sql1);
  

header("location:permohonan.php");


?>
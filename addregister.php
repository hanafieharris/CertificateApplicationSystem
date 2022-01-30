<?php
session_start();
require_once('connection.php');

$noic = $_POST['noic'];
$nama = $_POST['nama'];
$psw = $_POST['psw'];

$sql = "INSERT INTO daftarpelajar (noic,nama,psw) VALUES ('$noic','$nama','$psw');";
mysqli_query($conn, $sql);
header("location:login.php");



?>
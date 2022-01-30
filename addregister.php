<?php
session_start();
require_once('connection.php');

$noic = $_POST['noic'];
$nama = $_POST['nama'];
$psw = $_POST['psw'];

$sql = "INSERT INTO daftarpelajar (noic,psw) VALUES ('$noic','$psw');";
mysqli_query($conn, $sql);
header("location:login.php");

if(isset($_POST) & !empty($_POST)){
	print_r($_POST);
	if(empty($_POST['noic']))
	{ $noicerror[] = "IC NUMBER IS REQUIRED <br>";} 
}


?>
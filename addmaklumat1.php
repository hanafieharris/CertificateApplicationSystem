<?php
include "connection.php";

$idsql = "SELECT noic FROM pelajar";
$idquery = $conn->query($idsql);
$idrow = $idquery->fetch_assoc();


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

$sql = "UPDATE pelajar SET noic = '$noic', nama = '$nama', nopelajar = '$nopelajar', kursus = '$kursus', notel = '$notel', emel = '$emel'
, alamat = '$alamat' , poskod = '$poskod' , daerah = '$daerah' , negeri = '$negeri'  WHERE noic = '$noic'";

if ($conn->query($sql) === TRUE){
	header("refresh: 0.1; url=senaraipengguna.php?id={$idrow['noic']}");
}else{
	echo '
	<script language="javascript">
	alert("ERROR: '. $sql . '<br>'. $conn->error;'");
	</script>
	';
	header("refresh: 0.1; url=kemaskini.php?id={$idrow['noic']}");
}
?>
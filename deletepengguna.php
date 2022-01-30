<?php
include "connection.php";

$noic = $_GET["noic"];

$sql = "DELETE FROM daftarpelajar WHERE noic='$noic'";

if ($conn->query($sql) == TRUE){
	header("refresh: 0.1; url=senaraipengguna.php");
}
else {
	echo '
	<script language="javascript">
	alert("ERROR: '. $sql.' <br> '. $conn->error;'");
	</script>';
	
header("refresh: 0.1; url=senaraipengguna.php");
}


<?php
	$numSolicitud=$_GET['numSolicitud'];

	$con= new mysqli("localhost", "root", "", "sagrario");

	$base='solicitudes';
	$baselocal='solic_local';

	$sql="UPDATE $baselocal SET  status='1' WHERE numSolicitud=$numSolicitud";
	$result=mysqli_query($con, $sql) or die ("no cambio el status");

	$sql="INSERT INTO  $base SELECT * FROM $baselocal WHERE numSolicitud=$numSolicitud";
	$result=mysqli_query($con, $sql) ;


?>
<script type="text/javascript">
	alert("Solicitud restaurada");
	location.href="recuSol.php";
</script>

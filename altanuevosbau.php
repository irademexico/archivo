<?php 
	$regCivil=$_POST['regCivil'];
	$lugarRegCivil=$_POST['lugarRegCivil'];
	$fechaRegCivil=$_POST['fechaRegCivil'];
	$fecNac=$_POST['fecNac'];
	$lugarNac=$_POST['lugarNac'];
	$nombre=$_POST['nombre'];
	$paterno=$_POST['paterno'];
	$materno=$_POST['materno'];
	$hijoa=$_POST['hijoa'];
	$padre=$_POST['padre'];
	$madre=$_POST['madre'];
	$domicilio=$_POST['domicilio'];
	$colonia=$_POST['colonia'];
	$lugarde=$_POST['lugarde'];
	$padrino=$_POST['padrino'];
	$madrina=$_POST['madrina'];
	$clave=$_POST['clave'];
	
	$con=new mysqli("localhost", "root", "", "sagrario");

	$base='nuevosbautismo';

	$sql="UPDATE $base SET registroc='$regCivil', lugregciv='$lugarRegCivil', fecregciv='$fechaRegCivil', fechanac='$fecNac', lugarnac='$lugarNac', nombre='$nombre', paterno='$paterno', materno='$materno', hijoa='$hijoa', padre='$padre', madre='$madre', domicilio='$domicilio', colonia='$colonia', lugarde='$lugarde', padrino='$padrino', madrina='$madrina' WHERE clave='$clave'  ";
	$result=mysqli_query($con, $sql);

	header("Location: http://localhost/archivo/signvosbau.php");
 ?>
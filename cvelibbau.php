<?php
$cve=$_POST['cve'];
$nom=$_POST['nom'];
$pat=$_POST['pat'];
$mat=$_POST['mat'];
$fec=$_POST['fec'];
$hij=$_POST['hij'];
$pad=$_POST['pad'];
$mad=$_POST['mad'];
$fecSac=$_POST['fecSac'];
$con= new mysqli("localhost", "root", "", "sagrario");
		if ($con->connect_errno){
    		echo "conexion erronea";
    		exit();
		}
		
		$base="bautismo";
		$sql="UPDATE  $base SET nombre='$nom', paterno='$pat', materno='$mat', fechanac='$fec', hijoa='$hij', padre='$pad', madre='$mad'  WHERE clave=$cve";
		$result = mysqli_query($con, $sql);


echo $fecSac;
$libro=$_POST['libro'];

$librobis=$_POST['librobis'];
if (empty($librobis)) {
	$librobis="";
}

$foja=$_POST['foja'];

$fojac=$_POST['fojac'];
if (empty($fojac)) {
	$fojac="";
}

$partidan=$_POST['partidan'];
$partidaab=$_POST['partidaab'];

$partidan=$partidan+1;

if (empty($partidaab)) {
	$partidaab="";

}elseif ($partidaab=="A") {
	$partidaab="B";
	$partidan=$partidan-1;
}else{
	$partidaab="A";
	$foja=$foja+1;
}


 ?>
<!DOCTYPE html>
<html >
<head>
	<meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title></title>
    <meta name="description" content="Archivo Sagrario Metropolitano" />
    <meta name="keywords" content="sagrario, metropolitano" />
    <link href="css/normalize.css" rel="stylesheet" type="text/css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="img/favicon.ico" rel="icon" type="image/png" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header >
		SAGRARIO METROPOLITANO<br>
		Sistema Archivo
	
		<form name="form" method="POST" action='busca.php'>
			<input class="submitTop" type="button" name="inicio" onclick="enviab('index.php')" value="Inicio"   >
			<input  class="submitTop"  type="button" name="archivo" onclick="enviab('archivo.php')" value="Archivo"  >
			
			||<input class="entradaMenu"  type="text" name="clave" placeholder="Clave L-F-A">
			<input  class="submitTop"  type="submit" name="busca" onclick="enviab('busca.php')" value="Buscar"  >||
			<input class="submitTop"   type="button" name="solic_local" onclick="enviab('solic_local.php')" value="Solicitudes"  >
			<input class="submitTop"   type="button" name="buscara" onclick="enviab('buscara.php')" value="Busqueda"   >
			<input class="submitTop"   type="button" name="caplibbau" onclick="enviab('cvelibrobau.php')" value="Captura Lib.bautismo"   >
		</form>
	</header>
	<section>
	<form action="caplibbau.php" method="POST">
	<table>
	<tr>
		<input type="hidden" name="fecSacr" value="<? echo $fecSac;?>">
		<td>Libro: </td>
		<td><input class="entrada" type="text" name="libro" maxlength="4" size="4" value="<?php echo $libro;?>"></td>
		<td><input class="entrada" type="text" name="librobis" maxlength="4" size="4" placeholder="L/N/LN" value="<?php echo $librobis;?>"></td>
		<td>Foja: </td>
		<td><input class="entrada" type="text" name="foja" maxlength="5" size="5" value="<?php echo $foja;?>"></td>
		<td>Acta: </td>
		<td><input class="entrada" type='text' name='partidan' maxlength='4' size='4' value="<?php echo $partidan;?>"></td>
		<td><input class="entrada" type='text' name='partidaab' maxlength='1' size='1' placeholder='A/B' value="<?php echo $partidaab?>"></td>
		<td><input type="submit" name="" value="Continuar"></td>
	</tr>

</table>
</form>
</section>
	<footer>
		Derechos Reservados - José Ignacio Virgilio Ruiz Arroyo
	</footer>

	<SCRIPT LANGUAGE="JavaScript">
	function enviab(pag){
		document.form.action= pag
		document.form.submit()
	}
	</script>
</body>
</html>

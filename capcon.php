<?php
$solicitud=$_POST['solicitud'];
$libro=$_POST['libro'];
$librobis=$_POST['librobis'];
$foja=$_POST['foja'];
$fojac=$_POST['fojac'];
$acta=$_POST['acta'];
$reg=$_POST['reg'];
$actaab=$_POST['actaab'];
$clave='c';
if (empty($librobis)) {
	$clave=$clave.trim(substr($libro,0));
}else{
	$clave=$clave.trim(substr($libro,0)).'-'.trim($librobis);
}
if ($foja<>0) {
	$clave=$clave.'-'.trim(substr($foja,0));
}
if (empty($fojac)) {
	$clave=$clave;
}else{
	$clave=$clave.'-'.trim($fojac);
}
if ($reg<>0) {

	$clave=$clave.'-'.trim(substr($reg,0));
}else{
	$clave=$clave.'-'.trim(substr($acta,0));
	if (! empty($actaab)) {
		$clave=$clave.'-'.trim($actaab);
	}
}

 ?>
<!DOCTYPE html>
<html >
<head>
	<meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Archivo</title>
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
	<section><p>CAPTURA DE CONFIRMACION</p></section>
	<?php

		$meses = array('enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');

		$con= new mysqli("localhost", "root", "", "sagrario");
		if ($con->connect_errno){
    		echo "conexion erronea";
    		exit();
		}
		$clave1=substr($clave,0,1);
		$solic='solic_local';
		$base="confirma";
		$sql = "SELECT * FROM $base WHERE clave = '".$clave."'";

		$result = mysqli_query($con, $sql) or die(error_log('no consulto clave'));
		$regs=mysqli_num_rows(mysqli_query($con, $sql));
		$registro=mysqli_fetch_assoc($result);

		$actualizar=1;
		if (empty($registro['libro'])) {
			$actualizar=0;
		}


		$fecsacr=$registro['fechaconf'];

		$diasacr=substr($fecsacr, 8, 2);
		$messacr=substr($fecsacr, 5, 2);
		@ $txmessacr=$meses[$messacr-1];
		$anosacr=substr($fecsacr, 0, 4);
		$fecsacr=$diasacr." de ".$txmessacr." de ".$anosacr;

		$diabau=substr($registro['fechabau'], 8, 2);
		$mesbau=substr($registro['fechabau'], 5, 2);
		@ $txmesbau=$meses[$mesbau-1];
		$anobau=substr($registro['fechabau'], 0, 4);
		if ($diabau==0) {
			$fecbau=substr($registro['xdiacon'], 0, 5)." - ".substr($registro['xmescon'], 0, 10)." - ".substr($registro['xanocon'], 0, 4);
		}else{
			$fecbau=$diabau." de ".$txmesbau." de ".$anobau;
		}


		$dianac=substr($registro['fechanac'], 8, 2);
		$mesnac=substr($registro['fechanac'], 5, 2);
		@ $txmesnac=$meses[$mesnac-1];
		$anonac=substr($registro['fechanac'], 0, 4);
		$fechanac=$dianac." de ".$txmesnac." de ".$anonac;

		$agrega='altacon.php';
	?>

	<form action="capcon.php" method="POST">
	<table>
	<tr>
		<td>Solicitud: </td>
		<td> <?php echo "<input type='number' name='solicitud' maxlength='7' width='5' size='5' value='".$solicitud."' step='.01'>" ?> </td>
		<td>Libro: </td>
		<td><?php echo "<input type='number' name='libro' maxlength='4' size='4' value='".$libro."'>" ?></td>
		<td><?php echo "<input type='text' name='librobis'	maxlength='2' size='2' placeholder='E' value='".$librobis."'>" ?></td>
		<td>Foja:</td>
		<td><?php echo "<input type='number' name='foja' maxlength='4' size='4' value='".$foja."'>" ?></td>
		<td><?php echo "<input type='text' name='fojac' maxlength='3' size='4' placeholder='FTE/VTA' value='".$fojac."'>" ?></td>

		<td>Acta: </td>
		<td><?php echo "<input type='number' name='acta' maxlength='5' size='4' value='".$acta."'></td>" ?>
		<td><?php echo "<input type='text' name='actaab' maxlength='3' size='1' placeholder='A/B' value='".$actaab."'></td>" ?>
		<td><?php echo "<input type='number' name='reg' maxlength='3' size='1' placeholder='reg.' value='".$reg."'></td>" ?>
		<td><input type="submit" name="" value="Continuar"></td>
	</tr>
</table>
</form>
	<form action="altacon.php" method="POST">
		<?php echo "<input type='hidden' name='solicitud' maxlength='7' width='5' size='5' value='".$solicitud."'>"."<input type='hidden' name='libro' maxlength='4' size='4' value='".$libro."'>" ."<input type='hidden' name='librobis'	maxlength='2' size='2' value='".$librobis."'>"."<input type='hidden' name='foja' maxlength='4' size='4' value='".$foja."'>"."<input type='hidden' name='fojac' maxlength='3' size='4' value='".$fojac."'><input type='hidden' name='acta' maxlength='4' size='4' value='".$acta."'><input type='hidden' name='reg' maxlength='4' size='4' value='".$reg."'><input type='hidden' name='actaab' maxlength='1' size='1' value='".$actaab."'><input type='hidden' name='actualizar' maxlength='1' size='1' value='".$actualizar."'>"
		?>

		<table style="background: #ccff66;">
			<tr>
			<td>Fecha de Sacramento:<br></td>
			<td><input type="date" data-date-format="dd/mmmm/aaaa"   name="fecsacr"  size="10" value="<?php echo $registro['fechaconf'];?>"></td>
			<td>Ministro: <br></td>
		 	<td><input type="text" name="ministro" maxlength="70" size="70" value="<?php echo $registro['ministro'];?>"></td>
			<input type='text' name='solicitud' maxlength='7' width='5' size='5' value="<?php echo $solicitud;?>">
			</tr>
		</table>
	<table width="180" border="0">
			<tr>
				<td><input type="text" name="nombre" maxlength="30" size="30" value="<?php echo $registro['nombre'];?>"></td>
				<td><input type="text" name="paterno" maxlength="30" size="30" value="<?php echo $registro['paterno'];?>"></td>
				<td><input type="text" name="materno" maxlength="30" size="30" value="<?php echo $registro['materno'];?>"></td>
			</tr>
		</table>
<table style="background: #ccff66;">
		<tr> <td>Hij:</td>
			<td><input type="text" name="hijoa"  maxlength="1" size="1" placeholder="O/A"  value="<?php echo $registro['hijoa'];?>"></td>
			<td>de: </td>
			<td><input type="text" name="padre" maxlength="30" size="30" value="<?php echo $registro['padre'];?>"></td>
			<td><input type="text" name="madre" maxlength="30" size="30" value="<?php echo $registro['madre'];?>"></td>
		</tr>
		</table>
<table>
	<tr>
		<td>Padrino o Madrina</td>
		<td><input type="text" name="padrino" maxlength="50" size="50" value="<?php echo $registro['padrino'];?>"></td>
	</tr>
</table>
<table style="background: #ccff66;">
	<tr>
		<td>Nacio el:</td>
		<td><input type="date" name="fechanac" size="10" value="<?php echo $registro['fechanac'];?>"></td>
		<td><input type="text" name="lugarnac" placeholder='entidad-colonia...' size="50" value="<?php echo $registro['lugarnac'];?>"></td>
	</tr>
</table>
<table >
	<tr>
		<td>Bautizado el: </td>
		<td><input type="date" name="fechabau" value="<?php echo $registro['fechabau'];?>">
			<br><input type="text" name="xdiacon" size="2" placeholder="xdia" value="<?php echo $registro['xdiacon'];?>">
			<input type="text" name="xmescon" size="10" placeholder="xmes" value="<?php echo $registro['xmescon'];?>">
			<input type="text" name="xanocon" size="2" placeholder="xaño" value="<?php echo $registro['xanocon'];?>"></td>

		<td><input type="text" name="parrbau" maxlength="50" size="50" value="<?php echo $registro['parrbau'];?>"></td>
		<td>de:</td>
		<td><input type="text" name="lugarbau" maxlength="50" size="50" value="<?php echo $registro['lugarbau'];?>"></td>
	</tr>
	<tr>
		<td><input type="text" name="librobau" size="20" placeholder="l.a. de bau" value="<?php echo $registro['librobau'];?>"></td>
	</tr>
</table>
<?php

		echo "<input type='hidden' name='clave' value='".$clave."' visible='hidden'>";
?>

	<input type='submit' name='' value='Continuar'>
</form>

	<SCRIPT LANGUAGE="JavaScript">
	function enviab(pag){
		document.form.action= pag
		document.form.submit()
	}
	</script>
  <footer>
    Derechos Reservados - José Ignacio Virgilio Ruiz Arroyo
  </footer>

</body>
</html>

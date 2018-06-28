<?php
$libro=$_POST['libro'];
$librobis=$_POST['librobis'];
$foja=$_POST['foja'];
$fojac=$_POST['fojac'];
$partidan=$_POST['partidan'];
$partidaab=$_POST['partidaab'];
$clave=$_POST['clave'];
$fecsacr=$_POST['fecsacr'];

$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];

$hijoa=$_POST['hijoa'];
$padre=$_POST['padre'];
$madre=$_POST['madre'];


$fechanac=$_POST['fechanac'];

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
	<section>
	<?php
		$meses = array('enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');

		$con= new mysqli("localhost", "root", "", "sagrario");

		if ($con->connect_errno){
    		echo "conexion erronea";
    		exit();
		}
		$clave1=substr($clave,0,1);
		$solic='solic_local';
		$base="bautismo";

		$sql = "INSERT INTO bautismo (clave, libro, librobis, foja, fojac, partidan, partidaab, fechasacr, nombre, paterno, materno, hijoa, padre, madre, fechanac) VALUES ('".$clave."', '".$libro."', '".$librobis."', '".$foja."', '".$fojac."', '".$partidan."', '".$partidaab."', '".$fecsacr."','".$nombre."', '".$paterno."', '".$materno."', '".$hijoa."', '".$padre."', '".$madre."',  '".$fechanac."')";
		$agrega = mysqli_query($con, $sql);


		$sql = "SELECT * FROM $base WHERE clave = '".$clave."'";
		$result = mysqli_query($con, $sql) or die(error_log('no encontro registro agregado'));
		$regs=mysqli_num_rows(mysqli_query($con, $sql));
		$registro=mysqli_fetch_assoc($result);


		$fecsacr=$registro['fechasacr'];

		$diasacr=substr($fecsacr, 8, 2);
		$messacr=substr($fecsacr, 5, 2);
		@ $txmessacr=$meses[$messacr-1];
		$anosacr=substr($fecsacr, 0, 4);
		$txfecsacr=$diasacr." de ".$txmessacr." de ".$anosacr;

		$diabau=substr($registro['fechasacr'], 8, 2);
		$mesbau=substr($registro['fechasacr'], 5, 2);
		@ $txmesbau=$meses[$mesbau-1];
		$anobau=substr($registro['fechasacr'], 0, 4);
		$fecbau=$diabau." de ".$txmesbau." de ".$anobau;

		$fechanac=$registro['fechanac'];
		$dianac=substr($registro['fechanac'], 8, 2);
		$mesnac=substr($registro['fechanac'], 5, 2);
		@ $txmesnac=$meses[$mesnac-1];
		$anonac=substr($registro['fechanac'], 0, 4);
		$txfechanac=$dianac." de ".$txmesnac." de ".$anonac;

	?>

	<form action="cvelibbau.php" method="POST">
	<table style='font-size:1.5em;'>
	<tr>

		<td width="225">Libro: <?php echo $libro."  ".$librobis; ?></td>

		<td width="225">Foja: <?php echo $foja; ?></td>
		<td width="125">Acta: <?php echo $partidan."</td><td>  ".$partidaab; ?></td>

	</tr>
	</table>
		<?php echo "<input type='hidden' name='cve' value='".$clave."'>" ."<input type='hidden' name='libro' maxlength='4' size='4' value='".$libro."'>" ."<input type='hidden' name='librobis'	maxlength='2' size='2' value='".$librobis."'>"."<input type='hidden' name='foja' maxlength='4' size='4' value='".$foja."'>"."<input type='hidden' name='fojac' maxlength='3' size='4' value='".$fojac."'><input type='hidden' name='partidan' maxlength='4' size='4' value='".$partidan."'><input type='hidden' name='partidaab' maxlength='1' size='1' value='".$partidaab."'>"
		?>


		<table style="background: #ccff66;">

		</table>
	<table width="180" border="0">
			<tr>
				<td>Nombre:</td>
				<td><?php echo "<input type='text' name='nom' maxlength='30' size='30' value='".$registro['nombre']."' >" ?></td>

				<td><?php echo "<input type='text' name='pat' maxlength='30' size='30' value='".$registro['paterno']."' >" ?></td>
				<td><?php echo "<input type='text' name='mat' maxlength='30' size='30' value='".$registro['materno']."' >" ?></td>
			</tr>
			<tr>
				<td>Nacio el:</td>
				<td><?php echo "<input type='date' name='fec' size='10' value='".$fechanac."'>";?></td>
			</tr>
		</table>
<table style="background: #ccff66;">
		<tr> <td>Hij:</td>
			<td><?php echo "<input type='text' name='hij'  maxlength='2' size='2' placeholder='O/A' value='".$registro['hijoa']."' >" ?></td>
			<td> de: <?php echo "<input type='text' name='pad' maxlength='50' size='40' value='".$registro['padre']."' >" ?></td>
			<td> y <?php echo "<input type='text' name='mad' maxlength='50' size='40' value='".$registro['madre']."' >" ?></td>
		</tr>
		</table>
<table style="background: #ccff66;">

		<tr>
			<td>Fecha de Sacramento:</td>
			<td><?php echo "<input type='date' data-date-format='dd/mmmm/aaaa' name='fecSac' size='10' value='".$fecsacr."'"?></td>

		</tr>
</table>
<table><tr>



		<input type='submit' name='' value='Siguiente'>
	</form>
</section>
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

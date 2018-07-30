<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Solicitudes</title>

    <meta name="description" content="Archivo Sagrario Metropolitano" />
    <meta name="keywords" content="sagrario, metropolitano" />

    <link href="css/normalize.css" rel="stylesheet" type="text/css" />
	<script src="http://code.jquery.com/jquery-latest.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <link href="img/favicon.ico" rel="icon" type="image/png" />

    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>


	<header >
		SAGRARIO METROPOLITANO<br>
		Sistema Archivo

		<form class="formTop" name="form" method="POST" action=''>
			<input class="submitTop" type="submit" name="busca" onclick="enviab('buscasol.php')" value="Corregir"  >
			<input  class="submitTop" type="submit" name="newsol" onclick="enviab('cap_solicitudes.php')" value="Nueva Solicitud" >
			<input  class="submitTop" type="submit" name="sube" onclick="enviab('envia.php')" value="Envia a USB"  >
			<input  class="submitTop" type="submit" name="feccon" onclick="enviab('fechascon.php')" value="Fechas de Confirmacion" >
			<input  class="submitTop" type="submit" name="feccon" onclick="enviab('recuSol.php')" value="Recupera Solicitudes" >
		</form>
	</header>

	<article class="titulo">Recupera solicitudes para enviar por usb</article>


<?php
date_default_timezone_set('America/Mexico_City');
$hoy=Date('Y-m-d');
$fecRecupera=mktime(0,0,0, date("m"), date("d")-43, date("Y"));
$fecRecupera=date("Y-m-d",$fecRecupera);

//exit();

$con= new mysqli("localhost", "root", "", "sagrario");
if ($con->connect_errno){
    echo "conexion erronea";
    exit();
}

$baselocal= "solic_local";

$sql= "SELECT * FROM $baselocal WHERE fecaSolicitud  between '".$fecRecupera."' AND '".$hoy."' ORDER BY numSolicitud DESC";
//$sql="SELECT * FROM `solic_local` WHERE `fecaSolicitud` BETWEEN '2018-05-28' AND '2018-07-17' ";
$result= $con->query($sql);
//$solic=$result->fetch_assoc();
//$solicitud= $solic['numSolicitud'];
//exit();
echo "<table border = '1'> \n";
while ($consulta= mysqli_fetch_array($result))
{
    $anofn="";
    $mesfn="";
    $diafn="";
    echo "<tr style='background:#aaa;'><td width='5%'>Solicitud</td><td width='20%'>Nombre</td><td width='20%'> Padres </td><td width='20%'>Padrinos</td><td width='10%'>Fec.Nacimiento</td><td width='5%'>Solicitud de</td><td width='5%'>Fecha Solic.</td><td>Recupera</td> </tr>\n";
    if ($consulta['solicitud']== 1) {
        $solic = "Bautismo";
        $baseBusca= "bautismo";
        $fechabau=$consulta['fecNac'];
        $anofn=substr($consulta['fecNac'],0,4);
        $mesfn=substr($consulta['fecNac'],5,2);
        $diafn=substr($consulta['fecNac'],8,2);

    }elseif ($consulta['solicitud']== 2) {
        $solic = "Confirmación";
        $baseBusca="confirma";
    }else{
        $solic = "Matrimonio";
        $baseBusca="matrimonios";
    }
    $fecsol=$consulta['fecaSolicitud'];
   echo "<tr ><td>".$consulta['numSolicitud']."</td> <td>".$consulta['nombre']." ".$consulta['apPaterno']." ".$consulta['apMaterno']." ".$consulta['esposo']." - ".$consulta['esposa'].    "</td><td>".$consulta['padre']." - ".$consulta['madre']."</td> <td>".$consulta['padrino']." - ".$consulta['madrina']."</td> <td>".$diafn."/".$mesfn."/".$anofn."</td> <td>".$solic."</td><td>".$fecsol."</td><td width='5%'><a href='restaurasolic.php?numSolicitud=".$consulta['numSolicitud']."'><button>Recupera</button></a></td>
     </tr> \n";


}

echo "</table>";





//$result->free();
$con->close();

 ?>

<p>.</p>
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

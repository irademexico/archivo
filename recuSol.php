<?php
date_default_timezone_set('America/Mexico_City');
echo $hoy=Date('Y-m-d');
$fecRecupera=mktime(0,0,0, date("m"), date("d")-43, date("Y"));
echo $fecRecupera=date("Y-m-d",$fecRecupera);

//exit();

$con= new mysqli("localhost", "root", "", "sagrario");
if ($con->connect_errno){
    echo "conexion erronea";
    exit();
}

$baselocal= "solic_local";

$sql= "SELECT * FROM $baselocal WHERE fecaSolicitud  between '".$fecRecupera."' AND '".$hoy."'";
//$sql="SELECT * FROM `solic_local` WHERE `fecaSolicitud` BETWEEN '2018-05-28' AND '2018-07-17' ";
$result= $con->query($sql);
$solic=$result->fetch_assoc();
echo $solicitud= $solic['numSolicitud'];
//exit();

while ($consulta= mysqli_fetch_array($result))
{
  echo "<table border = '1'> \n";
    echo "<tr><td>SOLICITUD</td><td>Nombre</td><td> Padres </td><td>Padrinos</td><td>Fec.Nacimiento</td><td>Solicitud de</td><td>Recupera</td> </tr>\n";
    if ($consulta['solicitud']== 1) {
        $solic = "Bautismo";
        $baseBusca= "bautismo";
    }elseif ($consulta['solicitud']== 2) {
        $solic = "Confirmación";
        $baseBusca="confirma";
    }else{
        $solic = "Matrimonio";
        $baseBusca="matrimonios";
    }
    $fechabau=$consulta['fecNac'];
    $anofn=substr($consulta['fecNac'],0,4);
    $mesfn=substr($consulta['fecNac'],5,2);
    $diafn=substr($consulta['fecNac'],8,2);
   echo "<tr ><td>".$consulta['numSolicitud']."</td> <td>".$consulta['nombre']." ".$consulta['apPaterno']." ".$consulta['apMaterno']." ".$consulta['esposo']." - ".$consulta['esposa'].    "</td><td>".$consulta['padre']." - ".$consulta['madre']."</td> <td>".$consulta['padrino']." - ".$consulta['madrina']."</td> <td>".$diafn."/".$mesfn."/".$anofn."</td> <td>".$solic."</td><td><a href='restaurasolic.php?numSolicitud=".$consulta['numSolicitud']."'><button>Recupera</button></a></td>
     </tr> \n";


}

echo "</table>";





//$result->free();
$con->close();



 ?>

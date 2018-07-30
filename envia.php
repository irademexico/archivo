<?php
    //Proyect:  Archivo Sagrario Metropolitano
    //Author:   José Ignacio Virgilio Ruiz Arroyo
    //Año:      2018
    //
    //envia.php
    /*  - llamado por el menu de ventanilla, programas del sistema: .
        - envia una copia de la tabla solicitudes temporales a un pendrive.
        - copia las solicitudes a la base de solicitudes local.
        - borra las solicitudes de la tabla solicitudes temporales.
        -- esto debera cambiar si se usa un servidor, las solicitudes se consultaran de la base local por el status de las mismas y desde el archivo podran recuperarse--
        - si esta vacia la tabla solicitudes no la copia al pendrive.
    */
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Solicitudes</title>

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="img/favicon.ico" rel="icon" type="image/png" />

    <!-- Siempre fuerce el último motor de renderización de IE o solicite Chrome Frame -->
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="Archivo Sagrario Metropolitano" />
    <meta name="keywords" content="sagrario, metropolitano" />

    <link href="css/normalize.css" rel="stylesheet" type="text/css" />

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
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

    <article class="titulo">Solicitudes Enviadas a USB</article>

    <section>
        <?php

        $con= new mysqli("localhost", "root", "", "sagrario");
        if ($con->connect_errno){
            echo "conexion erronea";
            exit(); //detiene el sistema si no se establece la conexion al servidor;
        }

        $base = "solicitudes";
        $sql="SELECT * FROM $base";
        $result = mysqli_query($con, $sql);
        $filas=mysqli_num_rows($result);
        //$consulta= mysqli_fetch_array($result);
        echo $filas." Solicitudes";

        if ($filas>0)
        {
            // encabezados de la tabla que muestra las solicitudes que se enviaran;
            echo "<table border = '1'> \n";
            echo "<tr><td>Num.Solicitud</td><td>Solicitud de</td><td> Nombre </td><td>Fec.Sacr.</td><td>Padres</td><td>Padrinos </td> </tr>\n";

            while ($consulta= mysqli_fetch_array($result))
            {
                switch ($consulta['solicitud']) {
                    case '1':
                        $txSolicitud = "Bautismo";
                        break;
                    case '2':
                        $txSolicitud = "Confirmación";
                        break;
                    case '3':
                        $txSolicitud = "Matrimonio";
                        break;

                    default:
                        $txSolicitud = "";
                        break;
                }
                // impresion del registro enviado
                echo "<tr><td>".$consulta['numSolicitud']."</td><td>".$txSolicitud."</td>
                    <td>".$consulta['nombre']." ".$consulta['apPaterno']." ".$consulta['apMaterno']." ".$consulta['esposo']."-".$consulta['esposa']."</td>
                    <td>".$consulta['fecSacr']."</td>
                    <td>".$consulta['padre']." y ".$consulta['madre']."</td>
                    <td>".$consulta['padrino']." - ".$consulta['madrina']."</td> </tr> \n";
            }

            exec("envia.bat");

            // agrega solicitudes de la tabla solicitudes temp a locales
            $base='solic_local';
            $sql="INSERT INTO $base SELECT * FROM solicitudes";
            $result=mysqli_query($con, $sql);
            // ELIMINA LAS SOLICITUDES DE LA BASE TEMPORAL
            $sql="truncate TABLE solicitudes";
            $result=mysqli_query($con, $sql);
        }

        ?>
    </section>
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

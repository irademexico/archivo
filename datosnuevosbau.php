<?php 
	$fechabau=date($_GET['fechabau']);
	$ministro=$_GET['ministro'];
 ?>

<!DOCTYPE html>
<html >
<head>
	<meta charset="u
	tf-8">
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
	
	<date-util format="dd/MM/yyyy"></date-util>

	<header style="font-size: 1em; height: 35px;">
		SAGRARIO METROPOLITANO
		Sistema Archivo
	
	<section style="font-size: 1em">
		<form name="form" method="POST" action=''>
			<input  type="submit" name="nuevo" onclick="enviab('cvenuevosbau.php')" value="Nueva Tanda"  style="background-color: #a4d279; width: 10%; height: 30px; color: #1c541d; font-size: .8em;  border-style: groove; border-radius: 10px 10px 10px 10px" >
			<input  type="submit" name="siguiente" onclick="enviab('signvosbau.php')" value="Sig. Acta"  style="background-color: #a4d279; width: 10%; height: 30px; color: #1c541d; font-size: .8em;  border-style: groove; border-radius: 10px 10px 10px 10px" >
			
			<input type="text" name="clave">
			<input  type="submit" name="busca" onclick="enviab('busca.php')" value="Busca"  style="background-color: #a4d279; width: 10%; height: 30px; color: #1c541d; font-size: .8em;  border-style: groove; border-radius: 10px 10px 10px 10px" >
			<input  type="submit" name="imprime" onclick="enviab('print.php')" value="Imprimir"  style="background-color: #a4d279; width: 10%; height: 30px; color: #1c541d; font-size: .8em;  border-style: groove; border-radius: 10px 10px 10px 10px" >
			<input  type="submit" name="baja" onclick="enviab('baja.php')" value="Envia a USB"  style="background-color: #a4d279; width: auto; height: 30px; color: #1c541d; font-size: .8em;  border-style: groove; border-radius: 10px 10px 10px 10px" >
		</form>
	</section>
</header>



<?php



//

?>


<form action="altanuevosbau.php" method="POST">
	<article style="text-align: left;">
		Fecha de bautismo: <input class="entrada" type="date" name="fechabau" value="<?php echo $fechabau; ?>"> Ministro:<input class="entradatx" type="text" name="ministro" value="<?php echo $ministro;?>" size="75">
	</article>
	<article style="text-align: left;">
		Registro Civil: <input class="entradatx" type="text" name="regCivil" maxlength="35" size="35">
		Entidad: <input class="entradatx" type="text" name="lugarRegCivil" maxlength="50" size="50">
		Fecha de Reg.: <input class="entrada" type="date" name="fechaRegCivil"  size="30">
	</article>
	<article style="text-align: left;">
		Fecha Nacimiento: <input class="entrada" type="date" name="fecNac" size="10">
		Lugar: <input class="entradatx" type="text" name="lugarNac" size="75">
	</article>
	<article style="text-align: left;">
		Nombre: <input class="entradatx" type="text" name="nombre" maxlength="50" size="50"><p>
		Apellido Paterno:<input class="entradatx" type="text" name="paterno" maxlength="50" size="50"><p>
		Apellido Materno:<input class="entradatx" type="text" name="materno" maxlength="50" size="50">	
	</article>
	<article style="text-align: left;">
		Hij:<input class="entradatx" type="text" name="hijoa"  maxlength="1" size="1" placeholder="O/A"> 
		Padre: <input class="entradatx" type="text" name="padre" maxlength="50" size="50">
		Madre: <input class="entradatx" type="text" name="madre" maxlength="50" size="50">
	</article>
	<article style="text-align: left;">
		Domicilio: <input class="entradatx" type="text" name="domicilio" placeholder="calle" size="75"></input><p>
		Colonia: <input class="entradatx" type="text" name="colonia" maxlength="30" size="30">   
		Entidad: <input class="entradatx" type="text" name="lugarde" maxlength="35" size="30">
	</article>
	<article style="text-align: left;">
		Padrinos: <input class="entradatx" type="text" name="padrino" maxlength="50" size="50">
		 y <input class="entradatx" type="text" name="madrina" maxlength="50" size="50">
	</article>
	<article style="text-align: left; text-align: center;">
		<input type="submit" value="Continuar">
	</article>

</form>
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

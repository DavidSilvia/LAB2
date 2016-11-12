<html>
<table>	
	<head> <title> Créditos </title>
	</head>
	<link rel="STYLESHEET" type="text/css" href="Estilos.css">
	<body style="text-align:center;font-size:100%">
		<div>
		<p class="titulo">CRÉDITOS</p>
		</div>
		<span>Nombres: Silvia García García, David Montllor Moreno</span><br/>
		<br/>
		<img src="DS.jpg" width="360" height="273"/>
		<br/>
		<br>
		<?php
		session_start();
		if(!isset($_SESSION['correo'])){
			echo "<a href = 'layout.html' style='font-size:150%'>Inicio</a><br/><br/>";
		}
		else{
			echo "<a href = 'layoutin.php' style='font-size:150%'>Inicio</a><br/><br/>";
		}
		?>
		<form method="POST" action="creditos.php">
			<input type="submit" name="submit" value="Encontrar servidor" style="font-size:20px" class="boton"/><br/><br/>
		</form>
		<?php
		if(isset($_POST['submit'])){
			require_once('../ProyectoSW-master/lib/nusoap.php');
			require_once('../ProyectoSW-master/lib/class.wsdlcache.php');

			$wsdl = "http://v1.fraudlabs.com/ip2locationwebservice.asmx?wsdl";

			$client = new nusoap_client($wsdl, 'wsdl');
			$parms = array(array("IP" => "188.86.33.85","LICENSE" => "02-79UI-0XK2"));

			$result = $client->call('IP2Location', $parms);

			echo "País = " . $result["COUNTRYNAME"] . "<br>";
			echo "Región = " . $result["REGION"] . "<br>";
			echo "Ciudad = " . $result["CITY"] . "<br>";
		}
		?>
	</body>
	</html>	

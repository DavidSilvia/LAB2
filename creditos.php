<html>
<table>	
<head> <title> Cr�ditos </title>
</head>
<link rel="STYLESHEET" type="text/css"
href="busy-city/bc-stylesheet.css">
<body style="text-align:center;font-size:100%">
<div style="font-size:300%">
<p>CR�DITOS</p>
</div>
<span>Nombres: Silvia Garc�a Garc�a, David Montllor Moreno</span><br/>
<br/>
<img src="DS.jpg" width="360" height="273"/><br/>
<a href = "layout.html" style="font-size:150%">Inicio</a><br/><br/>
<form method="POST" action="creditos.php">
<input type="submit" name="submit" value="Encontrar servidor" style="font-size:20px"/><br/><br/>
</form>
<?php
if(isset($_POST['submit'])){
	require_once('../ProyectoSW-master/lib/nusoap.php');
	require_once('../ProyectoSW-master/lib/class.wsdlcache.php');

	$wsdl = "http://v1.fraudlabs.com/ip2locationwebservice.asmx?wsdl";

	$client = new nusoap_client($wsdl, 'wsdl');
	$parms = array(array("IP" => "188.86.33.85","LICENSE" => "02-79UI-0XK2"));
	
	$result = $client->call('IP2Location', $parms);
	
	echo "Pa�s = " . $result["COUNTRYNAME"] . "<br>";
	echo "Regi�n = " . $result["REGION"] . "<br>";
	echo "Ciudad = " . $result["CITY"] . "<br>";
}
?>
</body>
</html>	
		
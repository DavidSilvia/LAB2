<html>
<head>
<link rel="STYLESHEET" type="text/css" href="busy-city/bc-stylesheet.css">
</head>
<?php
if(isset($_GET['correo'])){
	
$link = mysqli_connect("localhost","root","","quiz") or die(mysql_error());

$email = $_GET['correo'];
$numident = mysqli_query($link, "select count(*) from pregunta where email='$email'");
$numident = mysqli_fetch_row($numident);
$numident = $numident[0];

$num = mysqli_query($link, "select count(*) from pregunta");
$num = mysqli_fetch_row($num);
$num = $num[0];

 echo "<big><big>Mis preguntas / Todas las preguntas : $numident / $num</big></big>";
 
 mysqli_close($link);
}
?>
</html>
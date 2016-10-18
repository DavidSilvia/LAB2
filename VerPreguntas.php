<html>
<head><title>Preguntas</title> 
<link rel="STYLESHEET" type="text/css"
href="busy-city/bc-stylesheet.css">
</head>
<body>
<form action="VerPreguntas.php?correo=<?php echo $_GET['correo']?>" method="get">
<p> <input type="hidden" name="correo" value="<?php echo $_GET['correo']?>"/>
</form>
<?php
$link = mysqli_connect("mysql.hostinger.es","u216560962_dmsg","davidsilvia","u216560962_quiz");
$preguntas = mysqli_query($link, "select * from pregunta");
echo '<table border=1> <tr><th>Número</th><th>Email</th><th>Pregunta</th><th>Respuesta</th><th>Complejidad</th></tr>';
while($row=mysqli_fetch_array($preguntas)){
	echo '<tr><td>'.$row['numero'].'</td><td>'.$row['email'].'</td><td width="180" height="100">'.$row['pregunta'].'</td><td width="180" height="100">'.$row['respuesta'].'</td><td>'.$row['complejidad'].'</td>';
}
echo '</table>';
$preguntas->close();

$email=$_GET['correo'];

$tipo = "Ver preguntas";

date_default_timezone_set('Europe/Madrid');
$hora= date('Y-m-d H:i');

$ip= $_SERVER["REMOTE_ADDR"];

if(isset($email)){
	$numident = mysqli_query($link, "select max(id) from conexion where email='$email'");
	$numident = mysqli_fetch_row($numident);
	$numident = $numident[0];
	
	$sql = "INSERT INTO acciones(idconexion, email, tipo, hora, ip) VALUES ($numident,'$email', '$tipo','$hora', '$ip')";
	
	if(!mysqli_query($link, $sql)){
		die("Error:".mysqli_error($link));
	}
	
}else{
	$sql = "INSERT INTO acciones(tipo, hora, ip) VALUES ('$tipo','$hora', '$ip')";
	if(!mysqli_query($link, $sql)){
		die("Error:".mysqli_error($link));
	}
}

mysqli_close($link);
?>
</body>
</html>
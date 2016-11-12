<html>
<head>
	<title>Preguntas</title> 
	<link rel="STYLESHEET" type="text/css" href="Estilos.css"/>
	<meta charset="utf-8"/>
</head>
<body>
	<div class="titulo">
		Preguntas
	</div>
	<br>
	<?php
	session_start();
	$link = mysqli_connect("localhost","root","","quiz");
	$preguntas = mysqli_query($link, "select * from pregunta");
	echo '<table border=1 align="center"> <tr><th>N&uacutemero</th><th>Email</th><th>Pregunta</th><th>Respuesta</th><th>Complejidad</th><th>Tema</th></tr>';
	while($row=mysqli_fetch_array($preguntas)){
		echo '<tr><td>'.$row['numero'].'</td><td>'.$row['email'].'</td><td width="180" height="100">'.$row['pregunta'].'</td><td width="180" height="100">'.$row['respuesta'].'</td><td>'.$row['complejidad'].'</td><td>'.$row['tema'].'</td>';
	}
	echo '</table>';
	$preguntas->close();

	$tipo = "Ver preguntas";

	date_default_timezone_set('Europe/Madrid');
	$hora= date('Y-m-d H:i');

	$ip= $_SERVER["REMOTE_ADDR"];

	if(isset($email)){
		$email= $_SESSION['correo'];

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
	<br>
	<a href="layout.html" style="font-size: 25px">Inicio</a>
</body>
</html>
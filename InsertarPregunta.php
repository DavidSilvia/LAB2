<html>
<head><title>Insertar preguntas</title> 
<link rel="STYLESHEET" type="text/css"
href="busy-city/bc-stylesheet.css">
</head>
<body>
<form action="InsertarPregunta.php?correo=<?php echo $_GET['correo']?>" method="get">
<h2>Añadir una pregunta </h2>
<p> <b>Pregunta (*):</b> <input type="text" id="pregunta" name="pregunta" />
<p> <b>Respuesta (*):</b> <input type="text" id="respuesta" name="respuesta" />
<p> <b>Complejidad :</b> <input type="number" id="complejidad" name="complejidad" min="1" max="5"/>
<p> <input type="hidden" name="correo" value="<?php echo $_GET['correo']?>"/>
<p> <input id="anadir" type="submit" onclick="anadirCorreo()"/>
</form>
<?php


if(isset($_GET['pregunta'])){
	
	$link = mysqli_connect("mysql.hostinger.es","u216560962_dmsg","davidsilvia","u216560962_quiz") or die(mysql_error());
	$email=$_GET['correo'];
	$pregunta = $_GET['pregunta'];
	$respuesta = $_GET['respuesta'];
	$complejidad = $_GET['complejidad'];
	
	if(empty($pregunta) || empty($respuesta)){
		die("Error: Introduzca los datos obligatorios (*)");
	}
	
	$sql = "INSERT INTO pregunta(email, pregunta, respuesta, complejidad) VALUES ('$email','$pregunta','$respuesta', '$complejidad')";
	if(!mysqli_query($link, $sql)){
		die("Error:".mysqli_error($link));
	}
	$numident = mysqli_query($link, "select max(id) from conexion where email='$email'");
	$numident = mysqli_fetch_row($numident);
	$numident = $numident[0];
	
	$tipo = "Insertar pregunta";
	
	date_default_timezone_set('Europe/Madrid');
	$hora= date('Y-m-d H:i');
	
	$ip= $_SERVER["REMOTE_ADDR"];
	$sql = "INSERT INTO acciones(idconexion,email,tipo, hora, ip) VALUES ($numident,'$email','$tipo','$hora','$ip')";
	if(!mysqli_query($link, $sql)){
		die("Error:".mysqli_error($link));
	}
	
	echo '<big><i>Ha añadido la pregunta correctamente</i></big>';
	echo '<p> <a href= "layoutin.php?correo='.$email.'"> Volver </a>';
	
	mysqli_close($link);
}
?>
</body>
</html>
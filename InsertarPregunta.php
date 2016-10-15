<html>
<head><title>Insertar preguntas</title> 
<link rel="STYLESHEET" type="text/css"
href="busy-city/bc-stylesheet.css">
</head>
<body>
<form action="InsertarPregunta.php" method="post">
<h2>Añadir una pregunta </h2>
<p> <b>Email (*):</b> <input type="text" id="email" name="email" />
<p> <b>Pregunta (*):</b> <input type="text" id="pregunta" name="pregunta" />
<p> <b>Respuesta (*):</b> <input type="text" id="respuesta" name="respuesta" />
<p> <b>Complejidad :</b> <input type="number" id="complejidad" name="complejidad" min="1" max="5"/>
<p> <input id="anadir" type="submit" />
</form>
<?php
if(isset($_POST['email'])){
	
	$link = mysqli_connect("mysql.hostinger.es","u216560962_dmsg","davidsilvia","u216560962_quiz") or die(mysql_error());
	
	$email = $_POST['email'];
	$pregunta = $_POST['pregunta'];
	$respuesta = $_POST['respuesta'];
	$complejidad = $_POST['complejidad'];
	
	if(empty($email) || empty($pregunta) || empty($respuesta)){
		die("Error: Introduzca los datos obligatorios (*)");
	}
	
	$sql = "INSERT INTO pregunta(email, pregunta, respuesta, complejidad) VALUES ('$email','$pregunta',
		'$respuesta', '$complejidad')";
	if(!mysqli_query($link, $sql)){
		die("Error:".mysqli_error($link));
	}
	
	echo '<big><i>Ha añadido la pregunta correctamente</i></big>';
	echo '<p> <a href= "layoutin.html"> Volver </a>';
	
	mysqli_close($link);
}
?>
</body>
</html>
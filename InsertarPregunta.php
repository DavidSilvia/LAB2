<?php

if(isset($_GET['pregunta'])){
	
	$link = mysqli_connect("mysql.hostinger.es","u216560962_dmsg","davidsilvia","u216560962_quiz") or die(mysql_error());
	$email=$_GET['correo'];
	$pregunta = $_GET['pregunta'];
	$respuesta = $_GET['respuesta'];
	$complejidad = $_GET['complejidad'];
	$tema = $_GET['tema'];
	
	if(empty($pregunta) || empty($respuesta)){
		die("Error: Introduzca los datos obligatorios (*)");
	}
	
	$sql = "INSERT INTO pregunta(email, pregunta, respuesta, complejidad, tema) VALUES ('$email','$pregunta','$respuesta', '$complejidad', '$tema')";
	if(!mysqli_query($link, $sql)){
		die("Error:".mysqli_error($link));
	}
	
	$xml = simplexml_load_file('preguntas.xml');
	$preguntaxml = $xml->addChild('assessmentItem');
	$p = $preguntaxml->addChild('itemBody');
	$p->addChild('p', $pregunta);
	$respuestaxml = $preguntaxml->addChild('correctResponse');
	$respuestaxml->addChild('value', $respuesta);
	$preguntaxml->addAttribute('complexity', $complejidad);
	$preguntaxml->addAttribute('subject', $tema);
	
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
	
	$exito = $xml->asXML('preguntas.xml');
	if(!$exito){
		echo '<big>Error: La pregunta no se ha añadido al archivo XML</big>';
	}else{
		echo '<p> <a href= "VerPreguntasXML.php"> Ver XML</a>';
	}
	
	mysqli_close($link);
}
?>
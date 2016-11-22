<html>
<head>
	<title>Revisar Preguntas</title> 
	<link rel="STYLESHEET" type="text/css"
	href="Estilos.css">
	<meta charset="utf-8">
	<script>
		setInterval(mostrarPreguntas, 5000);
		function mostrarPreguntas(){

			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			}else{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function(){
				if(xmlhttp.readyState==4 && xmlhttp.status==200){
					document.getElementById("preguntas").innerHTML=xmlhttp.responseText;
				}
			}	
			xmlhttp.open("GET", "Preguntas.php", true);
			xmlhttp.send();	
		}

		function verificar(){
			var codigo = document.getElementById("codigo").value;
			var pregunta = document.getElementById("pregunta").value;
			var respuesta = document.getElementById("respuesta").value;
			var complejidad = document.getElementById("complejidad").value;
			var tema = document.getElementById("tema").value;

			if (codigo.length==0 || pregunta.length==0 || respuesta.length==0 || complejidad.length==0 || tema.length==0) {
				alert("Error: Debe rellenar todos los campos para modificar la pregunta");
				return false;
			}
			return true;
		}
	</script>
</head>
<body>
	<?php
	session_start();
	if(!isset($_SESSION['correo']) || strcmp($_SESSION['usuario'], 'alumno')==0){
		header("Location:Login.php");
	}
	?>
	<div style="width:40%; height:70%; float:left; text-align: center;">
		<h3 class="titulo">Modificar Preguntas</h3>
		<form onsubmit='return verificar()' onload="mostrarPreguntas()" action="RevisarPreguntas.php" method="post">
			<p> <b>Código :</b> <input type="text" id="codigo" name="codigo" /></p>
			<p> <b>Pregunta :</b> <input type="text" id="pregunta" name="pregunta" /></p>
			<p> <b>Respuesta :</b> <input type="text" id="respuesta" name="respuesta" /></p>
			<p> <b>Complejidad :</b> <input type="number" id="complejidad" name="complejidad" min="1" max="5"/></p>
			<p> <b>Tema :</b> <input type="text" id="tema" name="tema" /></p>
			<p><big><input type="submit" name="Modificar" value="Modificar" class="boton"/></big></p>
			<p> <a href= "layoutin.php" style="font-size: 20px"> Volver </a></p>
		</form>
		<?php

		$link = mysqli_connect("localhost","root","","quiz");
		if(isset($_POST['codigo'])){
			$codigo = $_POST['codigo'];
			$pregunta = $_POST['pregunta'];
			$respuesta = $_POST['respuesta'];
			$complejidad = $_POST['complejidad'];
			$tema = $_POST['tema'];

			$sql = "SELECT * FROM pregunta WHERE numero=$codigo;";
			$row = mysqli_query($link, $sql);
			if(!$row){
				die("Error:".mysqli_error($link));
			}
			if (mysqli_num_rows($row)==0) {
				echo '<p style="color: red;"><b><big>Introduzca un código de pregunta válido</big></b></p>';
			}
			else{
				if(isset($pregunta)){
					$sql = "UPDATE pregunta SET pregunta='$pregunta' WHERE numero=$codigo;";
					if(!mysqli_query($link, $sql)){
						die("Error:".mysqli_error($link));
					}
				}
				if(isset($respuesta)){
					$sql = "UPDATE pregunta SET respuesta='$respuesta' WHERE numero=$codigo;";
					if(!mysqli_query($link, $sql)){
						die("Error:".mysqli_error($link));
					}
				}
				if(isset($complejidad)){
					$sql = "UPDATE pregunta SET complejidad=$complejidad WHERE numero=$codigo;";
					if(!mysqli_query($link, $sql)){
						die("Error:".mysqli_error($link));
					}
				}
				if(isset($tema)){
					$sql = "UPDATE pregunta SET tema='$tema' WHERE numero=$codigo;";
					if(!mysqli_query($link, $sql)){
						die("Error:".mysqli_error($link));
					}
				}
				echo '<p><b><big>Se ha modificado correctamente</big></b></p>';
			}
		}
		mysqli_close($link);
		?>
	</div>
	<div id="preguntas" style="width:60%; height:70%; float:right; text-align: center;">
		<img id="loading" src="loading2.gif" width="50" height="50">
	</div >

</body>
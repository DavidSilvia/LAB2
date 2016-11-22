<html>
<head><title>Gestionar preguntas</title> 
	<link rel="STYLESHEET" type="text/css" href="Estilos.css">
	<?php
	session_start();
	if(!isset($_SESSION['correo']) || strcmp($_SESSION['usuario'], 'profesor')==0){
		header("Location:Login.php");
	}
	?>
	<script>
		setInterval(carga, 5000);
		function insertarpregunta(){
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			}else{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function(){
				if(xmlhttp.readyState==4 && xmlhttp.status==200){
					document.getElementById("insertar").innerHTML=xmlhttp.responseText;
				}
			}	
			xmlhttp.open("GET", "InsertarPregunta.php?pregunta="+document.getElementById("pregunta").value+"&respuesta="+document.getElementById("respuesta").value+"&complejidad="+document.getElementById("complejidad").value+"&tema="+document.getElementById("tema").value, true);
			xmlhttp.send();
		}

		function verpreguntas(){
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			}else{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function(){
				if(xmlhttp.readyState==4 && xmlhttp.status==200){
					document.getElementById("ver").innerHTML=xmlhttp.responseText;
				}
			}		
			xmlhttp.open("GET", "VerPreguntasXML.php", true);
			xmlhttp.send();
		}

		function carga(){

			if(window.XMLHttpRequest){
				xmlhttp1 = new XMLHttpRequest();
			}else{
				xmlhttp1 = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp1.onreadystatechange=function(){
				if(xmlhttp1.readyState==4 && xmlhttp1.status==200){
					document.getElementById("numpreg").innerHTML=xmlhttp1.responseText;
				}
			}	
			xmlhttp1.open("GET", "MostrarNumPreg.php", true);
			xmlhttp1.send();	
		}

	</script>
</head>
<body>
	<form onload="carga()">
		<h2 class="titulo">Añadir una pregunta </h2>
		<p> 
			<div id="numpreg">
				<img src="loading2.gif" width="50" height="50" />
			</div>
			<p> <b>Pregunta (*):</b> <input type="text" id="pregunta" name="pregunta" /></p>
			<p> <b>Respuesta (*):</b> <input type="text" id="respuesta" name="respuesta" /></p>
			<p> <b>Complejidad :</b> <input type="number" id="complejidad" name="complejidad" min="1" max="5"/></p>
			<p> <b>Tema (*):</b> <input type="text" id="tema" name="tema" /></p>
			<p> <input type="button" id="anadir" value ="Insertar pregunta" onclick = "insertarpregunta()" class="boton"/></p>
			<div id="insertar"></div>
			<a href = 'layoutin.php' style="font-size: 20px">Atras</a><br/></p>
			<p> <input type="button" id="verpreg" value ="Ver preguntas" onclick = "verpreguntas()" class="boton"/></p>
			<div id="ver"><b>Las preguntas se veran aqui</b></div>

		</form>

	</body>
	</html>
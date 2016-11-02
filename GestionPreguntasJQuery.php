<html>
<head><title>Gestionar preguntas</title> 
<link rel="STYLESHEET" type="text/css" href="busy-city/bc-stylesheet.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
		xmlhttp.open("GET", "InsertarPregunta.php?correo="+document.getElementById("correo").value+"&pregunta="+document.getElementById("pregunta").value+"&respuesta="+document.getElementById("respuesta").value+"&complejidad="+document.getElementById("complejidad").value+"&tema="+document.getElementById("tema").value, true);
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
	var elcorreo = "<?php $c=$_GET['correo']; echo $c;?>";
	$.ajax({
		url:"MostrarNumPreg.php",
		data:{correo : elcorreo},
		method:"GET",
		datatype:"json",
		success: function(datos){
			$('#numpreg').html(datos);
		},
	});
}
</script>
</head>
<body onload="carga()">
<form>
<h2>Añadir una pregunta </h2>
<p> 
<div id="numpreg"></div>
<p> <b>Pregunta (*):</b> <input type="text" id="pregunta" name="pregunta" />
<p> <b>Respuesta (*):</b> <input type="text" id="respuesta" name="respuesta" />
<p> <b>Complejidad :</b> <input type="number" id="complejidad" name="complejidad" min="1" max="5"/>
<p> <b>Tema (*):</b> <input type="text" id="tema" name="tema" />
<p> <input type="hidden" id="correo" value="<?php echo $_GET['correo']?>"/>
<p> <input type="button" id="anadir" value ="Insertar pregunta" onclick = "insertarpregunta()"/>
<p> <input type="button" id="verpreg" value ="Ver preguntas" onclick = "verpreguntas()"/>
<div id="insertar"></div>
<div id="ver"<b>Las preguntas se veran aqui</b></div>

</form>

</body>
</html>
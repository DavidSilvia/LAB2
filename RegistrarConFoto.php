<html>
<head><title>Registrado</title> 
<link rel="STYLESHEET" type="text/css" href="Estilos.css">
<meta charset="UTF-8">
</head>
<body>
<?php
//incluimos la clase nusoap.php
require_once('../ProyectoSW-master/lib/nusoap.php');
require_once('../ProyectoSW-master/lib/class.wsdlcache.php');

if(isset($_FILES['imagen']) || $_FILES['imagen']['error']=0){
	$link = mysqli_connect("localhost","root","","quiz");

	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$direccion = $_POST['direccion'];
	$ticket = $_POST['ticket'];
	$password = $_POST['password'];
	$telefono = $_POST['telefono'];
	$especialidad = $_POST['especialidad'];
	$interes = $_POST['interes'];
	
	if(!preg_match("/^[A-Z]{0,1}[a-z]+\s[A-Z]{0,1}[a-z]+$/", $apellidos)){
		die("Error: Debe de introducir sus dos apellidos");
	}
	if(!preg_match("/^[a-z]+[0-9]{3}@ikasle\.ehu\.(es|eus){1}$/", $direccion)){
		die("Error: El email es incorrecto");
	}
	if(!preg_match("/^(6|7|8|9){1}[0-9]{8}$/", $telefono)){
		die("Error: El telefono no es valido");
	}
	if(empty($nombre)){
		die("Error: Introduce un nombre");
	}
	$strlth = strlen($password);
	if($strlth<6){
		die("Error: La contraseña debe de contener mas de 6 caracteres");
	}

	$file_get = $_FILES['imagen']['name'];
	$temp = $_FILES['imagen']['tmp_name'];
	$file_to_saved = "dcuments/".$file_get;
	move_uploaded_file($temp,$file_to_saved);
	
	$soapclient = new nusoap_client('http://cursodssw.hol.es/comprobarmatricula.php?wsdl',true);
	if (isset($direccion)){
		$respuesta = $soapclient->call('comprobar',array( 'x'=>$direccion));
		//echo '<h2>Request</h2><pre>' . htmlspecialchars($soapclient->request, ENT_QUOTES) . '</pre>';
		//echo '<h2>Response</h2><pre>' . htmlspecialchars($soapclient->response, ENT_QUOTES) . '</pre>';
		//echo '<h2>Debug</h2>';
		//echo '<pre>' . htmlspecialchars($soapclient->debug_str, ENT_QUOTES) . '</pre>';
}
	
	if(strcmp($respuesta, "SI")==0){
		$soapclient2 = new nusoap_client('http://localhost/ProyectoSW-master/ComprobarPassword.php',false);
		$respuesta2 = $soapclient2->call('comprobarPassword',array( 'x'=>$password, 'y'=>$ticket));
		//echo '<h2>Request</h2><pre>' . htmlspecialchars($soapclient2->request, ENT_QUOTES) . '</pre>';
		//echo '<h2>Response</h2><pre>' . htmlspecialchars($soapclient2->response, ENT_QUOTES) . '</pre>';
		//echo '<h2>Debug</h2>';
		//echo '<pre>' . htmlspecialchars($soapclient2->debug_str, ENT_QUOTES) . '</pre>';
		if(strcmp($respuesta2, "USUARIO NO AUTORIZADO") != 0){
			if(strcmp($respuesta2, "VALIDA")==0){
				$sql = "INSERT INTO usuario(Nombre, Apellidos, Email, Password, NumTelfn, Especialidad, Intereses, Foto) VALUES ('$nombre','$apellidos',
				'$direccion', '$password', $telefono, '$especialidad', '$interes', '".$file_to_saved."')";
				if(!mysqli_query($link, $sql)){
					die("Error:".mysqli_error($link));
				}
				echo '<big><big>Se ha registrado correctamente</big></big>';
				echo '<p> <a href= "VerUsuariosConFoto.php"> Ver registros </a>';
			}else if(strcmp($respuesta2, "INVALIDA")==0){
				echo '<big><big>La contraseña no es segura</big></big><br/>';
				echo '<big><big>El registro no se ha podido completar</big></big>';
				echo '<p> <a href= "registro.html"> Volver </a>';
			}
		}else if (strcmp($respuesta2, "USUARIO NO AUTORIZADO") == 0){
			echo '<big><big>Usuario no autorizado</big></big><br/>';
			echo '<big><big>El registro no se ha podido completar</big></big>';
			echo '<p> <a href= "registro.html"> Volver </a>';
		}
	}else if (strcmp($respuesta, "NO")==0){
		echo '<big><big>El alumno no esta matriculado</big></big><br/>';
		echo '<big><big>El registro no se ha podido completar</big></big>';
		echo '<p> <a href= "registro.html"> Volver </a>';

	}
	mysqli_close($link);

}else echo 'Ha habido algun problema con la foto';
?>
</body>
</html>
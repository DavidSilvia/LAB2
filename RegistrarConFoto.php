<html>
<head><title>Registrado</title> 
<link rel="STYLESHEET" type="text/css"
href="busy-city/bc-stylesheet.css">
</head>
<body>
<?php
if(isset($_FILES['imagen']) || $_FILES['imagen']['error']=0){
	$link = mysqli_connect("mysql.hostinger.es","u216560962_dmsg","davidsilvia","u216560962_quiz");

	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$direccion = $_POST['direccion'];
	$password = $_POST['password'];
	$telefono = $_POST['telefono'];
	$especialidad = $_POST['especialidad'];
	$interes = $_POST['interes'];
	if(!preg_match("/^[a-z]+[0-9]{3}@ikasle\.ehu\.(es|eus){1}$/", $direccion)){
		die("Error: El email es incorrecto");
	}

	$file_get = $_FILES['imagen']['name'];
	$temp = $_FILES['imagen']['tmp_name'];
	$file_to_saved = "dcuments/".$file_get;
	move_uploaded_file($temp,$file_to_saved);
	

	$sql = "INSERT INTO usuario(Nombre, Apellidos, Email, Password, NumTelfn, Especialidad, Intereses, Foto) VALUES ('$nombre','$apellidos',
		'$direccion', '$password', $telefono, '$especialidad', '$interes', '".$file_to_saved."')";
	if(!mysqli_query($link, $sql)){
		die("Error:".mysqli_error($link));
	}
	echo '<big><big>Se ha registrado correctamente</big></big>';
	echo '<p> <a href= "VerUsuariosConFoto.php"> Ver registros </a>';	
	
	mysqli_close($link);

}else echo 'Ha habido algun problema con la foto';
?>
</body>
</html>
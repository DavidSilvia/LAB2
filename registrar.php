<html>
<head><title>Registrado</title> 
<link rel="STYLESHEET" type="text/css"
href="busy-city/bc-stylesheet.css">
</head>
<body>
<?php
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$password = $_POST['password'];
$telefono = $_POST['telefono'];
$especialidad = $_POST['especialidad'];
$interes = $_POST['interes'];

$link = mysqli_connect("localhost","root","","quiz");
$sql = "INSERT INTO usuario(Nombre, Apellidos, Email, Password, NumTelfn, Especialidad, Intereses) VALUES ('$nombre','$apellidos',
		'$direccion', '$password', $telefono, '$especialidad', '$interes')";
if(!mysqli_query($link, $sql)){
	die("Error:".mysqli_error($link));
}
echo '<big><big>Se ha registrado correctamente</big></big>';
echo '<p> <a href= "VerUsuarios.php"> Ver registros </a>';
mysqli_close($link);
?>
</body>
</html>
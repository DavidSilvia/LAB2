<html>
<head><title>Usuarios</title> 
<link rel="STYLESHEET" type="text/css"
href="busy-city/bc-stylesheet.css">
</head>
<body>
<?php
$link = mysqli_connect("mysql.hostinger.es","u216560962_dmsg","davidsilvia","u216560962_quiz");
$usuarios = mysqli_query($link, "select * from usuario");
echo '<table border=1> <tr><th>Nombre</th><th>Apellidos</th><th>Direccion de correo</th><th>Telefono</th><th>Especialidad</th><th>Intereses</th><th>Foto</th></tr>';
while($row=mysqli_fetch_array($usuarios)){
	echo '<tr><td>'.$row['Nombre'].'</td><td>'.$row['Apellidos'].'</td><td>'.$row['Email'].'</td><td>'.$row['NumTelfn'].'</td><td>'.$row['Especialidad'].'</td><td>'.$row['Intereses'].'</td><td>';
	echo "<img src= '".$row['Foto']."'/>";
}
echo '</table>';
$usuarios->close();
mysqli_close($link);
?>
</body>
</html>
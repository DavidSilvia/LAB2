<html>
<head>
<link rel="STYLESHEET" type="text/css" href="Estilos.css">
<meta charset="utf-8">
</head>
<?php
session_start();
$link = mysqli_connect("localhost","root","","quiz")or die(mysql_error());
$preguntas = mysqli_query($link, "select * from pregunta");
echo '<table border=1 align="center" width="600"> <tr><th>N&uacutemero</th><th>Pregunta</th><th>Respuesta</th><th>Complejidad</th><th>Tema</th></tr>';
while($row=mysqli_fetch_array($preguntas)){
	echo '<tr><td>'.$row['numero'].'</td><td>'.$row['pregunta'].'</td><td width="180" height="100">'.$row['respuesta'].'</td><td>'.$row['complejidad'].'</td><td>'.$row['tema'].'</td></tr>';
}
echo '</table>';
$preguntas->close();
mysqli_close($link);
?>
</html>
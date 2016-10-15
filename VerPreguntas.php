<html>
<head><title>Preguntas</title> 
<link rel="STYLESHEET" type="text/css"
href="busy-city/bc-stylesheet.css">
</head>
<body>
<?php
$link = mysqli_connect("mysql.hostinger.es","u216560962_dmsg","davidsilvia","u216560962_quiz");
$preguntas = mysqli_query($link, "select * from pregunta");
echo '<table border=1> <tr><th>Número</th><th>Email</th><th>Pregunta</th><th>Respuesta</th><th>Complejidad</th></tr>';
while($row=mysqli_fetch_array($preguntas)){
	echo '<tr><td>'.$row['numero'].'</td><td>'.$row['email'].'</td><td width="180" height="100">'.$row['pregunta'].'</td><td width="180" height="100">'.$row['respuesta'].'</td><td>'.$row['complejidad'].'</td>';
}
echo '</table>';
$preguntas->close();
mysqli_close($link);
?>
</body>
</html>
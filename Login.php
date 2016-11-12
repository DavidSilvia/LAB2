<head> 
<link rel="STYLESHEET" type="text/css" href="Estilos.css">
</head>
<body>
<form action="Login.php" method="post">
<h2>Identificación de usuario </h2>
<p> Email : <input type="email" required name="email" size="21" value="" />
<p> Password: <input type="password" required name="pass" size="21" value="" />
<p> <input id="submit" type="submit" />
<p><a href = 'layout.html' style="font-size: 15px">Atras</a><br/></p>
</form>
<?php
if (isset($_POST['email'])){
	
	$link = mysqli_connect("localhost","root","","quiz") or die(mysql_error());

	$email=$_POST['email']; 
	$pass=$_POST['pass'];
	date_default_timezone_set('Europe/Madrid');
	$hora= date('Y-m-d H:i');

	$usuarios = mysqli_query($link,"select * from usuario where Email='$email' and Password='$pass'");
	
	$cont= mysqli_num_rows($usuarios); 
	echo $cont;
	if($cont==1){
		
		$sql = "INSERT INTO conexion(email, hora) VALUES ('$email','$hora')";
		if(!mysqli_query($link, $sql)){
			die("Error:".mysqli_error($link));
		}
		session_start();
		if(strstr($email, 'web000@ehu.es') != null){
			$_SESSION['usuario'] = 0;
		}
		else{
			$_SESSION['usuario'] = 1;
		}
		$_SESSION['correo'] = $email;
		header("location: layoutin.php");
	}
	else {
		echo "<FONT COLOR=RED>Datos incorrectos !!</FONT>";
	}
	mysqli_close($link);
}
?>

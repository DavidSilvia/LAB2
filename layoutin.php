<html>
<?php
session_start();
?>
  <head>
 <!-- <script>
  var tipo = <?php echo $_SESSION['usuario'];?>;
  if(tipo.localeCompare('0')==0){
	  document.getElementById("rp").style.display = "";
  }else if(tipo.localeCompare('1')==0){
	  document.getElementById("gp").style.display = "";
  }-->
  </script>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Bienvenido</title>
    <link rel='stylesheet' type='text/css' href='estilos/style.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (min-width: 530px) and (min-device-width: 481px)'
		   href='estilos/wide.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (max-width: 480px)'
		   href='estilos/smartphone.css' />
		   
  </head>
  <body>
  <div id='page-wrap'>
	<header class='main' id='h1'>
      		<span class="right"><a href="logout.php">Logout</a></span>
      		<span><?php echo $_SESSION['correo'];?></span>
		<h2>Quiz: el juego de las preguntas</h2>
    </header>
	<nav class='main' id='n1' role='navigation'>
	<?php
	$tipo = $_SESSION['usuario'];
	if(strstr($tipo, 'alumno')!=null){
		echo '<span><a href="GestionPreguntas.php" id="gp">Gestionar preguntas</a></span>';
	}else if(strstr($tipo, 'profesor')!=null)
		echo '<span><a href="RevisarPreguntas.php" id="rp">Revisar preguntas</a></span>';
	?>
	<span><a href='creditos.php'>Creditos</a></span>
	</nav>
    <section class="main" id="s1">
   
	<div>
	
	Aqui se visualizan las preguntas y los creditos ...
	</div>
    </section>
	<footer class='main' id='f1'>
		<p><a href="http://es.wikipedia.org/wiki/Quiz" target="_blank">Que es un Quiz?</a></p>
		<a href='https://github.com'>Link GITHUB</a>
	</footer>
</div>
</body>
</html>

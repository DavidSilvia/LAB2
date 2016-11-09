<html>
  <head>
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
		   
	<script>
	function submit(){
		document.getElementByID("myform").submit();
	}
	</script>
  </head>
  <body>
  <form id="myform" method="get">
  <p> <input type="hidden" id='correo' value="<?php echo $_GET['correo']?>"/>
  </form>
  <div id='page-wrap'>
	<header class='main' id='h1'>
      		<span class="right"><a href="logout">Logout</a></span>
      		<span><?php echo $_GET['correo']?></span>
		<h2>Quiz: el juego de las preguntas</h2>
    </header>
	<nav class='main' id='n1' role='navigation'>
		<span><a href='layout.html'>Inicio</a></span>
		<span><a href="GestionPreguntasJQuery.php?correo=<?php echo $_GET['correo']?>" onclick="submit()">Gestionar preguntas</a></span>
		<span><a href='creditos.html'>Creditos</a></span>
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

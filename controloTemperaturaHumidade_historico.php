<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Histórico Temperatura e Humidade</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta http-equiv="refresh" content="60"> 	<!-- Refresh automático -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
	<button><a href="index.html">Voltar</a></button>
  <h1>Casa Inteligente</h1>
	<img src="images/casa.png" width="15%" style="text-align: center;">
	<style>
		.column {
		  float: left;
		  width: 50%;
		}
		.row:after {
		  content: "";
		  display: table;
		  clear: both;
		}
		.row{
			width:101%;
		}
	</style>
	<div class="row" style="background-color:#80ced6;">
	  <div class="column" style="background-color:#80ced6;">
	  	<h1>Temperatura</h1>
	  	<h3>Estado e Data de atualização</h3>
			<h4>
				<?php 
					echo(nl2br(file_get_contents("files/temperatura/log.txt"))); 
				?>
			</h4>
	  </div>
  	<div class="column" style="background-color:#80ced6;">
  		<h1>Humidade</h1>
  		<h3>Estado e Data de atualização</h3>
			<h4>
				<?php 
					echo(nl2br(file_get_contents("files/humidade/log.txt"))); 
				?>
			</h4>
  	</div>
	</div>
	<footer style="text-align: center;">
		<p>Gabriel Sá</p>
    <p>Pedro Henriques</p>
    <p>Rafael Bento</p>
    <p>Tomás Jerónimo</p>
    <br>
  </footer>
</body>
</html>
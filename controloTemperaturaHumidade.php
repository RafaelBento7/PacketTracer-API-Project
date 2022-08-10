<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Controlo Temperatura e Humidade</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta http-equiv="refresh" content="5"> 	<!-- Refresh automático -->
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
	<div class="row">
  	<div class="column" style="background-color:#80ced6;">
  		<h1>Temperatura</h1>
			<h3>	
			<?php 
				echo $valorTemperatura = file_get_contents("files/temperatura/valor.txt"); 
			?>				
			</h3>	
			<h2>Data de atualização</h2>
			<h3>
				<?php echo file_get_contents("files/temperatura/hora.txt"); ?>
			</h3>
  	</div>
  	<div class="column" style="background-color:#80ced6;">
  		<h1>Humidade</h1>
			<h3>	
				<?php 
					echo $valorTemperatura = file_get_contents("files/humidade/valor.txt"); 
				?>				
			</h3>	
			<h2>Data de atualização</h2>
			<h3>
				<?php echo file_get_contents("files/humidade/hora.txt"); ?>
			</h3>
  	</div>
	</div>
	<footer style="text-align: center;">
		<br><br>
		<p>Gabriel Sá</p>
    <p>Pedro Henriques</p>
    <p>Rafael Bento</p>
    <p>Tomás Jerónimo</p>
    <br>
    <br>
  </footer>
</body>
</html>
<?php
	
	header('Content-Type: text/html; charset=utf-8');
	
	//--- verificar se é o método POST e processar -------------------------------
	if($_SERVER['REQUEST_METHOD'] == "POST"){
	
		//echo(var_dump( file_get_contents('php://input')));
		
		if(isset($_POST["valor"]) && isset($_POST["nome"]) && isset($_POST["hora"])){
			
			file_put_contents("../files/".$_POST["nome"]."/valor.txt", $_POST["valor"]);
			
			file_put_contents("../files/".$_POST["nome"]."/hora.txt", $_POST["hora"]);
			
			file_put_contents("../files/".$_POST["nome"]."/log.txt", $_POST["hora"]."; ".$_POST["valor"] . PHP_EOL, FILE_APPEND);
			
			
		}
		else{
			http_response_code(403);
			echo('{"erro": "Os parametros recebidos nao sao validos!"}' . PHP_EOL);
			exit();
		}
		
		exit();
	}
	//--- verificar se é o método GET e processar ----------------------------
	else if($_SERVER['REQUEST_METHOD'] == "GET"){
		//echo("GET\n");
		
		if(isset($_GET["nome"])){
			echo file_get_contents("../files/".$_GET["nome"]."/valor.txt");			
		}
		else{
			http_response_code(403);
			echo('{"erro": "Sensor invalido!"}' . PHP_EOL);
			exit();
		}
		
		exit();
	}
	else{
		http_response_code(403);
		echo('{"erro": "Metodo ' . $_SERVER['REQUEST_METHOD'] . ' nao permitido!"}' . PHP_EOL);
		exit();
	}
	
?>		
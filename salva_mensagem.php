<?php
	 include_once('conexao.php');


	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$estado_civil = $_POST['estado_civil'];
	$nacionalidade = $_POST['nacionalidade'];
	$idade = $_POST['idade'];
	$sexo = $_POST['sexo'];
	$endereco = $_POST['endereco'];
	$cidade = $_POST['cidade'];
	$curso = $_POST['curso'];
	$instituicao = $_POST['instituicao'];
	$conclusao = $_POST['conclusao'];
	$objetivo = $_POST['objetivo'];
	$qual1 = $_POST['qual1'];
	$qual2 = $_POST['qual2'];
	$qual3 = $_POST['qual3'];
	$qual4 = $_POST['qual4'];
	$qual5 = $_POST['qual5'];
	$informacoes = $_POST['informacoes'];


	$result_msg_contato= "INSERT INTO `usuario`(`nome`,`cpf`, `estado_civil`, `nacionalidade`, `idade`, `sexo`, `endereco`, `cidade`, `objetivo`, `curso`, `instituicao`, `conclusao`, `qual1`, `qual2`, `qual3`, `qual4`, `qual5`, `informacao`) VALUES ('$nome', '$cpf','$estado_civil','$nacionalidade','$idade','$sexo','$endereco','$cidade','$objetivo','$curso','$instituicao','$conclusao','$qual1','$qual2','$qual3','$qual4','$qual5','$informacoes')" ;

	$resultado_msg_contato= mysqli_query($conn, $result_msg_contato);




 include_once('teste.php');



?>

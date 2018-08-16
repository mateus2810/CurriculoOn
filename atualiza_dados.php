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


	$result_msg_contato="UPDATE `usuario` SET `cpf`='$cpf',`nome`='$nome',`estado_civil`='$estado_civil',`nacionalidade`='$nacionalidade',`idade`='$idade',`sexo`='$sexo',`endereco`='$endereco',`cidade`='$cidade',`objetivo`='$objetivo',`curso`='$curso',`instituicao`='$instituicao',`conclusao`='$conclusao',`qual1`='$qual1',`qual2`='$qual2',`qual3`='$qual3',`qual4`='$qual4',`qual5`='$qual5',`informacao`='$informacoes' WHERE cpf = '$cpf'";


if($resultado_msg_contato= mysqli_query($conn, $result_msg_contato)){
	 include_once('teste.php');
}else{
	echo "false";
}



?>

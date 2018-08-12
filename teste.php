<?php	

	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();

	// Carrega seu HTML


	$info= '<br>
<br>

<br>
 <br>
 <hr>

<b><u><font size="5"face="Georgia"> Dados Pessoais </font></u></b>
  <br>


              <b>Nome:</b> '. $nome . '
              <br>
              <b>CPF:</b> '. $cpf . '
              <br>
              <b>Estado Civil</b> '. $estado_civil.'

              <br>
              <b>Nacionalidade</b> '. $nacionalidade.'
              

              <br>
              <b>Idade: </b> '. $idade.' 

              <br>
              <b>Sexo:</b> '. $sexo.' 

              <br>
              <b>Endereço:</b>'. $endereco.' 

              <br>
              <b>Cidade:</b> '. $cidade.'  
              <br>
                
                
 <br>
<hr>
 <b><u><font size="5"face="Georgia"> Objetivo </font></u></b></b>  '. $objetivo.' 

<br>
          
 <hr>
<b><u><font size="5"face="Georgia"> Formação Acadêmica </font></u></b>
                <br>
                <br>
                <b>Curso:</b> '. $curso.'    

                <br>   
                <b>Instituição:</b>  '. $instituicao.' 
                  
                <br>
                <b>Conclusão/Cursando:</b> '. $conclusao.'
                <br>

 <hr>
<b><u><font size="5"face="Georgia"> Qualificações e Atividades Complementares </font></u></b>
                <br>
                <br>
                <b></b><li id="empresa"> '. $qual1.' </li>
                <b></b> <li id="anoe"> '. $qual2.'  </li>

                <b></b> <li id="anos">'. $qual3.' </li>
                
                <b></b> <li id="cargo">'. $qual4.'</li>

                <b></b><li id="detalhe">'. $qual5.'  </li> 
                <br>

<hr>
    <u><h4>Informações Adicionais:</h4></u>'. $informacoes.'  
  
';




	$dompdf->load_html($info);

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_celke.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
	
?>
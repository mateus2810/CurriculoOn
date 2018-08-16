<?php
	 include_once('conexao.php');


	
	$cpf = $_POST['cpf'];
	

	$sql= "SELECT * FROM `usuario` WHERE cpf = '$cpf' " ;

	$resultado= mysqli_query($conn, $sql);

	while ($row =mysqli_fetch_assoc($resultado)) {
		

	$nome = $row['nome'];
	$cpf = $row['cpf'];
	$estado_civil = $row['estado_civil'];
	$nacionalidade = $row['nacionalidade'];
	$idade = $row['idade'];
	$sexo = $row['sexo'];
	$endereco = $row['endereco'];
	$cidade = $row['cidade'];
	$curso = $row['curso'];
	$instituicao = $row['instituicao'];
	$conclusao = $row['conclusao'];
	$objetivo = $row['objetivo'];
	$qual1 = $row['qual1'];
	$qual2 = $row['qual2'];
	$qual3 = $row['qual3'];
	$qual4 = $row['qual4'];
	$qual5 = $row['qual5'];
	$informacao = $row['informacao'];

	}
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </head>


  <body>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">CurriculOn</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="file:///C:/Users/Mateus/Desktop/UFVJM/7%C2%BA%20Periodo/Engenharia%20Web/Trabalho%20Web/formulario.html">Home <span class="sr-only">(current)</span></a>
      
    </div>
  </div>
</nav>


  	<div class="container">
  		  


      
      
  <div class="form-group">
   <center><img src="img/CurriculoOn.png"></center>
<br>

   <br>
   <center><h4>Editar - Dados Pessoais</h4></center> 


<button class="btn btn-primary" onclick ="voltar()" >voltar</button>
 <form method="POST" action="atualiza_dados.php">
 <br>
<br>
Nome Completo:


  <div>
    <div class="form-group">
      <input type="text" class="form-control" id="formnome" name="nome"  value="<?php echo $nome;  ?>" placeholder="">
    </div>
    
CPF:

  <div>
    <div class="form-group">
      <input type="text" class="form-control" id="formnome" name="cpf"  disabled value="<?php echo $cpf;  ?>"  placeholder="">
    </div>

Estado Civil: 
  </div>
     <div class="form-group">
    <input type="text" class="form-control" id="formestado" name="estado_civil" placeholder="">
  </div>

Nacionalidade:
        <div class="form-group">
            <input type="text" class="form-control" id="formnacionalidade" name="nacionalidade" placeholder="">
      </div>

Idade:
        <div class="form-group">
            <input type="text" class="form-control" id="formidade" name="idade" placeholder="">
        </div>
Sexo:        
  <div class="form-group">
    <input type="text" class="form-control" id="formsexo" name="sexo" placeholder="">
  </div>

Endereço:
  <div class="form-group">
    <input type="text" class="form-control" id="formendereco" name="endereco" placeholder="">
  </div>

Cidade:
  <div class="form-group">
    <input type="text" class="form-control" id="formcidade" name="cidade" placeholder="">
  </div>


      <label for="formGroupExampleInput"><strong>Objetivo do Curriculo</strong></label>
      <a href="file:///C:/Users/Mateus/Desktop/UFVJM/7%C2%BA%20Periodo/Engenharia%20Web/Trabalho%20Web/montagem.html" data-toggle="tooltip" title="Indicar qual o cargo ou tarefa específica que quer executar. Propósito em torno do seu currículo"><img src="ponto.png">Saiba mais!</a>

      <div class="form-group">
        <input type="text" class="form-control" id="formobjetivo"name="objetivo" placeholder="">
      </div>

  <label for="formGroupExampleInput"><strong>Formação Academica</strong></label>
  <br>
  Curso:
  <div class="form-group">
    <input type="text" class="form-control" id="formcurso" name="curso" placeholder="">
  </div>

Instituição:
      <div class="form-group">
        <input type="text" class="form-control" id="forminstituicao" name="instituicao"placeholder="">
      </div>
  
Conclusão/Cursando:
    <div class="form-group">
      <input type="text" class="form-control" id="formconcluido" name="conclusao" placeholder="">
    </div>

    <label for="formGroupExampleInput"><strong>Qualificações e Atividades Complementares</strong></label>
    <a href="#" data-toggle="tooltip" title="Habilidades e/ou qualificações obtidas ao longo de sua carreira, necessariamente relacionadas a vaga almejada. torno do seu currículo"><img src="ponto.png"></a>

    
<br>

                <div class="form-group">
                  <input type="text" class="form-control" id="formempresa" name="qual1" placeholder="1ª Qualifição ">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" id="formanoe" name="qual2" placeholder="2ª Qualifição">
                </div>
   
                <div class="form-group">
                  <input type="text" class="form-control" id="formanos" name="qual3"placeholder="3ª Qualifição">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" id="formcargo" name="qual4"placeholder="4ª Qualifição">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" id="formdetalhe" name="qual5"placeholder="5ª Qualifição">
                </div>
    
    <label for="formGroupExampleInput"><strong>Informações Adicionais</strong></label>
    <a href="#" data-toggle="tooltip" title="Você deve utilizá-la para inserir informações relevantes para a vaga a que está concorrendo, mas que não se encaixam nos campos anteriores. Utilize esta sessão com moderação focando aspectos que possam enriquecer seu currículo."><img src="ponto.png"></a>

                  <div class="form-group">
                    <input type="text" class="form-control" id="formatividade" name="informacoes" placeholder="">
                  </div>
     
                  <button type="submit" class="btn btn-primary" >Enviar</button>

            </form>
          </div>

<br>
<br>


  <script type="text/javascript">
    
    function voltar(){
       window.location = "index.php";
    }


            //alert("Nome: "+nome +"\nEstado:"+ estado)
    
  </script>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    
  </body>
</html>
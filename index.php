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
  		  

 <form method="POST" action="salva_mensagem.php">
      
      
  <div class="form-group">
   <center><img src="img/CurriculoOn.png"></center>
<br>

   <br>
   <center><h4>Dados Pessoais</h4></center> 

Nome Completo:

  <div>
    <div class="form-group">
      <input type="text" class="form-control" id="formnome" name="nome" placeholder="">
    </div>
    
CPF:

  <div>
    <div class="form-group">
      <input type="text" class="form-control" id="formnome" name="cpf" placeholder="">
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
     
<button type="submit" class="btn btn-primary" onclick ="mostrar()">Enviar</button>

            </form>
          </div>

<br>
<br>
Digite seu CPF para fazer a pesquisa:

<form method="POST" action="pesquisar.php">
  <div>
    <div class="form-group">
      <input type="text" class="form-control" id="formpesqusia"  name="cpf" placeholder="">
    </div>
<button type="submit" class="btn btn-primary" onclick ="">Pesquisar</button>
</form>

  <script type="text/javascript">
    
    
    function mostrar(){
      //Dados Pessoais
      var nome = document.getElementById("formnome").value;
      document.getElementById('demo').innerHTML = nome;

      var civil = document.getElementById("formestado").value;
      document.getElementById('estado').innerHTML = civil;

      var nacionalidade = document.getElementById("formnacionalidade").value;
      document.getElementById('nacionalidade').innerHTML = nacionalidade;

      var idade = document.getElementById("formidade").value;
      document.getElementById('idade').innerHTML = idade;

      var sexo = document.getElementById("formsexo").value;
      document.getElementById('sexo').innerHTML = sexo;

      var endereco = document.getElementById("formendereco").value;
      document.getElementById('endereco').innerHTML = endereco;

      var cidade = document.getElementById("formcidade").value;
      document.getElementById('cidade').innerHTML = cidade;

          //Objetivo
          var objetivo = document.getElementById("formobjetivo").value;
          document.getElementById('objetivo').innerHTML = objetivo;

              //Formação Academica
              var curso = document.getElementById("formcurso").value;
              document.getElementById('curso').innerHTML = curso;

              var instituicao = document.getElementById("forminstituicao").value;
              document.getElementById('instituicao').innerHTML = instituicao;

              var concluido = document.getElementById("formconcluido").value;
              document.getElementById('concluido').innerHTML = concluido;

                    //Experiencias Profissionais
                  var empresa = document.getElementById("formempresa").value;
                  document.getElementById('empresa').innerHTML = empresa;

                  var anoe = document.getElementById("formanoe").value;
                  document.getElementById('anoe').innerHTML = anoe;

                  var anos = document.getElementById("formanos").value;
                  document.getElementById('anos').innerHTML = anos;

                  var cargo = document.getElementById("formcargo").value;
                  document.getElementById('cargo').innerHTML = cargo;

                  var detalhe = document.getElementById("formdetalhe").value;
                  document.getElementById('detalhe').innerHTML = detalhe;

                      //Atividades Complementares
                      var atividade = document.getElementById("formatividade").value;
                      document.getElementById('atividade').innerHTML = atividade;



      function topFunction() {

    document.body.scrollBottom= 0;
    document.documentElement.scrollBottom= 0;
    window.scrollTo(300, 0);

}


      
      //alert("Nome: "+nome +"\nEstado:"+ estado)
    }
  </script>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    
  </body>
</html>
<?php

setcookie('promo', 'skype65.php', time() + 60 * 60 * 24 * 7, '/');

$title="THE GROVE - Curso de Inglês em Florianópolis";
require 'inc/header.php';
?>
    <style>
      h2 {
        margin: 20px;
        font-size: 50px;
      }


      .benefit-list {
        list-style-type: none;
      }

      .benefit-list li {
        font-size: 1.5em;
/*        color: #12A5F4;*/
      }

      ul.benefit-list {
        padding-left: 0;
      }

      .benefit-list span {
        color: #12A5F4;
      }

      h2 {
        margin-bottom: 65px;
      }

      #contact-button {
        margin-top: 50px;
        margin-bottom: 300px;
      }
    </style>
  </head>
  <body>
<?php
require 'inc/menu.php';
?>


    <div class="container">
    <div class="row">
        <h2 class="text-center">Oferta Promocional</h2>



      <div class="col-lg-5 col-lg-offset-2">
        <ul class="benefit-list">
          <li><span class="glyphicon glyphicon-ok-circle"></span> Inglês para viagens e negócios</li>
          <li><span class="glyphicon glyphicon-ok-circle"></span> 1 hora de aula por semana</li>
          <li><span class="glyphicon glyphicon-ok-circle"></span> Não é necessário agendar horários</li>
          <li><span class="glyphicon glyphicon-ok-circle"></span> Professores de plantão das 8 às 21hrs</li>
          <li><span class="glyphicon glyphicon-ok-circle"></span> Atendimento individualizado por Skype</li>
          <li><span class="glyphicon glyphicon-ok-circle"></span> Conteúdo online disponível 24 hrs/dia</li>
          <li><span class="glyphicon glyphicon-ok-circle"></span> Material didático online gratuito</li>
          <li><span class="glyphicon glyphicon-ok-circle"></span> Não cobramos taxa de matrícula</li>
          <li><span class="glyphicon glyphicon-ok-circle"></span> Não cobramos taxa de rescisão</li>
          <li><span class="glyphicon glyphicon-ok-circle"></span> Cancele o curso a qualquer momento</li>
        </ul>
      </div>


        <div class="col-lg-3 col-sm-6">
          <div class="panel panel-primary text-center">
            <div class="panel-heading panel-success">
              <h3>Promocional</h3>
            </div>
            <div class="panel-body">
              <h3 class="panel-title price">R$65<span class="price-cents">00</span><span class="price-month">mês</span></h3>
            </div>
            <ul class="list-group">
              <li class="list-group-item">1 hora por semana</li>
              <li class="list-group-item"><!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/v2/pre-approvals/request.html" method="post">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="code" value="0F0568B1ECEC6BFCC495FF908D51339C" />
<input type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/assinaturas/209x48-assinar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO --></li>
            </ul>
          </div>          
        </div>

    </div> <!-- row -->

    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <button class="btn btn-default btn-block btn-lg" id="contact-button" data-toggle="modal" data-target="#myModal">Receber Mais Informações</button>
      </div>
    </div> <!-- row -->



<?php require 'inc/modal-contact.php'; ?>

    <!-- Closing DIV of .container in footer.php -->

<?php require 'inc/footer.php'; ?>

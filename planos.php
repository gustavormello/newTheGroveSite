<?php
$title="THE GROVE - Curso de Inglês em Florianópolis";
require 'inc/header.php';
?>
  </head>
  <body>
<?php
require 'inc/menu.php';
?>

    <div class="container">
    <div class="row planos">
        <h2 class="text-center">CONHEÇA OS NOSSOS PLANOS</h2>
        <hr>

        <div class="row quick-access">
          <div class="col-md-6 col-md-offset-3">
            <a href="#porskype"><button type="button" class="btn btn-primary btn-lg btn-block" id="btn-skype">Aulas por Skype</button></a>
          </div>
          <div class="col-md-6 col-md-offset-3">
            <a href="#presenciais"><button type="button" class="btn btn-default btn-lg btn-block" id="btn-presencial">Aulas Presenciais</button></a>
          </div>
          <div class="col-md-6 col-md-offset-3">
            <a href="skype.php"><button type="button" class="btn btn-default btn-lg btn-block" id="btn-presencial">Promoções</button></a>
          </div>
        </div>
        <div class="anchor-links" id="presenciais"></div>

        <h2 class="planos">Aulas Presenciais</h2>
        <div class="row planos">
        <div class="col-lg-3 col-sm-6">
          <div class="panel panel-primary text-center">
            <div class="panel-heading panel-success">
              <h3>Básico</h3>
            </div>
            <div class="panel-body">
              <h3 class="panel-title price">$265<span class="price-cents">00</span><span class="price-month">mês</span></h3>
            </div>
            <ul class="list-group">
              <li class="list-group-item">Contrato anual</li>
              <li class="list-group-item">1 dia por semana</li>
              <li class="list-group-item">11 meses de aula</li>
              <li class="list-group-item">Material didático<br> gratuito</li>
              <li class="list-group-item">Aulas presenciais<br>ou por Skype</li>
              <li class="list-group-item">Sem taxa<br> de rescisão</li>
              <li class="list-group-item"><strong>R$ 60,00</strong><br> taxa de matrícula</li>
              <li class="list-group-item"><a class="btn btn-default" data-toggle="modal" data-target="#myModal">Mais informações</a></li>
            </ul>
          </div>          
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <h3>Tradicional</h3>
            </div>
            <div class="panel-body">
              <h3 class="panel-title price">$315<span class="price-cents">00</span><span class="price-month">mês</span></h3>
            </div>
            <ul class="list-group">
              <li class="list-group-item">Contrato anual</li>
              <li class="list-group-item">2 dias por semana</li>
              <li class="list-group-item">11 meses de aula</li>
              <li class="list-group-item">Material didático<br> gratuito</li>
              <li class="list-group-item">Aulas presenciais<br>ou por Skype</li>
              <li class="list-group-item">Sem taxa<br> de rescisão</li>
              <li class="list-group-item">Sem taxa<br> de matrícula</li>
              <li class="list-group-item"><a class="btn btn-default" data-toggle="modal" data-target="#myModal">Mais informações</a></li>
            </ul>
          </div>          
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <h3>Intensivo</h3>
            </div>
            <div class="panel-body">
              <h3 class="panel-title price">$365<span class="price-cents">00</span><span class="price-month">mês</span></h3>
            </div>
            <ul class="list-group">
              <li class="list-group-item">Contrato anual</li>
              <li class="list-group-item">3 dias por semana</li>
              <li class="list-group-item">11 meses de aula</li>
              <li class="list-group-item">Material didático<br> gratuito</li>
              <li class="list-group-item">Aulas presenciais<br>ou por Skype</li>
              <li class="list-group-item">Sem taxa<br> de rescisão</li>
              <li class="list-group-item">Sem taxa<br> de matrícula</li>
              <li class="list-group-item"><a class="btn btn-default " data-toggle="modal" data-target="#myModal">Mais informações</a></li>
            </ul>
          </div>          
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <h3>Super-Intensivo</h3>
            </div>
            <div class="panel-body">
              <h3 class="panel-title price">$465<span class="price-cents">00</span><span class="price-month">mês</span></h3>
            </div>
            <ul class="list-group">
              <li class="list-group-item">Contrato anual</li>
              <li class="list-group-item">5 dias por semana</li>
              <li class="list-group-item">11 meses de aula</li>
              <li class="list-group-item">Material didático<br> gratuito</li>
              <li class="list-group-item">Aulas presenciais<br>ou por Skype</li>
              <li class="list-group-item">Sem taxa<br> de rescisão</li>
              <li class="list-group-item">Sem taxa<br> de matrícula</li>
              <li class="list-group-item"><a class="btn btn-default" data-toggle="modal" data-target="#myModal">Mais informações</a></li>
            </ul>
          </div>          
        </div>

        <div class="col-lg-3 col-sm-6">
          <div class="panel panel-success text-center">
            <div class="panel-heading panel-success">
              <h3>Licença Capacitação</h3>
            </div>
            <div class="panel-body">
              <h3 class="panel-title price">$650<span class="price-cents">00</span><span class="price-month">mês</span></h3>
            </div>
            <ul class="list-group">
              <li class="list-group-item">Contrato mensal</li>
              <li class="list-group-item">até 6 dias por semana</li>
              <li class="list-group-item">30 dias de aula</li>
              <li class="list-group-item">Material didático<br> gratuito</li>
              <li class="list-group-item">Aulas presenciais<br>ou por Skype</li>
              <li class="list-group-item">Sem taxa<br> de rescisão</li>
              <li class="list-group-item">Sem taxa<br> de matrícula</li>
              <li class="list-group-item"><a class="btn btn-default" data-toggle="modal" data-target="#myModal">Mais informações</a></li>
            </ul>
          </div>          
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="panel panel-default text-center">
            <div class="panel-heading panel-success">
              <h3>Licença Capacitação</h3>
            </div>
            <div class="panel-body">
              <h3 class="panel-title price">$1300<span class="price-cents">00</span><span class="price-month">mês</span></h3>
            </div>
            <ul class="list-group">
              <li class="list-group-item">Contrato bimestral</li>
              <li class="list-group-item">até 6 dias por semana</li>
              <li class="list-group-item">60 dias de aula</li>
              <li class="list-group-item">Material didático<br> gratuito</li>
              <li class="list-group-item">Aulas presenciais<br>ou por Skype</li>
              <li class="list-group-item">Sem taxa<br> de rescisão</li>
              <li class="list-group-item">Sem taxa<br> de matrícula</li>
              <li class="list-group-item"><a class="btn btn-default" data-toggle="modal" data-target="#myModal">Mais informações</a></li>
            </ul>
          </div>          
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="panel panel-default text-center">
            <div class="panel-heading panel-success">
              <h3>Licença Capacitação</h3>
            </div>
            <div class="panel-body">
              <h3 class="panel-title price">$1950<span class="price-cents">00</span><span class="price-month">mês</span></h3>
            </div>
            <ul class="list-group">
              <li class="list-group-item">Contrato trimestral</li>
              <li class="list-group-item">até 6 dias por semana</li>
              <li class="list-group-item">90 dias de aula</li>
              <li class="list-group-item">Material didático<br> gratuito</li>
              <li class="list-group-item">Aulas presenciais<br>ou por Skype</li>
              <li class="list-group-item">Sem taxa<br> de rescisão</li>
              <li class="list-group-item">Sem taxa<br> de matrícula</li>
              <li class="list-group-item"><a class="btn btn-default" data-toggle="modal" data-target="#myModal">Mais informações</a></li>
            </ul>
          </div>          
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="panel panel-default text-center">
            <div class="panel-heading panel-success">
              <h3>Conversação</h3>
            </div>
            <div class="panel-body">
              <h3 class="panel-title price">$250<span class="price-cents">00</span><span class="price-month">mês</span></h3>
            </div>
            <ul class="list-group">
              <li class="list-group-item">Contrato anual</li>
              <li class="list-group-item">2 horas por semana</li>
              <li class="list-group-item">11 meses de aula</li>
              <li class="list-group-item">Material didático<br> gratuito</li>
              <li class="list-group-item">Aulas presenciais</li>
              <li class="list-group-item">Sem taxa<br> de rescisão</li>
              <li class="list-group-item"><strong>R$ 60,00</strong><br> taxa de matrícula</li>
              <li class="list-group-item"><a class="btn btn-default" data-toggle="modal" data-target="#myModal">Mais informações</a></li>
            </ul>
          </div>          
        </div>
        </div>
        <div class="anchor-links" id="porskype"></div>

 
        <h2 class="planos">Aulas por Skype</h2>

        <div class="row planos">

        <div class="col-lg-3 col-sm-6">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <h3>Starter</h3>
            </div>
            <div class="panel-body">
              <h3 class="panel-title price">$120<span class="price-cents">00</span><span class="price-month">mês</span></h3>
            </div>
            <ul class="list-group">
              <li class="list-group-item">1 hora de aula<br> por semana</li>
              <li class="list-group-item">Aulas individualizadas<br> por Skype</li>
              <li class="list-group-item">Acesso às lições<br>24 horas</li>
              <li class="list-group-item">Não precisa<br>agendar horários</li>
              <li class="list-group-item">Material didático<br> gratuito</li>
              <li class="list-group-item">Sem taxa<br> de rescisão</li>
              <li class="list-group-item">Sem taxa<br> de matrícula</li>
              <li class="list-group-item">Cancele a qualquer<br> momento</li>
              <li class="list-group-item"><a class="btn btn-default" data-toggle="modal" data-target="#myModal">Mais informações</a></li>
            </ul>
          </div>          
        </div>

        <div class="col-lg-3 col-sm-6">
          <div class="panel panel-primary text-center">
            <div class="panel-heading panel-success">
              <h3>Básico</h3>
            </div>
            <div class="panel-body">
              <h3 class="panel-title price">$265<span class="price-cents">00</span><span class="price-month">mês</span></h3>
            </div>
            <ul class="list-group">
              <li class="list-group-item">1 dia por semana<br>+ sábado</li>
              <li class="list-group-item">Aulas individualizadas<br> por Skype</li>
              <li class="list-group-item">Fique na sala<br>o tempo que quiser</li>
              <li class="list-group-item">Não precisa<br>agendar horários</li>
              <li class="list-group-item">Material didático<br> gratuito</li>
              <li class="list-group-item">Sem taxa<br> de rescisão</li>
              <li class="list-group-item">Sem taxa<br> de matrícula</li>
              <li class="list-group-item">Cancele a qualquer<br> momento</li>
              <li class="list-group-item"><a class="btn btn-default" data-toggle="modal" data-target="#myModal">Mais informações</a></li>
            </ul>
          </div>          
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <h3>Tradicional</h3>
            </div>
            <div class="panel-body">
              <h3 class="panel-title price">$315<span class="price-cents">00</span><span class="price-month">mês</span></h3>
            </div>
            <ul class="list-group">
              <li class="list-group-item">2 dias por semana<br>+ sábado</li>
              <li class="list-group-item">Aulas individualizadas<br> por Skype</li>
              <li class="list-group-item">Fique na sala<br>o tempo que quiser</li>
              <li class="list-group-item">Não precisa<br>agendar horários</li>
              <li class="list-group-item">Material didático<br> gratuito</li>
              <li class="list-group-item">Sem taxa<br> de rescisão</li>
              <li class="list-group-item">Sem taxa<br> de matrícula</li>
              <li class="list-group-item">Cancele a qualquer<br> momento</li>
              <li class="list-group-item"><a class="btn btn-default" data-toggle="modal" data-target="#myModal">Mais informações</a></li>
            </ul>
          </div>          
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="panel panel-default text-center">
            <div class="panel-heading">
              <h3>Intensivo</h3>
            </div>
            <div class="panel-body">
              <h3 class="panel-title price">$365<span class="price-cents">00</span><span class="price-month">mês</span></h3>
            </div>
            <ul class="list-group">
              <li class="list-group-item">3 dias por semana<br>+ sábado</li>
              <li class="list-group-item">Aulas individualizadas<br> por Skype</li>
              <li class="list-group-item">Fique na sala<br>o tempo que quiser</li>
              <li class="list-group-item">Não precisa<br>agendar horários</li>
              <li class="list-group-item">Material didático<br> gratuito</li>
              <li class="list-group-item">Sem taxa<br> de rescisão</li>
              <li class="list-group-item">Sem taxa<br> de matrícula</li>
              <li class="list-group-item">Cancele a qualquer<br> momento</li>
              <li class="list-group-item"><a class="btn btn-default " data-toggle="modal" data-target="#myModal">Mais informações</a></li>
            </ul>
          </div>          
        </div>


      </div> <!-- end of container div -->

<?php require 'inc/modal-contact.php'; ?>

    <!-- Closing DIV of .container in footer.php -->

<?php require 'inc/footer.php'; ?>

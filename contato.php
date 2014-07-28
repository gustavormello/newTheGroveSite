<?php
$title="Contato - THE GROVE - Curso de Inglês em Florianópolis";
require 'inc/header.php';
?>

    <style>
      h2 {
        font-size: 3em;
        margin-bottom: 1.1em;
        font-weight: 900;
        margin-top: 30px;
      }

      .contact-info-box {
        margin-top: 145px;
      }

      .stitched {
        padding: 20px;
        margin: 10px;
        background: #26893A;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        line-height: 1.3em;
        border-radius: 10px;
        box-shadow: 0 0 0 4px #26893A, 2px 1px 6px 4px rgba(10, 10, 0, 0.5);
        text-shadow: -1px -1px #2D9F44;
        font-weight: normal;
      }
    </style>

  </head>
  <body>
<?php
require 'inc/menu.php';
?>


  <!-- Sales PAGE START -->

  <header class="container">

 
<!-- Contact Form -->
<span id="contact"></span>
<div class="row">
<div class="container col-md-8">
      <form class="contactForm" role="form">
   
    <h2>Contato</h2>   
    <div class="form-group">
          <label class="control-label">Nome</label>
      <div class="controls">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input type="text" class="form-control" name="nome" placeholder="Nome">
        </div>
      </div>
    </div>
    
    <div class="form-group">
          <label class="control-label">Email</label>
      <div class="controls">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
          <input type="text" class="form-control" id="email" name="email" placeholder="Email">
        </div>
      </div>  
    </div>
    
<!--     <div class="form-group ">
      <label class="control-label">Website</label>
  <div class="controls">
      <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
      <input type="text" class="form-control" id="lname" name="website" placeholder="Endereço">
    </div>
  </div>
</div>-->

<div class="form-group ">
      <label class="control-label">Motivo</label>
  <div class="controls">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
        <select name="cate" class="form-control selectpicker show-tick"> 
          <option> Interesse em aulas</option>
          <option> Parceria comercial ou convênio</option>
          <option> Vaga de emprego</option>
          <option> Outro</option>
        </select>
    </div>
  </div>
</div> 
    
    <div class="form-group ">
          <label class="control-label">Message</label>
      <div class="controls">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <textarea name="msg" class="form-control " rows="4" cols="78" placeholder="Escreva a sua mensagem aqui."></textarea>
          </div>
      </div>
    </div>
    
        <div class="controls" style="margin-left: 40%;">
      
         <button type="submit" id="mybtn"  class="btn btn-primary">Enviar mensagem</button>
          
        </div>
    </form>
    </div>

  <div class="col-md-4 contact-info-box">

  </div>


  </div> <!-- row -->


  <h2>Localização</h2>

        <iframe width="100%" height="500px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?q=Rua+Em%C3%ADlio+Blum,+131,+Florianopolis+-+Santa+Catarina&amp;hl=en&amp;ie=UTF8&amp;ll=-27.593463,-48.543048&amp;spn=0.02902,0.055747&amp;sll=-27.609691,-48.478875&amp;sspn=0.928502,1.783905&amp;oq=Rua+Emilio+Blum,+131,+&amp;hnear=R.+Em%C3%ADlio+Blum,+131+-+Centro,+Florian%C3%B3polis+-+Santa+Catarina,+88020-010&amp;t=m&amp;z=15&output=embed"></iframe>

      <hr class="featurette-divider">

    <!-- Closing DIV of .container in footer.php -->


<?php require 'inc/footer.php'; ?>

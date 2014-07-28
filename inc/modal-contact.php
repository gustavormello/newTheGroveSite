<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Mais informações sobre planos e preços</h4>
      </div>
      <div class="modal-body">

    <form name="contactform" method="post" action="./mailer.php" class="form-horizontal" role="form">
      <div class="form-group">
        <label for="inputName" class="col-lg-2 control-label">Nome</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Nome">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputSubject" class="col-lg-2 control-label">Telefone</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="DDD + Telefone">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword1" class="col-lg-2 control-label">Mensagem</label>
        <div class="col-lg-10">
          <textarea class="form-control" rows="4" id="inputMessage" name="inputMessage" placeholder="Forneça mais detalhes para ajudar-nos a atender você melhor."></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
          <button type="submit" class="btn btn-primary">
            Quero Receber Mais Informações
          </button>
        </div>
      </div>
    </form>

      </div>
    </div>
  </div>
</div>
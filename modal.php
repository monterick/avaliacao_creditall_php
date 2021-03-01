
<!-- Cadastrar -->
<div class="modal" id="myModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">CADASTRAR CONSUMIDOR</h5>
        <button type="button" onclick="closeCadastrar()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="./controller/controller.php" method="post">
        <div class="col">
        <label for="nome">NOME</label>
      <input type="text" name="nome" id="nome" class="form-control">
    </div>
  <div class="row">    
    <div class="col">
        <label for="nascimento">Data Nascimento</label>
      <input type="date" name="nascimento" id="nascimento" class="form-control" >
    </div>
    <div class="col">
        <label for="rendimento">Rendimento</label>
      <input type="text" name="rendimento" id="rendimento" class="form-control" >
    </div>
  </div>

      </div>
      <div class="modal-footer">
         <input type="hidden" name="operacao" value="cadastrar"> 
        <button type="button" onclick="closeCadastrar()" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Fim Cadastrar-->

<!-- Editar-->
<div class="modal" id="myModal2" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">EDITAR CONSUMIDOR</h5>
        <button type="button" onclick="closeEditar()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="./controller/controller.php" method="post">
        <div class="col">
        <label for="nome">NOME</label>
      <input type="text" name="editnome" id="editnome" class="form-control">
    </div>
  <div class="row">    
    <div class="col">
        <label for="nascimento">Data Nascimento</label>
      <input type="date" name="editnascimento" id="editnascimento" class="form-control" >
    </div>
    <div class="col">
        <label for="rendimento">Rendimento</label>
      <input type="text" name="editrendimento" id="editrendimento" class="form-control" >
    </div>
  </div>

      </div>
      <div class="modal-footer">
          <input type="hidden" name="operacao" value="editar">
         <input type="hidden" id="editid" name="editid"> 
        <button type="button" onclick="closeEditar()" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Fim Editar -->
<?php
include_once('templates/header.php');
include_once("process/cad_curso.php");
?>
<div class="container">
  <div class="col-md-12">
    <h2>Cadastrar cursos:</h2>
  </div>
  <div class="row mt-4">
    <div class="col-md-4" id="form-cad-curso">
      <form class="row g-3" action="process/cad_curso.php" method="POST">
        <div class="col-md-12">
          <label for="nome_curso" class="form-label"><strong>Curso</strong></label>
          <input type="TEXT" class="form-control" id="nome_curso" name="nome_curso" placeholder="nome do curso">
        </div>
        <!-- <div class="col-md-4">
          <label for="sigla" class="form-label"><strong>Sigla</strong></label>
          <input type="text" class="form-control upper" id="sigla">
        </div>
        
        <div class="col-md-8">
          <label for="selecao" class="form-label"><strong>Seleção</strong></label>
          <select id="selecao" class="form-select">
            <option selected>2024</option>
            <option>2025</option>
         </select> 
        </div>-->
        <div class="col-md-12 d-grid gap-2">
          <button type="submit" class="btn btn-dark" id="liveAlertBtn">Cadastrar</button>
        </div>
      </form>
    </div>
    <div class="col-md-6 offset-md-2">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Curso</th>
            <th scope="col" class="ms-2">Ações</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <?php foreach ($cursos as $curso) : ?>
            <tr>
              <th scope="row" class="align-middle"><?= $curso["nome"] ?></th>
              <td>
                <!-- <a class="link-icon" href="#">
                  <ion-icon name="create-outline" size="large"></ion-icon>
                </a> -->
                <form id="form-del-curso" action="process/cad_curso.php" method="POST">
                  <input type="hidden" name="id_curso" value="<?= $curso["ID"] ?>">
                  <input type="hidden" name="type" value="delete">
                  <button type="submit" class="btn btn-hover" id="liveAlertBtn">
                    
                  </button>
                  <button type="button" class="btn btn-hover" data-bs-toggle="modal" data-bs-target="#modalDelete">
                  <ion-icon name="trash-outline" size="large"></ion-icon>
                  </button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Curso</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Confirma o cadastro do curso?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="confirmDelete()">Sim</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
      </div>
    </div>
  </div>
</div>
<script>
  function confirmDelete() {
  // Aqui você pode adicionar a lógica para enviar os dados para a página PHP
  document.getElementById("form-del-curso").submit();
}
</script>
<?php
include_once('templates/footer.php');
?>
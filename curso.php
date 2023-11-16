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
                <form action="process/cad_curso.php" method="POST" id="deleteForm">
                  <input type="hidden" name="id_curso" value="<?= $curso["ID"] ?>">
                  <input type="hidden" name="type" value="delete">
                  <!-- <button type="submit" class="btn btn-hover" id="liveAlertBtn"><ion-icon name="trash-outline" size="large"></ion-icon></button> -->
                  <button type="button" class="btn btn-hover" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal" data-id="<?= $curso["ID"] ?>">
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
<!-- Modal de Confirmação -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmação de Exclusão</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Tem certeza de que deseja excluir este curso?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Excluir</button>
      </div>
    </div>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
    var deleteForm = document.getElementById('deleteForm');

    confirmDeleteBtn.addEventListener('click', function() {
      // Obter o ID do curso
      var cursoId = confirmDeleteBtn.getAttribute('data-id');

      // Converter o ID para inteiro
      cursoId = parseInt(cursoId, 10);

      // Adicionar o ID ao formulário de exclusão
      deleteForm.querySelector('input[name="id_curso"]').value = cursoId;

      // Enviar o formulário de exclusão
      deleteForm.submit();
    });
  });
</script>


<?php
include_once('templates/footer.php');
?>
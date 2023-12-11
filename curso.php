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

        <div class="col-md-12 d-grid gap-2">
          <button type="submit" class="btn btn-dark" id="liveAlertBtn">Cadastrar</button>
        </div>
      </form>
    </div>
    <div class="col-md-6 offset-md-2">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Curso</th>
            <th scope="col" class="ms-2">Ações</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <?php foreach ($cursos as $curso) : ?>
            <tr id="linha-<?php echo $curso["ID"] ?>">
              <th scope="row" class="align-middle"><?= $curso["ID"] ?></th>
              <th scope="row" class="align-middle"><?= $curso["nome"] ?></th>
              <td>
                <!-- <a class="link-icon" href="#">
                  <ion-icon name="create-outline" size="large"></ion-icon>
                </a> -->
                <button type="button" class="btn btn-hover btn-abrir-modal-del" onclick="return confirma();" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal" data-id="<?php echo $curso["ID"] ?>">
                  <ion-icon name="trash-outline" size="large"></ion-icon>
                </button>
                
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Modal de Confirmação -->
<?php include_once('templates/modal.php'); ?>
<script>
    function confirma(){
      ;

      if(x==true){
    			header("location: index.php");
          return true;

      }
      else
      {
          return false;
      }
  }
</script>


<?php
include_once('templates/footer.php');
?>
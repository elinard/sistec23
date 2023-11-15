<?php
include_once('templates/header.php');
?>
<div class="container">
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
          <tr>
            <th scope="row" class="align-middle">Contabilidade</th>
            <td>
              <a class="link-icon" href="#">
                <ion-icon name="create-outline" size="large"></ion-icon>
              </a>
              <a class="link-icon ms-3" href="#">
                <ion-icon name="trash-outline" size="large"></ion-icon>
              </a>
            </td>
          </tr>
          <tr>
            <th scope="row" class="align-middle">Desenvolvimento de Sistemas</th>
            <td>
              <a class="link-icon" href="#">
                <ion-icon name="create-outline" size="large"></ion-icon>
              </a>
              <a class="link-icon ms-3" href="#">
                <ion-icon name="trash-outline" size="large"></ion-icon>
              </a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php
include_once('templates/footer.php');
?>
<?php 
     include_once("templates/header.php");
?>
  <div class="container">
    <div class="row  mt-4">

      <div class="col-md-12">
        <table class="table">
          <thead>
            <tr class="font-">
              <th scope="col">Curso</th>
              <th scope="col">Pública</th>
              <th scope="col">Particular</th>
              <th scope="col">Total</th>
              <th scope="col">Listar</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row" class="align-middle">Contabilidade</th>
              <td >100</td>
              <td>100</td>
              <td>200</td>
              <td><a class="link-icon" href="#"><ion-icon name="newspaper-outline"></ion-icon></a></td>
            </tr>
            <tr>
              <th scope="row" class="align-middle">Desenvolvimento de Sistemas</th>
              <td>100</td>
              <td>100</td>
              <td>200</td>
              <td><a class="link-icon" href="#"><ion-icon name="newspaper-outline"></ion-icon></a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<?php 
  include_once('templates/footer.php');
?>
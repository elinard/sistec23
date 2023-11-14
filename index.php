<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SISTEC 2023</title>
  <!-- icon -->
  <link rel="shortcut icon" href="icon/favicon.ico" type="image/x-icon" />
  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">

  <!-- JS -->
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script defer src="js/bootstrap.bundle.js"></script>
  <script defer src="js/bootstrap.js"></script>
  <script defer src="js/bootstrap.esm.js"></script>

  <!-- ICONS -->
  <script defer type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script defer nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<!--  -->

<body>
  <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <!-- Navbar content -->
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><ion-icon name="home"></ion-icon></a>
      
    </div>
  </nav>
  <div class="container">
    <div class="row  mt-4">
      <div class="col-md-4">
        <div class="d-grid gap-2">
          <button type="button" class="btn btn-outline-secondary btn-lg">
            <ion-icon name="person-add-sharp"></ion-icon> Candidado
          </button>
        </div>
        <div class="d-grid gap-2 mt-2">
          <button type="button" class="btn btn-outline-secondary btn-lg">
            <ion-icon name="briefcase-sharp"></ion-icon> Curso
          </button>
        </div>
      </div>
      <div class="col-md-8">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Curso</th>
              <th scope="col">Pública</th>
              <th scope="col">Particular</th>
              <th scope="col">Total</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr>
              <th scope="row">Contabilidade</th>
              <td>100</td>
              <td>100</td>
              <td>200</td>
              <td><a href="#"><ion-icon name="newspaper-outline"></ion-icon></a></td>
            </tr>
            <tr>
              <th scope="row">Desenvolvimento de Sistemas</th>
              <td>100</td>
              <td>100</td>
              <td>200</td>
              <td><a href="#"><ion-icon name="newspaper-outline"></ion-icon></a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
  <!-- FOOTER -->
  <footer class="footer py-1 fixed-bottom bg-secondary">

    <div class="container">
      <span class=""><i class="fas fa-school"></i> EEEP Comendador Miguel Gurgel</span> <small class="float-right">&copy; Copyright 2023, Elinardy Andrade</small>
    </div>

  </footer>
</body>

</html>
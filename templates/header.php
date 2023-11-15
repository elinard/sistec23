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
  <script defer src="js/script.js"></script>

  <!-- ICONS -->
  <script defer type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script defer nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<!--  -->
<?php 
include("process/conn.php");
$msg = "";

if(isset($_SESSION['msg'])){
    $msg = $_SESSION['msg'];
    $status = $_SESSION['status'];
    //limpar a msg após mostra-la
    $_SESSION['msg'] = "";
    $_SESSION['status'] = "";

}
?>
<body>
  <header>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
      <!-- Navbar content -->
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <ion-icon name="home"></ion-icon>
          <span class="align-top">Home</span>
        </a>
        <a class="navbar-brand" href="candidato.php">
          <ion-icon name="person-add-sharp"></ion-icon>
          <span class="align-top">Candidadto</span>
        </a>
        <a class="navbar-brand" href="curso.php">
          <ion-icon name="briefcase-sharp"></ion-icon>
          <span class="align-top">Curso</span>
        </a>
        <a class="navbar-brand" href="selecao.php">
          <ion-icon name="calendar-sharp"></ion-icon>
          <span class="align-top">Seleção</span>
        </a>
        <a class="navbar-brand" href="#">
          <ion-icon name="filter-circle"></ion-icon>
          <span class="align-top">Resultado</span>
        </a>
      </div>
    </nav>
  </header>
  <?php 
    if($msg !=""): ?>
      <div class="col-md-10 offset-md-1 alert alert-<?=$status ?> alert-dismissible fade show" role="alert">
       <ion-icon name="checkmark-circle-outline"></ion-icon>
        <span class="align-top"><?= $msg ?></span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

  <?php endif; ?>
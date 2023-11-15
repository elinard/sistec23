<?php
include_once("conn.php");

$method = $_SERVER['REQUEST_METHOD'];

if (isset($_POST["type"])) {
    $type = $_POST["type"];
    $id_curso = $_POST["id_curso"];
} else {
    $type = "";
    $id_curso = "";
}

//Resgate dos dados dos cursos
if ($method === 'GET') {
    $cursosQuery = $conn->query("SELECT * FROM cursos;");
    $cursos = $cursosQuery->fetchAll();

    //Criação dos cursos   
} else if ($method === 'POST' and $type === 'delete') {

    $deleteQuery = $conn->prepare("DELETE FROM cursos WHERE ID = :id_curso;");

    $deleteQuery->bindParam(":id_curso", $id_curso, PDO::PARAM_INT);

    $deleteQuery->execute();

    $_SESSION["msg"] = "Curso removido com sucesso!";
    $_SESSION["status"] = "danger";
    // Retorna para página do curso
    header("Location: ../curso.php");
} else if ($method === 'POST') {
    $curso = $_POST['nome_curso'];

    //SALVANDO BORDAS E MASSAS
    $stmt = $conn->prepare("INSERT INTO cursos (nome) VALUES (:nome_curso)");
    //FILTRANDO INPUTS
    $stmt->bindParam(":nome_curso", $curso, PDO::PARAM_STR);
    $stmt->execute();
    //EXIBIR MSG DE SUCESSO
    $_SESSION["msg"] = "Curso cadastrado com sucesso!";
    $_SESSION["status"] = "success";
    // Retorna para página do curso
    header("Location: ../curso.php");
}

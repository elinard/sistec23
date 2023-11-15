<?php 
include_once("conn.php");

$method = $_SERVER['REQUEST_METHOD'];

//Resgate dos dados dos cursos
if($method ==='GET'){
    $cursosQuery = $conn->query("SELECT * FROM cursos;");
    $cursos = $cursosQuery->fetchAll();

//Criação dos cursos   
}else if($method ==='POST'){
    $curso = $_POST['nome_curso'];

        //SALVANDO BORDAS E MASSAS
        $stmt = $conn->prepare("INSERT INTO cursos (nome) VALUES (:nome_curso)");
        //FILTRANDO INPUTS
        $stmt->bindParam(":nome_curso",$curso, PDO::PARAM_STR);
        $stmt->execute();
        //EXIBIR MSG DE SUCESSO
        $_SESSION["msg"] = "Curso cadastrado com sucesso!";
        $_SESSION["status"] = "success";
    }

    // Retorna para página inicial
    header("Location: ../curso.php");



?>
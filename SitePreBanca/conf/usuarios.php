<?php

    require_once "conexao.php";

    $nome = $_POST['nome'];
    $email = $_POST['usuario'];
    $senha = $_POST['senha'];
    $senha_segura = password_hash($senha, PASSWORD_DEFAULT);

    $stmt = $con ->prepare("INSERT INTO usuarios(usuario_nome, usuario_email, usuario_senha)VALUES(?,?,?)");
    $stmt ->bind_param("sss", $nome, $email, $senha_segura);
    $stmt ->execute();

    header("Location:../index.php?cad=ok");
?>
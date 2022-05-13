<?php
    session_start();

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {

        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cargo = $_POST['cargo'];
        $rg = $_POST['rg'];
        $cpf = $_POST['cpf'];



        $sql = "SELECT * FROM vendedor WHERE email = '$email' and senha = '$senha' and cargo = '$cargo' and rg = '$rg' and cpf = '$cpf'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            unset($_SESSION['cargo']);
            unset($_SESSION['rg']);
            unset($_SESSION['cpf']);
            header('Location: index.html');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['cargo'] = $cargo;
            $_SESSION['rg'] = $rg;
            $_SESSION['cpf'] = $cpf;
            header('Location: sistema.php');
        }
    }
    else
    {

        header('Location: index.html');
    }
?>
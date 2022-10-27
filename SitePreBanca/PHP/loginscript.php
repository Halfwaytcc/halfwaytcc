<?php
    //ALTER TABLE usuarios ADD UNIQUE (usu_email);
    session_start(); //inicia a sessão (pode usuar variaveis de sessão)
    $message="";

    if(isset($_POST['senha']) && isset($_POST['usuario'])){
      $senha = $_POST['senha'];

      //$senha_hash = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    
        /*$con = mysqli_connect('localhost:3399','root','','test') or die('Erro!');*/
        $con = mysqli_connect('localhost:3306','root','root','test') or die('Erro!');
        $result = mysqli_query($con,"SELECT * FROM usuarios WHERE usuario_email='" . $_POST["usuario"] . "'");
        $row = mysqli_fetch_array($result);

        
        if(is_array($row)) {
          $_SESSION["id"] = $row['usuario_id'];
          $_SESSION["nome"] = $row['usuario_nome'];
          $senhabd = $row['usuario_senha'];
        } else {
          $message = "Usuário ou Senha Invalida!";
        }



        if (password_verify($senha, $senhabd)) {
          echo 'Deu certo!';
          header("Location:../index.php");
        } else {
            echo 'Erro!';
        }
      }


?>
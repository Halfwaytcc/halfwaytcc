<?php
    session_start();

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.html');
    }
    $logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>


</head>
<style> a{text-decoration: none;}</style>
<body>
    <div class="a">
        <a href="sair.php">Sair</a>
    </div>
    <div>
    <h1>Seja bem-vindo</h1>
    </div>

    </nav>
    <br>
    <?php
     
 
    ?>
    <br>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Sistema de Login</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Londres Imóveis</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="PHP/formdecontato.php">Contato</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sobre</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline my-2 my-sm-0" href="login.php">Login</a>
    </form>
  </div>
</nav>

<?php
  if(isset($_GET['cad']) == 1){
?>
  <!-- CADASTRO DE USUARIO -->
<div>
  <div class="login-box">
    <form class="formu-ca" method="post" action="conf/usuarios.php">
    <div class="form-dentro">
      <h2 class="LoginT" ><b>Cadastrar Usuário</b></h2>
        <input class="textinho" type="email" name="usuario" required="" placeholder="Email">
      </div>
    <div>
        <input class="textinho" type="text" name="nome" required="" placeholder="Nome">
      </div>
      <div>
        <input class="textinho" type="password" name="senha" required="" placeholder="Senha">
      </div>

      <button class="bt">CADASTRAR</button>

      <a class="link-log" href="login.php">Voltar</a>

  </div>  

  </form>
  <div><?php /*if($message!="") { echo $message; } */?></div>
</div>

<?php
  }else if(isset($_GET['cad']) && $_GET['cad'] == 'ok'){
?>
<script>alert("Usuario Cadastrado co Sucesso!")</script>
<?php
  }else{
?>
  <div class="login-box">
  <form class="formu" method="post" action="PHP/loginscript.php">
    <div class="form-dentro">
      <h2 class="LoginT"><b>Sistema de Login</b> </h2>
      <div>
        <input class="textinho" type="email" name="usuario" required="" placeholder="Usuário">
      </div>
      <div>
        <input class="textinho" type="password" name="senha" required="" placeholder="Senha">
      </div>

      <button class="bt">ENTRAR</button>
      <a href="login.php?cad=1" class="link-cad">Novo Usuário</a>
    </div>
  </form>
  
  <div><?php /*if($message!="") { echo $message; }*/ ?></div>
  
</div>
<?php } ?>

</body>
</html>


<!-- Usuario e email no login, armazenar em váriavel e no sql colocar um ou outro. -->
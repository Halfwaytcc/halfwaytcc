<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/contato.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Londres Imóveis</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../PHP/formdecontato.php">Contato</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sobre</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline my-2 my-sm-0" href="../login.php">Login</a>
    </form>
  </div>
</nav>


<div class="form">

 <form class="formu-con" action="https://api.staticforms.xyz/submit" method="post">

        <input class="Texto" type="hidden" name="accessKey" value="b9be8b92-808d-47c3-b199-9fb97d1e475b"><br><br>
        <input class="Texto" type="text" name="name" placeholder="Nome"><br><br>
        <input class="Texto" type="text" name="subject" placeholder="Assunto"><br><br>
        <input class="Texto" type="text" name="email" placeholder="Seu email"><br><br> 
        <input class="Texto" type="text" name="phone" placeholder="Telefone"><br><br> 
        <input class="Texto2" name="message" placeholder="Mensagem"> 
        <!-- <input type="hidden" name="redirectTo" value="https://google.com/%22%3E"> --> 
        <input class="bt" type="submit" value="Enviar" />
</form>


</body>
</div>
</html>
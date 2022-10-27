<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/menu.css">
    <title>Londres Imoveis | Inicio</title>
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
        <a class="nav-link" href="#">Home <span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="PHP/formdecontato.php">Contato</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="PHP/sobrenos.php">Sobre</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-outline my-2 my-sm-0" href="login.php">Login</a>
    </form>
  </div>
</nav>

    <div class="texto">
        <p><b>Comprar seu imóvel e ter um cantinho só seu!</b></p>
    </div>

    <div class="conteiner">
        <div class="card">
            <img src="Imagens/Casa1.jpg">
            <h4>Casa</h4>
            <p>Rua Tupicos dos Laranjais</p>
            <p>210m² | 2 Quartos</p>
        </div>

        <div class="card">
            <img src="Imagens/Casa2.png">
            <h4>Casa</h4>
            <p>Rua Amarilho Fernando</p>
            <p>270m² | 3 Quartos</p>
        </div>

        <div class="card">
            <img src="Imagens/Ap1.jpg">
            <h4>Apartamento</h4>
            <p>Rua Itaipá de Noronha</p>
            <p>110m² | 2 Quartos</p>
        </div>
    </div>


    <a class="botao-voltar" href="#top">
        <img src="Imagens/3671736_cheveron_up_icon.png">
    </a>

    <script src="menu.js"></script>

</body>
</html>
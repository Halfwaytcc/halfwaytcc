<form action="#" method="POST">
    <input type="password" name="senha">
    <button>Criptografar</button>
</form>


<?php

if(isset($_POST['senha'])){
    $senha = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);
    $senha_segura = password_hash($senha, PASSWORD_DEFAULT);


echo "<h2>$senha</h2>";
echo "<h2>$senha_segura</h2>";

}
?>
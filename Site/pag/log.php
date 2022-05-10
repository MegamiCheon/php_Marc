<?php
    require("../template/header.php");

    //Isset verifica se o arquivo ta vazio
    if(isset($_COOKIE['nome'])){
        echo "<h2>Olá</h2>".$_COOKIE['nome']."</h2>";
    } else {
        echo "<h2>Não tem informação no cookie</h2>"
    }

?>

<form action="" method="post">
    <fieldset>
        <legend>Login</legend>
        <label for="email">E-mail:</label>
        <input type="mail" name="email"><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha"><br>

        <input type="submit" value="Entrar">

    </fieldset>
</form>

<?php
    require("../template/footer.php");
?>
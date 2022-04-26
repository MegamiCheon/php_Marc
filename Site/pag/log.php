<?php
    require("../template/header.php");
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
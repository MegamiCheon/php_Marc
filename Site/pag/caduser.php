<?php
    require("../template/header.php");
?>

<h1>Cadastro D Usuário</h1>

<form action="" method="post">
<fieldset>
    <label for="email">E-mail</label>
    <input type="mail" name="email"><br>

    <label for="nome">Nome:</label>
    <input type="text" name="nome"><br>

    <label for="fone">Telefone:</label>
    <input type="text" name="fone"><br>

    <label for="senha">Senha:</label>
    <input type="password" name="pass"><br>
</fieldset>
<fieldset>
    <input type="checkbox" name="adm" value="ADM"><br>
    <input type="submit" value="Cadastrar">
    <input type="reset" value="Limpar">
</fieldset>
</form>

<?php
    require("../template/footer.php");
?>
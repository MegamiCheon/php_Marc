<?php
    require("../template/header.php");

    $email = $senha = "";
    $emailerr = $senhaerr = "";

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (empty($_POST['email'])){
            $emailerr = "Email é obrigatório";
        } else {
            $email = test_input($_POST["email"]);
        }
        if (empty($_POST['senha'])){
            $senhaerr = "Senha é obrigatória";
        } else {
            $senha = test_input($_POST['senha']);
        }
    }

    // código para consultar os dados no banco de dados

?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <fieldset>
        <legend>Login</legend>
        <label for="email">E-mail:</label>
        <input type="mail" name="email" value=<?php echo $email; ?>>
        <span>*<?php echo $emailerr?></span><br>
        

        <label for="senha">Senha:</label>
        <input type="password" name="senha" value=<?php echo $senha; ?>>
        <span>*<?php echo $senhaerr?></span><br>

        <input type="submit" value="Entrar"><br>
        <a href="caduser.php" target="_blank">Cadastrar</a>

    </fieldset>
</form>

<?php
    require("../template/footer.php");
?>
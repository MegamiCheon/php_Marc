<?php
    require("../template/header.php");
    require("../include/MySQL.php");
    require("../include/function.php");

    $email = $senha = "";
    $emailerr = $senhaerr = "";

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

    // código para consultar os dados no banco de dados
    // Inserir no banco de dados
    $sql = $pdo->prepare("SELECT * FROM user WHERE email = ? AND senha = ?");
    if ($sql->execute(array($email, MD5($senha)))){
        $info = $sql->fetchAll(PDO::FETCH_ASSOC);
        if (count($info)>0){
            header('location:listuser.php');
        } else {
            echo '<h6>Email de Usuário não cadastro</h6>';
        }
    }
    }

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
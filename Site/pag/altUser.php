<?php
include "../include/MySQL.php";
include "../include/function.php";

$code; 
$email = $senha = $nome = $fone = $adm = "";
$emailerr = $senhaerr = $nomeerr = $foneerr = $msgerr = "";

if(isset($_GET['code'])){
    $code = $_GET['code'];
    $sql = $pdo -> prepare('SELECT * FROM user WHERE code =?');
    if ($sql->execute(array($code))){
        $info = $sql->fetchAll(PDO::FETCH_ASSOC);
        foreach($info as $key => $value){
            $code = $value['code'];
            $nome = $value['nome'];
            $email = $value['email'];
            $fone = $value['telefone'];
            $senha = $value['senha'];
            $adm = $value['adm'];
        }
    }
}

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['cad'])){
    if (!empty($_POST['code'])){
        $code = test_input($_POST["code"]);
    }    
    if (empty($_POST['email'])){
        $emailerr = "Email é obrigatório";
    } else {
        $email = test_input($_POST["email"]);
    }
    if(empty($_POST['nome'])){
        $nomeerr = "Nome é obrigatório";
    } else {
        $nome = test_input($_POST['nome']);
    }
    if(empty($_POST['fone'])){
        $foneerr = "Telefone é obrigatório";
    } else {
        $fone = test_input($_POST['fone']);
    }
    if (empty($_POST['senha'])){
        $senhaerr = "Senha é obrigatória";
    } else {
        $senha = test_input($_POST['senha']);
    }
    if (empty($_POST['adm'])){
        $adm = false;
    } else {
        $adm = true;
    }

    if($email && $senha && $nome && $fone){
        $sql = $pdo ->prepare("SELECT * FROM user WHERE email = ? AND code <> ?");
        if ($sql->execute(array($email, $code))) {

            if($sql->rowCount()>0){
                $msgerr = "Email já cadastrado para outro usuário";
            } else {
                $sql = $pdo->prepare("UPDATE user SET nome=?, email=?, senha=?, telefone=?, adm=? WHERE code=?");
                if ($sql->execute(array($nome, $email, $senha, $fone, $adm, $code))){
                    $msgerr = "Dados alterados com sucesso";
                } else {
                    $msgerr = "Dados não alterados";
                }
            }

        }
    } else {
        $msgerr = "Dados não informados";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cadastro de Usuário</title>
<link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

<?php 

require("../template/header.php");

?>

<h1>Cadastro De Usuário</h1>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<fieldset>

<label for="code">Código: </label>
<input type="text" name="code" value="<?php echo $code?>" readonly><br>

<label for="email">E-mail</label>
<input type="mail" name="email" value=<?php echo $email; ?>>
<span>*<?php echo $emailerr?></span><br>

<label for="nome">Nome:</label>
<input type="text" name="nome" value=<?php echo $nome; ?>>
<span>*<?php echo $nomeerr?></span><br>

<label for="fone">Telefone:</label>
<input type="text" name="fone" value=<?php echo $fone; ?>>
<span>*<?php echo $foneerr?></span><br>

<label for="senha">Senha:</label>
<input type="password" name="senha" value=<?php echo $senha; ?>>
    <span>*<?php echo $senhaerr?></span><br>
<input type="checkbox" name="adm" value="ADM">
<label for="adm">Administrador</label><br>
</fieldset>
<fieldset>
<input type="submit" value="Cadastrar" name="cad">
<input type="reset" value="Limpar">
<span>*<?php echo $msgerr?></span><br>
</fieldset>
</form>

<?php
require("../template/footer.php");
?>
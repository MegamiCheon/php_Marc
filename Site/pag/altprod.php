<?php
include "../include/MySQL.php";
include "../include/function.php";

$codprod; 
$nom = $desc = $valor = $msg = "";
$nomerr = $descerr = $valorerr = $msgerr = "";

if(isset($_GET['codprod'])){
    $code = $_GET['codprod'];
    $sql = $pdo -> prepare('SELECT * FROM product WHERE codprod =?');
    if ($sql->execute(array($codprod))){
        $info = $sql->fetchAll(PDO::FETCH_ASSOC);
        foreach($info as $key => $value){
            $codprod = $value['codprod'];
            $nom = $value['nomeprod'];
            $desc = $value['descprod'];
            $valor = $value['valorprof'];
        }
    }
}

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['cad'])){
    if (isset($_POST['codprod'])){
        $code = $_POST["codprod"];
    }    
    if(empty($_POST['nomeprod'])){
        $nomerr = "Nome é obrigatório";
    } else {
        $nom = test_input($_POST['nomeprod']);
    }
    if(empty($_POST['descprod'])){
        $descerr = "Descrição é obrigatória";
    } else {
        $desc = test_input($_POST['descprod']);
    }
    if (empty($_POST['valorprod'])){
        $valorerr = "Valor é obrigatório";
    } else {
        $valor = test_input($_POST['valorprod']);
    }

    if($nom && $desc && $valor){
        $sql = $pdo ->prepare("SELECT * FROM product WHERE nomeprod = ? AND codprod <> ?");
        if ($sql->execute(array($nom, $codprod))) {

            if($sql->rowCount()>0){
                $msgerr = "Produto já cadastrado";
            } else {
                $sql = $pdo->prepare("UPDATE product SET nomeprod=?, descprod=?, valorprod=?, imagens=?, WHERE codprod=?");
                if ($sql->execute(array($nom, $desc, $valor, $codprod))){
                    $msgerr = "Dados alterados com sucesso";
                    header ('location: listprod.php');
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Altualizar Produto</title>
</head>
<body>

<?php 

require("../template/header.php");

?>

<h1>Cadastro De Produto</h1>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<fieldset>
    <label for="nome">Nome do Produto:</label>
    <input type="text" name="nome" value=<?php echo $nom; ?>>
    <span>*<?php echo $nomerr?></span><br>

    <label for="desc">Descrição do Produto:</label>
    <input type="text" name="desc" value=<?php echo $desc; ?>>
    <span>*<?php echo $descerr?></span><br>

    <label for="valor">Valor do Produto:</label>
    <input type="text" name="valor" value=<?php echo $valor; ?>>
        <span>*<?php echo $valorerr?></span><br>
</fieldset>
<fieldset>
    <input type="submit" value="Cadastrar" name="cad">
    <input type="reset" value="Limpar">
    <span>*<?php echo $msgerr?></span><br>
</fieldset>
</form>

<button><a href="listuser.php">Voltar a lista de usuários</a></button>

<?php
require("../template/footer.php");
?>

</body>
</html>
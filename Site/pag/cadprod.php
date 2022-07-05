<?php
    include '../include/MySQL.php';

    $nom = $desc = $valor = $msg = "";
    $nomerr = $descerr = $valorerr = $msgerr = "";

    $msgErro = "";
    if(isset($_POST['submit'])){
        if (!empty($_FILES['imagens']['name'])){
            $fileName = basename($_FILES['imagens']['name']);
            $fileType = pathinfo($fileName, PATHINFO-EXTENSIONS);
            $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

            if (in_array($fileType, $allowTypes)){
                $image = $_FILES['imagens']['tmp_name'];
                $imgContent = file_get_contents($image);

                if(empty($_POST['nomeprod'])){
                        $nomrr = "Nome é obrigatório";
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

                 //Inserir no banco de dados
                     $sql = $pdo->prepare("INSERT INTO PRODUCT (codprod, nomeprod, descprod, valorprod, imagens)
                                         VALUES (null, ?, ?, ?, ?)");
                     if ($sql->execute(array($nom, $desc, $desc, $imgContent))){
                        $msgErro = "Dados cadastrados com sucesso!";
                 } else {
                    $msgErro = "Dados não cadastrados!";
                 } else {
                $msgErro = "Desculpe, mas apenas JPG, JPEG, PNG e GIF permitidos";
            } else {
                $msgErro = "Selecione uma imagem para upload";
        }
    }
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
    <title>Registro</title>
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

    <label for="imagem">Imagem:</label>
    <input type="file" name="image"><br>
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

</body>
</html>
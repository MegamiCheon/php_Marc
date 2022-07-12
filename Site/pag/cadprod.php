<?php
    include '../include/function.php';
    include '../include/MySQL.php';

    $msgErro = "";
    $descricao = $nome = "";
    $valor = 0;

    if (isset($_POST["submit"])){
        if (!empty($_FILES["image"]["name"])){
            //Pegar informações
            $fileName = basename($_FILES["image"]["name"]);
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
            //Permitir somente alguns formatos
            $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

            if (in_array($fileType, $allowTypes)){
                $image = $_FILES['image']['tmp_name'];
                $imgContent = file_get_contents($image);

                if (isset($_POST['nomeprod'])){
                    $nome = $_POST['nomeprod'];
                } else {
                    $nome = "";
                }
                if (isset($_POST['descprod'])){
                    $descricao = $_POST['descprod'];
                } else {
                    $descricao = "";
                }
                if (isset($_POST['valorprod'])){
                    $valor = $_POST['valorprod'];
                } else {
                    $valor = "";
                }

                //Gravar no banco
                $sql = $pdo->prepare("INSERT INTO PRODUCT (codprod, nomeprod, descprod, valorprod, imagens)
                                      VALUES (null, ?,?,?,?)");
                if ($sql->execute(array($nome, $descricao, $valor, $imgContent))){
                    $msgErro = "Dados cadastrados com suscesso!";
                } else {
                    $msgErro = "Dados não cadastrados!";
                }

                } else {
                    $msgErro = "Desculpe, mas somente arquivos JPG, JPEG, PNG e GIF são permitidos";
                }
                } else {
                    $msgErro = "Selecione uma imagem para upload";
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

<body>
    <form method="post" enctype="multipart/form-data">
    <label for="nome">Nome: </label>  
    <input type="text" name="nomeprod"><br>
    <label for="Desc">Descrição: </label>
    <input type="text" name="descprod"><br>
    <label for="Val">Valor: </label>
    <input type="text" name="valorprod"><br>
    <label for="Img">Imagem:</label><br>
    <input type="file" name="imagens"/><br>
        <input type="submit" name="submit" value="Salvar" />
    </form>
</body>

<?php
    require("../template/footer.php");
?>

</body>
</html>
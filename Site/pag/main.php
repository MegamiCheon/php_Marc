<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Home</title>
</head>
<body>
<?php

require("../template/header.php");

?>

    <h2>
        Olá <?php echo $_SESSION['nome']?><br></h2><br>
        <h3>Você é admin?<br> <?php
        
        if($_SESSION['adm']==1) echo "<a href='listuser.php'>lista de usuários</a><br><a href='listprod.php'>lista de produtos</a><a href='cadprod.php>Cadastro de Produtos</a>"; else echo"<h4><br>Não</h4>";?></h3><br>
        <button><a href="logout.php">Encerrar Sessão</a></button>

    <?php

require("../template/footer.php");

?>

</body>
</html>
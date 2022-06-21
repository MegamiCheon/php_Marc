<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
<?php

require("../template/header.php");

?>

    <h1>Página principal</h1>
    <h2>
        Olá <?php echo $_SESSION['nome']?><br></h2>
        <h3>Você é admin? <?php if($_SESSION['adm']==1) echo "<br>Acesse a lista de usuários clicando no link a seguir: <a href='listuer.php'>lista de usuários</a>"; else echo"<h4><br>Não</h4>";?></h3>

<?php

require("../template/footer.php");

?>

</body>
</html>
<?php 
    require('header.php')
?>

<form action="receber.php" method="get">
    <h1>O que você achou do site?</h1>
    <input type="checkbox" name="apro" value="MB"> Muito bom 
    <input type="checkbox" name="apro" value="B"> Bom 
    <input type="checkbox" name="apro" value="R"> Regular 
    <input type="checkbox" name="apro" value="UL"> Um Lixo <br>

    <h1>Qual a seção que você mais gostou?</h1>
--------------------------------------------------------------------------
    <label for="nome">Nome: </label>
    <input type="text" name="nome"><br>

    <label for="senha">Senha: </label>
    <input type="text" name="senha"><br>

    

    <input type="submit" value="Enviar">
</form>

<?php 
    require('footer.php')
?>
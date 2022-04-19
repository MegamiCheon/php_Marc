<?php 
    require('header.php')
?>
    <form action="receber.php" method="get">
    <label for="nome">Nome: </label>
    <input type="text" name="nome"><br>

    <label for="senha">Senha: </label>
    <input type="text" name="senha"><br>

    <input type="checkbox" name="est" value="Estudante"> Estudante <br>

    <input type="submit" value="Enviar">
    </form>

<?php 
    require('footer.php')
?>
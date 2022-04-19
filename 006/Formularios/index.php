<?php 
    require('header.php')
?>


<form action="receber.php" method="get">
    <h1>O que você achou do site?</h1>
    <input type="radio" name="apro" value="MB"> Muito bom 
    <input type="radio" name="apro" value="B"> Bom 
    <input type="radio" name="apro" value="R"> Regular 
    <input type="radio" name="apro" value="UL"> Um Lixo <br>

    <h1>Qual a seção que você mais gostou?</h1>
    <select name="film" id="film">
        <option value="sel">Selecione</option>
        <option value="lan">Em Lançamento</option>
        <option value="esp">Em Cartaz</option>
        <option value="old">Old</option>
    </select>
    <label for="outra">Outra: </label>
    <input type="text" name="outra"><br>

    <h1>Digite seus comentários no campo abaixo:</h1>
    <textarea name="comt" id="comt" cols="30" rows="10"></textarea><br>

    <h1>Diga-nos como entrar em contato com você: </h1>
    <label for="nome">Nome: </label>
    <input type="text" name="nome"><br>
    <label for="email">E-mail: </label>
    <input type="email" name="email"><br>
    <label for="fone">Telefone: </label>
    <input type="text" name="fone"><br>

    <input type="checkbox" name="sim"> Quero receber as novidades do site por e-mail.<br>

    <!-- <label for="senha">Senha: </label>
    <input type="text" name="senha"><br> -->

    
    <input type="submit" value="Enviar Dados">
    <input type="reset" value="Limpar Formulário">
</form>

<?php 
    require('footer.php')
?>
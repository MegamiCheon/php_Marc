<?php 
    require('header.php')
?>

<form action="receber.php" method="get" align=center>
    <h1>O que você achou do site?</h1>
    <input type="radio" name="apro" value="Um Lixo"> Um Lixo
    <input type="radio" name="apro" value="Ruim"> Regular
    <input type="radio" name="apro" value="Bom"> Bom
    <input type="radio" name="apro" value="Muito Bom"> Muito Bom <br>

    <h1>Qual a seção que você mais gostou?</h1>
    <select name="film" id="film">
        <option value="Selecione">Selecione</option>
        <option value="Em Lançamento">Em Lançamento</option>
        <option value="Em Cartaz">Em Cartaz</option>
        <option value="Old">Old</option>
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

    <input type="checkbox" name="yon" value="sim"> Quero receber as novidades do site por e-mail.<br>

    <input type="submit" value="Enviar Dados">
    <input type="reset" value="Limpar Formulário">
</form>

<?php 
    require('footer.php')
?>
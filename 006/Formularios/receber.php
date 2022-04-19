<?php 

   $nome = filter_input(INPUT_GET, 'nome');
   $senha = filter_input(INPUT_GET, 'senha');

    if ($nome){
        echo "Nome: ".$nome;
    } else {
        echo "Nome: Inválido";
    } echo "<br>";

    if ($senha){
        echo "Nome: ".$senha;
    } else {
        echo "Nome: Inválido";
    } echo "<br>";

//    echo "Nome: ".$nome."<br>";
//    echo "Senha: ".$senha

?>
<?php 

   $nome = filter_input(INPUT_GET, 'nome');
   $senha = filter_input(INPUT_GET, 'senha');
   $check = filter_input(INPUT_GET, 'est');

    if ($nome && $senha){
        echo "Nome: ".$nome."<br>";
        echo "Senha: ".$senha."<br>";
    } else {
        echo "Valores Inválidos";
    } echo "<br>";

    if ($check){
        echo "Cargo: ".$check;
    } else {
        echo "Ele não é estudante";
    }
    
//    echo "Nome: ".$nome."<br>";
//    echo "Senha: ".$senha

?>
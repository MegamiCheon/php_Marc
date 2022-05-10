<?php

    echo "<h1>Exemplo Cookie</h1>";

    $nome = "Laiz Detros";
    $email = filter_input(INPUT_POST, 'email');


    setcookie("nome", $nome, time() + (85400*30)); // 30 dias
    setcookie("idade", 16, time() +60); //1 minuto
    setcookie("email", $email, time() + (85400*30));
    

?>
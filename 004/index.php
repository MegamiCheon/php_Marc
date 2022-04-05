<?php 

    /* echo "Aula php <br>";
    print("Receita de bolo");

    $incgredientes=[
        'açucar',
        'trigo',
        'ovos',
        'leite',
        'azeite',
        'fermento'
    ];

    echo $ingredientes[0]. "<br>";
    echo $ingredientes[1]. "<br>";
    echo $ingredientes[2]. "<br>";
    echo $ingredientes[3]. "<br>";
    echo $ingredientes[4]. "<br>";
    echo $ingredientes[5]. "<br>"; */

    // Condicional alternario

    $age = 16;

    $result = ($age > 18)?'Maior de idade':'Menor de idade';
    echo $result;

    // Segundo exemplo

    $menor = ($age <= 18)?true:false;
    if($menor){
        echo'Maior de idade';
    } else {
        echo'Menor de idade';
    }

?>
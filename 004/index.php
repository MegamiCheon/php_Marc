<?php 

    // php 10x10 hífens

    $num=0;

    for($num =0 ; $num < 10; $num++){
        for ($v=0; $v<10; $v++){
            echo '-';
        }
        echo '<br>';
    } 

    /*$type = 'photo';

    switch($type){
        case 'photo':echo'exibindo uma foto';break;
        case 'video':echo'exibindo um video';break;
        case 'texto':echo'exibindo um texto';break;
        default:echo 'valor invalido';break;

    }

    if ($type == 'photo'){
        echo 'exibindo uma foto';
    }
    if ($type == 'video'){
        echo 'exibindo um video';
    }
    if ($type == 'text'){
        echo 'exibindo um texto';
    }
    
    /* $nome = 'Laiz';
    $sobrenome = 'Detros';

    // teste condicional

    $fullname = $nome;
    $fullname .= isset($sobrenome)?$sobrenome:''; // 1ª forma
    $fullname .= $sobrenome ?? ''; //1ª forma

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
    echo $ingredientes[5]. "<br>";

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
    }*/

?>
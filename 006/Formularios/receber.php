<?php 

    $prov = filter_input(INPUT_GET, 'apro');
    $fil = filter_input(INPUT_GET, 'film');
    $other = filter_input(INPUT_GET, 'outra');
    $commt = filter_input(INPUT_GET, 'comt');
    $nome = filter_input(INPUT_GET, 'nome');
    $email = filter_input(INPUT_GET, 'email');
    $fone = filter_input(INPUT_GET, 'fone');
    $check = filter_input(INPUT_GET, 'yon');

    echo '<link rel="stylesheet" href="style.css">';
    echo "<center>";

// AVALIAÇÃO

    if ($prov){
        echo "<h2>Nota:</h2><br>";
        echo "Selecionou: ".$prov;
    } else {
        echo "<h2>Nota:</h2><br>";
        echo "Não deu nota para o site";
    }

// SELECT

    if ($fil) {
        echo "<h2>Interesse:</h2><br>";
        echo "Se interessou em: ".$fil."<br>";
    }

    if ($other) {
        echo "<h2>Interesse:</h2><br>";
        echo "Diz que prefere a categoria: ".$other."<br>";
    }

// COMENTÁRIO

    if ($commt){
        echo "<h2>Comentário:</h2><br>";
        echo "Seu comentário: ".$commt."<br>";
    } else {
        echo "<h2>Comentário:</h2><br>";
        echo "Sem comentário <br>";
    }

// CONTATO

    if ($nome && $email && $fone){
        echo "<h2>Contato:</h2><br>";
        echo "Nome: ".$nome."<br>";
        echo "Email: ".$email."<br>";
        echo "Telefone: ".$fone."<br>";
    } else {
        echo "<h2>Contato:</h2><br>";
        echo "Campos vazios <br>";
     };

// NOVIDADES

     if ($check){
        echo "<h2>Novidades:</h2><br>";
        echo "Quer receber novidades ".$check."<br>";
    } else {
        echo "<h2>Novidades:</h2><br>";
        echo "Não quer receber novidades<br>";
    }

    echo "</center>";

?>
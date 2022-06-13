<?php

    include "../include/MySQL.php";

    if (isset($_GET['code'])){
        $code = $_GET['code'];
        echo "Código: $code";

        $sql = $pdo -> prepare("DELETE FROM user WHERE code=?");
        if ($sql->execute(array($code))){
            echo "Usuário excluído com sucesso";
            header('location:listuser.php');
        } else {
            echo "Erro: Dados não foram excluídos <br>";
            echo "Comando: $sql. <br>";
        }
    }
?>
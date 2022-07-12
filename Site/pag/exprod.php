<?php

    include "../include/MySQL.php";

    if (isset($_GET['codprod'])){
        $code = $_GET['codprod'];
        echo "Código: $code";

        $sql = $pdo -> prepare("DELETE FROM product WHERE codprod=?");
        if ($sql->execute(array($code))){
            echo "Produto excluído com sucesso";
            header('location:listprod.php');
        } else {
            echo "Erro: Dados não foram excluídos <br>";
            echo "Comando: $sql. <br>";
        }
    }
?>
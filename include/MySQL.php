<?php

    define('HOST', 'localhost');
    define('DB', 'EMI');
    define('USER', 'root');
    define('PASS', '');

    try{
        //conexao
        $pdo = new PDO('mysql:host='.HOST.';DBNAME='.DB,
                        USER,
                        PASS,
                        array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'))
        $pdo -> setAttibute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (Exception $e){

    }

?>
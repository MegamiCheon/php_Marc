<?php

    include "../include/MySQL.php";

    if (isset($_GET['code'])){
        $code = $_GET['code'];
        echo "Código: $code";


    }

?>
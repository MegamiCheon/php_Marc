<?php
  
  include "../include/MySQL.php";

  $sql = $pdo -> prepare('SELECT * FROM user');
  if ($sql->execute()){
      $info = $sql->fetchAll(PDO::FETCH_ASSOC);

      foreach($info as $key => $values){
        echo 'Codigos: '.$values['code'].'<br>';
        echo 'Nome: '.$values['nome'].'<br>';
        echo 'Email: '.$values['email'].'<br>';
        echo 'Telefone: '.$values['telefone'].'<br>';
        echo 'Senha: '.$values['senha'].'<br>';
        echo 'Administrador: '.$values['adm'].'<br>';

        echo '<hr><hr>';
      }
  }

?>
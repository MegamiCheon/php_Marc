<?php
  
  include "../include/MySQL.php";

  $sql = $pdo -> prepare('SELECT * FROM user');
  if ($sql->execute()){
      $info = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Código</th>";
    echo "<th>Nome</th>";
    echo "<th>Email</th>";
    echo "<th>Telefone</th>";
    echo "<th>Senha</th>";
    echo "<th>Administrador</th>";
    echo "<th>Alterar</th>";
    echo "<th>Excluir</th>";
    echo "</tr>";

      foreach($info as $key => $values){
        echo "<tr>";
        echo '<td>'.$values['code'].'</td>';
        echo '<td>'.$values['nome'].'</td>';
        echo '<td>'.$values['email'].'</td>';
        echo '<td>'.$values['telefone'].'</td>';
        echo '<td>'.$values['senha'].'</td>';
        echo '<td>'.$values['adm'].'</td>';
        echo '<td></td>';
        echo '<td></td>';
        echo "</tr>";
      }
  }

?>
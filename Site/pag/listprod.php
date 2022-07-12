<?php
  
  include "../include/MySQL.php";

  $sql = $pdo -> prepare('SELECT * FROM product');
  if ($sql->execute()){
      $info = $sql->fetchAll(PDO::FETCH_ASSOC);

    foreach($info as $key=>$values){
      echo "<table border='1'>";
      echo "<tr>";
      echo '<th><img src="data:image/jpg;charset=utf8;base64,'.base64_encode($imagem).'"/></th>'
           "<th>Nome: ".$values['nomeprod']."<br>Preço: ".$values['valorprod']."<Br>Descrição: ".$values['descprod']."</th>";
      echo "</tr>";  
      echo "</table>";
      // echo "<button><a href='main.php'>Voltar para página principal</a></button>";

        $imagem = $values['imagens'];
        // echo '<img src="data:image/jpg;charset=utf8;base64,'.base64_encode($imagem).'"/><br>';
        echo '<hr>';
      }

  }

?>

</body>
</html>
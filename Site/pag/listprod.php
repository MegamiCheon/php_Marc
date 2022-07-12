<?php
  
  include "../include/MySQL.php";

  $sql = $pdo -> prepare('SELECT * FROM product');
  if ($sql->execute()){
      $info = $sql->fetchAll(PDO::FETCH_ASSOC);
  
      foreach($info as $key=>$values){
        echo 'Código: '.$values['codprod'].'<br>';
        echo 'Descrição: '.$values['descprod'].'<br>';
        echo 'Valor: '.$values['valorprod'].'<br>';

        $imagem = $values['imagens'];
        echo '<img src="data:image/jpg;charset=utf8;base64,'.base64_encode($imagem).'"/><br>';
        echo '<hr>';
      }

  }

?>

</body>
</html>
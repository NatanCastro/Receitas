<?php
  require"conecxao.php";

  $nome_receita = $_POST['nome'];
  $desc_receita = $_POST['desc_receita'];
  $id_usuario;
  
  $img_receita = $_POST['img_receita']['tmp_name'];
  $img_tamanho = $_POST['img_receita']['size'];
  

  if ($img_receita != NULL) {
    $fp = fopen($img_receita, 'rb');
    $img_conteudo = addslashes(fread($fp, $img_tamanho));
    fclose($fp);

    try {
      $sql = "INSERT INTO receitas VALUES (null, '$nome_receita', '$desc_receita', '$img_conteudo', $id_usuario)";
    } catch (PDOException $e) {
      echo '<script>Error: '. $e->getMessage() .'</script>';
    }
  }
  else {
    echo 'não foi possivel cadastrar';
  }
?>
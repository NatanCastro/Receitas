<?php
  include"conexao.php";
  $nome_receita = filter_input(INPUT_POST, 'nome_receita', FILTER_SANITIZE_SPECIAL_CHARS);
  $desc_receita = filter_input(INPUT_POST, 'desc_receita', FILTER_SANITIZE_SPECIAL_CHARS);
  $id_usuario   = 0;
  $img_tamanho  = $_FILES['imagem']['size'];
  $img_receita  = $_FILES['imagem']['tmp_name'];
  

  if ($img_receita != NULL) {
    $fp           = fopen($img_receita, 'rb');
    $img_conteudo = addslashes(fread($fp, $img_tamanho));
    fclose($fp);

    try {
      $sql  = "INSERT INTO receitas VALUES (null, '$nome_receita', '$desc_receita', '$img_conteudo', $id_usuario)";
      $stmt = $conn->prepare($sql);
      $stmt->execute(array());

      header('location: ../lista_receitas.php');
    } catch (PDOException $e) {
      echo '<script>Error: '. $e->getMessage() .'</script>';
    }
  }
  else {
    echo '<p>não foi possivel cadastrar</p>';
    echo '<a href="../index.php">inicio</a>';
  }
?>
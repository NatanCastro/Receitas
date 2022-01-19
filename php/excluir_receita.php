<?php
include "conexao.php";
if (isset($_POST['excluir'])) {
  $id = $_POST['id'];

  $sql = "DELETE FROM receitas WHERE id=$id";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  echo "deletado com sucesso";
  header("location: ../lista_receitas.php");
}

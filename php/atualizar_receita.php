<?php
require_once "conexao.php";

if (isset($_POST['editar'])) {
  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $desc_receita = $_POST['desc_receita'];

  $sql = "UPDATE receitas SET nome=?, desc_receita=? WHERE id=?";
  $stmt = $conn->prepare($sql);

  $stmt->bindParam(1, $nome, PDO::PARAM_STR);
  $stmt->bindParam(2, $desc_receita, PDO::PARAM_STR);
  $stmt->bindParam(3, $id, PDO::PARAM_INT);
  $stmt->execute();

  header("location: ../lista_receitas.php");
}

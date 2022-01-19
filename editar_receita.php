<?php
require_once "php/conexao.php";
require_once "includes/head.php";

if (isset($_POST['editar'])) {
  $id = $_POST['id'];

  $sql = "SELECT * FROM receitas WHERE id='$id'";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<div class="flex justify-center">
  <?php foreach ($dados as $registro) { ?>
    <form class="flex flex-col bg-gray-200 gap-y-5 p-5" action="php/atualizar_receita.php" method="post">
      <h2 class="text-center text-2xl font-bold">editar a receita</h2>
      <input type="hidden" name="id" value="
      <?php echo $registro['id'] ?>">
      <input class="w-full p-1" type="text" name="nome" id="nome" value="<?php echo $registro['nome'] ?>" required>
      <textarea class="w-full p-1" name="desc_receita" id="desc_receita" cols="50" rows="10" required>
        <?php echo $registro['desc_receita'] ?>
      </textarea>

      <div class="flex justify-center">
        <input class="text-white bg-orange-400 px-4 py-2" type="submit" value="editar" name="editar">
      </div>
    </form>
  <?php } ?>
</div>
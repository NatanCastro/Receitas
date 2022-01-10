<?php 
  require_once"includes/head.php";
  require"php/conexao.php";

?>
  <table class="border-collapse border-2 border-solid border-orange-500 text-center">
    <thead>
      <tr>
        <th class="w-1/6 border-solid border-2">TITULO</th>
        <th class="w-1/6 border-solid border-2">DESCRIÇÃO</th>
        <th class="w-1/6 border-solid border-2">IMAGEM</th>
        <th class="w-1/6 border-solid border-2">ATUALIZAR</th>
        <th class="w-1/6 border-solid border-2">APAGAR</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $sql   = "SELECT * FROM receitas";
      $stmt  = $conn->prepare($sql);
      $stmt -> execute();
      $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

      foreach ($dados as $registro) {
        ?>
        <tr>
          <td class="w-1/6 border-solid border-2"><?php echo $registro['nome'] ?></td>
          <td class="w-1/6 border-solid border-2"><?php echo $registro['desc_receita'] ?></td>
          <td class="w-1/6 border-solid border-2">
            <img src="data:image/gif; base64, <?php echo base64_encode($registro['img_receita']) ?>" alt="imagem da receita">
          </td>
          <td class="w-1/6 border-solid border-2">
            <form action="alt_receita.php" method="post">
              <input type="hidden" name="id" id="id"
              value="<?php echo $registro['id'] ?>" required>
              <input type="submit" value="Atualizar"
              class="bg-orange-500 px-5 py-2 hover:text-white hover:bg-orange-700 duration-100">
            </form>
          </td>
          <td class="w-1/6 border-solid border-2">
            <form name="formexcluir" action="excluir_receita.php" method="post">
              <input type="hidden" name="id">
              <input type="submit" value="Excluir"
              class="bg-orange-500 px-5 py-2 hover:text-white hover:bg-orange-700 duration-100">
            </form>
          </td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
      <?php
        require"includes/footer.php";
      ?>
</body>
</html>
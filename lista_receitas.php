<?php require_once"includes/head.php" ?>
  <table class="border-collapse flex ">
    <thead>
      <tr>
        <th>TITULO</th>
        <th>DESCRIÇÃO</th>
        <th>IMAGEM</th>
        <th>ATUALIZAR</th>
        <th>APAGAR</th>
      </tr>
    </thead>
    <tbody>
    <?php
      require"php/conexao.php";

      $sql = "SELECT * FROM receitas";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);

      foreach ($dados as $registro) {
        ?>
        <tr>
          <td><?php echo $registro['nome'] ?></td>
          <td><?php echo $registro['desc_receita'] ?></td>
          <td>
            <img src="data:image/gif; base64, <?php echo base64_encode($registro['img_receita']) ?>" alt="imagem da receita">
          </td>
          <td>
            <form action="alt_receita.php" method="post">
              <input type="hidden" name="id" id="id"
              value="<?php echo $registro['id'] ?>" required>
              <input type="submit" value="Atualizar">
            </form>
          </td>
          <td>
            <form name="formexcluir" action="excluir_receita" method="post">
              <input type="hidden" name="id">
              <input type="submit" value="Excluir">
            </form>
          </td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>

</body>
</html>
<?php
  require_once 'includes/head.php'
?>
<main class="flex justify-center">
  <form class="bg-gray-200 gap-y-12 p-5" action="cad-receita.php" method="POST">
    <div class="flex flex-row justify-between">
      <label for="nome">Nome da receita:</label>
      <input class="w-96" id="nome" type="text" name="nome" />
    </div>
    <div class='justify-between'>
      <label class="align-top" for="receita">Receita:</label>
      <textarea class="w-auto" name="receita" id="receita" cols="50" rows="10"></textarea>
    </div>
    <div class="justify-between">
      <label for="imagem">Imagem da receita</label>
      <input type="file" name="imagem" id="imagem">
    </div>
  </form>
</main>

<?php
  require_once 'includes/footer.php'
?>
<?php
  require_once 'includes/head.php'
?>

<main class="flex justify-center">
  <form class="bg-gray-200 p-5" action="php/cad-receita.php" method="POST" enctype="multipart/form-data">
    <div class="mb-5">
      <input class="w-full p-1" id="nome" type="text" name="nome" placeholder="Nome da receita" required/>
    </div>
    <div class="mb-5">
      <textarea class="w-full p-1" name="desc_receita"
      id="desc_receita" cols="50" rows="10" placeholder="descrição da receita" required></textarea>
    </div>
    <div class="mb-8">
      <label class="text-orange-600" for="imagem">Imagem da receita</label>
      <input type="file" name="imagem" id="imagem" required>
    </div>
    <div class=" flex justify-center">
      <input class="text-white bg-orange-400 px-4 py-2"
      type="submit" value="enviar">
    </div>
  </form>
</main>

<?php
  require_once 'includes/footer.php'
?>
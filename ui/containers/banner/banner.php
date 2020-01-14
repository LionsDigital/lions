<section class="banner">
  <div class="banner__conteudo">
    <h1 class="titulo">Lorem ipsum</h1>
    <p class="texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed augue sit amet turpis tincidunt aliquam et ut nisi. Quisque semper nec velit eget rhoncus.</p>
    <?php
      $botao__texto = "Lorem ipsum";
      $botao__link = "#";
      $botao__tipo = "padrao";
      include $diretorio.'/ui/componentes/botao/botao.php';
    ?>
    <?php
      $botao__texto = "Dolor sit";
      $botao__link = "#";
      $botao__tipo = "fantasma";
      include $diretorio.'/ui/componentes/botao/botao.php';
    ?>
  </div>
  <img src="<?= $home; ?>/ui/arquivos/imagens/banner/banner.jpg" alt="">
</section>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
      $site = home_url();
      $diretorio = get_template_directory_uri();
      $menu = include('componentes/menu/menu.php');
    ?>
    <title>LIONS Marketing Digital</title>
    <link rel="stylesheet" href="<?= $diretorio; ?>/componentes/estilo.css">
  </head>
  <body>
    <header>
      <?php $menu; ?>
    </header>

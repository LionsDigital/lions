<?php
  $host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  if ($host == $site.'/') {
    $cor = '-preto';
  } else {
    $cor = '-branco';
  }
?>
<nav class="menu">
  <div class="menu__conteudo">
    <div class="menu__logo">
      <a href="<?= $site; ?>/">
        <img
        src="<?= $diretorio; ?>/arquivos/imagens/logo/logo__horizontal<?= $cor; ?>.png"
        alt="Logo LIONS Marketing Digital"
        srcset="<?= $diretorio; ?>/arquivos/imagens/logo/logo__horizontal<?= $cor; ?>.svg"
        height="100%"
        width="auto"
        />
      </a>
    </div>
    <ul class="menu__itens">
      <li class="menu__item">
        <a href="<?= $site; ?>/">
          Home
        </a>
      </li>
      <li class="menu__item menu__item-quem-somos">
        <a href="<?= $site; ?>/quem-somos">
          Quem somos
        </a>
      </li>
      <li class="menu__item menu__item-servicos">
        <a href="<?= $site; ?>/servicos">
          Serviços
        </a>
      </li>
      <li class="menu__item menu__item-portfolio">
        <a href="<?= $site; ?>/portfolio">
          Portfólio
        </a>
      </li>
      <li class="menu__item menu__item-blog">
        <a href="<?= $site; ?>/blog">
          Blog
        </a>
      </li>
      <li class="menu__item menu__item-contato">
        <a href="<?= $site; ?>/contato">
          Contato
        </a>
      </li>
    </ul>
  </div>
</nav>
<script type="text/javascript" src="<?= $diretorio; ?>/componentes/menu/menu.js"></script>

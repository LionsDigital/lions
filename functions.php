<?php
  /*thumbnail*/
    add_theme_support( 'post-thumbnails' );
  /*menu-de-navegacao*/
    function menu_navegacao() {
      register_nav_menu('header-menu', 'main-menu');
    }
    add_action( 'init', 'menu_navegacao');
  /*trabalho*/
    function post_type_trabalho() {
      $nomeSingular = 'Trabalho';
      $nomePlural = 'Trabalhos';
      $description = 'Portfolio';
      $labels = array(
        'name' => $nomePlural,
        'name_singular' => $nomeSingular,
        'add_new_item' => 'Adicionar novo ' . $nomeSingular,
        'edit_item' => 'Editar ' . $nomeSingular
      );
      $supports = array(
        'title',
        'editor',
        'thumbnail'
      );
      $args = array(
        'labels' => $labels,
        'description' => $descricao,
        'public' => true,
        'menu_icon' => 'dashicons-admin-customizer',
        'supports' => $supports,
        'taxonomies' => array('post_tag'),
      );
      register_post_type( 'trabalho', $args);
    }
    add_action('init', 'post_type_trabalho');

<?php

// Este arquivo é executado toda vez que o tema é carregado

// Adicione o título da página dinamicamente na tag <title>:
// add_theme_support('title-tag');

// Mas preferimos criar uma função onde haverá todas as nossas adições em um determinado momento graças aos hooks.
// Aqui para adições de recursos com add_theme_support

function wlc_supports()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('post-formats', array(
    'aside',
    'image',
    'video',
    'quote',
    'link',
    'gallery',
    'audio',
    'status',
    'chat'
  ));
  register_nav_menus(array(
    'menu-header' => 'Menu header',
    'menu-footer' => 'Menu footer'
  ));
}




// Chamamos a função add_action com o momento em que queremos agir (hook) como o 1º parâmetro e a função declarada em uma string de caracteres como o 2º parâmetro
add_action('after_setup_theme', 'wlc_supports');


/**
 * Prepara todos os estilos CSS e scripts JS no meu projeto e os carrega.
 * Pode-se também adicionar arquivos externos aqui via CDNs (por exemplo, Bootstrap).
 * get_template_directory_uri() retorna dinamicamente o caminho para o tema.
 * @return nulo
 */

// essa é uma function para css e js sem utilizar framework!!!!
function wlc_register_assets()
{
  wp_register_style('style-immob', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('style-immob');

  wp_register_script('scripts-immob', get_template_directory_uri() . '/assets/js/scripts.js', [], false, true);
  wp_enqueue_script('scripts-immob');


  // wp_dequeue_style( 'wp-block-library' ); // Wordpress Core
  // wp_dequeue_style( 'wp-block-library-theme' ); // Wordpress Core
  // wp_dequeue_style( 'wc-block-style' ); // WooCommerce

  wp_dequeue_style('classic-theme-styles');
  wp_dequeue_style('global-styles');
  wp_dequeue_style('wp-block-library'); // Wordpress Core
  wp_dequeue_style('wp-block-library-theme'); // Wordpress Core
  wp_dequeue_style('wc-block-style'); // WooCommerce
  wp_dequeue_style('storefront-gutenberg-blocks'); // Storefront theme
  // Storefront theme
}

add_action('wp_enqueue_scripts', 'wlc_register_assets');

<?php

/** ACF THEME OPTION */
if (function_exists('acf_add_options_page')) :
  acf_add_options_page(array(
    'page_title'   => 'SON Opções',
    'menu_title'  => 'SON Opções',
    'menu_slug'   => 'son-theme-option',
    'capability'  => 'son_theme_option',
    'redirect'    => false
  ));
endif;

// add capability to user
function add_admin_caps_acf()
{
  $admin = get_role('administrator');
  $admin->add_cap('son_theme_option');

  $editor = get_role('editor');
  $editor->add_cap('son_theme_option');
}

add_action('admin_init', 'add_admin_caps_acf');
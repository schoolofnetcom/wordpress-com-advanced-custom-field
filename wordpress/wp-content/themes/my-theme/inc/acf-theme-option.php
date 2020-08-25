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

// if( function_exists('acf_add_local_field_group') ):

//   acf_add_local_field_group(array(
//     'key' => 'group_5f4515711a49e',
//     'title' => 'Opções da página',
//     'fields' => array(
//       array(
//         'key' => 'field_5f4515b297f9f',
//         'label' => 'Descrição',
//         'name' => 'son-page-description',
//         'type' => 'text',
//         'instructions' => '',
//         'required' => 0,
//         'conditional_logic' => 0,
//         'wrapper' => array(
//           'width' => '',
//           'class' => '',
//           'id' => '',
//         ),
//         'default_value' => '',
//         'placeholder' => '',
//         'prepend' => '',
//         'append' => '',
//         'maxlength' => '',
//       ),
//       array(
//         'key' => 'field_5f451877f732e',
//         'label' => 'Imagem do Topo',
//         'name' => 'son-page-top-banner',
//         'type' => 'image',
//         'instructions' => '',
//         'required' => 0,
//         'conditional_logic' => 0,
//         'wrapper' => array(
//           'width' => '',
//           'class' => '',
//           'id' => '',
//         ),
//         'return_format' => 'url',
//         'preview_size' => 'medium',
//         'library' => 'all',
//         'min_width' => '',
//         'min_height' => '',
//         'min_size' => '',
//         'max_width' => '',
//         'max_height' => '',
//         'max_size' => '',
//         'mime_types' => '',
//       ),
//       array(
//         'key' => 'field_5f4519d678fe8',
//         'label' => 'Views',
//         'name' => 'son-page-views',
//         'type' => 'range',
//         'instructions' => '',
//         'required' => 0,
//         'conditional_logic' => 0,
//         'wrapper' => array(
//           'width' => '',
//           'class' => '',
//           'id' => '',
//         ),
//         'default_value' => '',
//         'min' => '',
//         'max' => '',
//         'step' => '',
//         'prepend' => '',
//         'append' => '',
//       ),
//       array(
//         'key' => 'field_5f451a0a78fe9',
//         'label' => 'Tags',
//         'name' => 'son-page-tags',
//         'type' => 'repeater',
//         'instructions' => '',
//         'required' => 0,
//         'conditional_logic' => 0,
//         'wrapper' => array(
//           'width' => '',
//           'class' => '',
//           'id' => '',
//         ),
//         'collapsed' => '',
//         'min' => 0,
//         'max' => 0,
//         'layout' => 'table',
//         'button_label' => '',
//         'sub_fields' => array(
//           array(
//             'key' => 'field_5f451a2778fea',
//             'label' => 'tag',
//             'name' => 'tag',
//             'type' => 'text',
//             'instructions' => '',
//             'required' => 0,
//             'conditional_logic' => 0,
//             'wrapper' => array(
//               'width' => '',
//               'class' => '',
//               'id' => '',
//             ),
//             'default_value' => '',
//             'placeholder' => '',
//             'prepend' => '',
//             'append' => '',
//             'maxlength' => '',
//           ),
//         ),
//       ),
//     ),
//     'location' => array(
//       array(
//         array(
//           'param' => 'post_type',
//           'operator' => '==',
//           'value' => 'page',
//         ),
//       ),
//     ),
//     'menu_order' => 0,
//     'position' => 'normal',
//     'style' => 'default',
//     'label_placement' => 'top',
//     'instruction_placement' => 'label',
//     'hide_on_screen' => '',
//     'active' => true,
//     'description' => '',
//   ));
  
//   acf_add_local_field_group(array(
//     'key' => 'group_5f45207d71aa2',
//     'title' => 'Página de Opções',
//     'fields' => array(
//       array(
//         'key' => 'field_5f452084ae386',
//         'label' => 'Mostrar botão de editar para usuários logados?',
//         'name' => 'son-options-show-edit-button',
//         'type' => 'true_false',
//         'instructions' => '',
//         'required' => 0,
//         'conditional_logic' => 0,
//         'wrapper' => array(
//           'width' => '',
//           'class' => '',
//           'id' => '',
//         ),
//         'message' => '',
//         'default_value' => 0,
//         'ui' => 0,
//         'ui_on_text' => '',
//         'ui_off_text' => '',
//       ),
//       array(
//         'key' => 'field_5f4521a4e7836',
//         'label' => 'Dados de Contato',
//         'name' => 'son-options-contact-info',
//         'type' => 'repeater',
//         'instructions' => '',
//         'required' => 0,
//         'conditional_logic' => 0,
//         'wrapper' => array(
//           'width' => '',
//           'class' => '',
//           'id' => '',
//         ),
//         'collapsed' => '',
//         'min' => 0,
//         'max' => 0,
//         'layout' => 'table',
//         'button_label' => '',
//         'sub_fields' => array(
//           array(
//             'key' => 'field_5f4521dafbcf3',
//             'label' => 'chave',
//             'name' => 'chave',
//             'type' => 'text',
//             'instructions' => '',
//             'required' => 0,
//             'conditional_logic' => 0,
//             'wrapper' => array(
//               'width' => '',
//               'class' => '',
//               'id' => '',
//             ),
//             'default_value' => '',
//             'placeholder' => '',
//             'prepend' => '',
//             'append' => '',
//             'maxlength' => '',
//           ),
//           array(
//             'key' => 'field_5f4521e9fbcf4',
//             'label' => 'valor',
//             'name' => 'valor',
//             'type' => 'text',
//             'instructions' => '',
//             'required' => 0,
//             'conditional_logic' => 0,
//             'wrapper' => array(
//               'width' => '',
//               'class' => '',
//               'id' => '',
//             ),
//             'default_value' => '',
//             'placeholder' => '',
//             'prepend' => '',
//             'append' => '',
//             'maxlength' => '',
//           ),
//         ),
//       ),
//       array(
//         'key' => 'field_5f452263632a2',
//         'label' => 'Redes Sociais',
//         'name' => 'son-options-social',
//         'type' => 'repeater',
//         'instructions' => '',
//         'required' => 0,
//         'conditional_logic' => 0,
//         'wrapper' => array(
//           'width' => '',
//           'class' => '',
//           'id' => '',
//         ),
//         'collapsed' => '',
//         'min' => 0,
//         'max' => 0,
//         'layout' => 'table',
//         'button_label' => '',
//         'sub_fields' => array(
//           array(
//             'key' => 'field_5f452263632a3',
//             'label' => 'rede',
//             'name' => 'rede',
//             'type' => 'text',
//             'instructions' => '',
//             'required' => 0,
//             'conditional_logic' => 0,
//             'wrapper' => array(
//               'width' => '',
//               'class' => '',
//               'id' => '',
//             ),
//             'default_value' => '',
//             'placeholder' => '',
//             'prepend' => '',
//             'append' => '',
//             'maxlength' => '',
//           ),
//           array(
//             'key' => 'field_5f452263632a4',
//             'label' => 'link',
//             'name' => 'link',
//             'type' => 'text',
//             'instructions' => '',
//             'required' => 0,
//             'conditional_logic' => 0,
//             'wrapper' => array(
//               'width' => '',
//               'class' => '',
//               'id' => '',
//             ),
//             'default_value' => '',
//             'placeholder' => '',
//             'prepend' => '',
//             'append' => '',
//             'maxlength' => '',
//           ),
//         ),
//       ),
//     ),
//     'location' => array(
//       array(
//         array(
//           'param' => 'options_page',
//           'operator' => '==',
//           'value' => 'son-theme-option',
//         ),
//       ),
//     ),
//     'menu_order' => 0,
//     'position' => 'normal',
//     'style' => 'default',
//     'label_placement' => 'top',
//     'instruction_placement' => 'label',
//     'hide_on_screen' => '',
//     'active' => true,
//     'description' => '',
//   ));
  
//   endif;



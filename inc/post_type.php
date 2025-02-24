<?php
/*
* Register post types
*/
//Register post types
add_action( 'init', 'register_custom_post_types' );

function register_custom_post_types() {
    //Register taxonomy
      register_taxonomy(
         'seting',
         'seting',
         array(
               'label' =>        'Категорії букетів',
               'hierarchical'               => true,
               'public'                     => true,
               'show_ui'                    => true,
               'show_admin_column'          => true,
               'show_in_nav_menus'          => true,
               'show_in_rest'               => null,
               'rewrite' => array(
                  'slug' => 'seting',
                  'with_front' => false
               )
         )
      );

      $labels = array(
         'name'               => 'Пропозиції букетів',
         'singular_name'      => 'Букети',
         'add_new'            => 'Додати букет',
         'add_new_item'       => 'Додати',
         'edit_item'          => 'Редагувати',
         'new_item'           => 'Нове',
         'view_item'          => 'Переглянути',
         'search_items'       => 'Пошук',
         'not_found'          => 'Не знайдено',
         'not_found_in_trash' => 'Не знайдено у кошику',
         'parent_item_colon'  => '',
         'menu_name'          => 'Букети',
      );

      $args = array(
         'labels'             => $labels,
         'public'             => true,
         'publicly_queryable' => true,
         'show_ui'            => true,
         'show_in_menu'       => true,
         'menu_position'      => 4,
         'query_var'          => true,
         'rewrite'            => true,
         'capability_type'    => 'post',
         'has_archive'        => false,
         'hierarchical'       => false,
         'menu_icon'          => 'dashicons-portfolio',
         'description'        => "('Seting', 'flower')",
         'show_in_rest'       => false,
         'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),

      );
      register_post_type( 'seting', $args );
   }

?>
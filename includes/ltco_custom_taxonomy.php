<?php
function types_units_taxonomy() {
  $labels = array(
    'name'                       => 'Tipos de unidades',
    'singular_name'              => 'Tipo de Unidade',
    'menu_name'                  => 'Tipos de unidades',
    'all_items'                  => 'Todos os tipos de unidades',
    'parent_item'                => 'Tipo de unidade pai',
    'parent_item_colon'          => 'Tipo de unidade pai:',
    'new_item_name'              => 'Novo tipo de unidade',
    'add_new_item'               => 'Adicionar novo tipo de unidade',
    'edit_item'                  => 'Editar tipo de unidade',
    'update_item'                => 'Atualizar tipo de unidade',
    'view_item'                  => 'Ver tipo de unidade',
    'separate_items_with_commas' => 'Separe os tipos de unidades com vírgulas',
    'add_or_remove_items'        => 'Adicionar ou remover tipos de unidades',
    'choose_from_most_used'      => 'Escolha entre os mais usados',
    'popular_items'              => 'Tipos de unidades populares',
    'search_items'               => 'Pesquisar tipos de unidades',
    'not_found'                  => 'Nenhum tipo de unidade encontrado',
    'no_terms'                   => 'Nenhum tipo de unidade',
    'items_list'                 => 'Lista de tipos de unidades',
    'items_list_navigation'      => 'Navegação da lista de tipos de unidades',
  );

  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'meta_box_cb'                => false,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => false,
    'show_tagcloud'              => false,
    'rewrite'                    => false,
    'show_in_rest'               => true,
  );

  register_taxonomy( 'types-units', array( 'units' ), $args );
}

add_action( 'init', 'types_units_taxonomy', 0 );

function line_products_taxonomy() {
  $labels = array(
    'name'                       => 'Linhas de Produtos',
    'singular_name'              => 'Linha de Produto',
    'menu_name'                  => 'Linhas de Produtos',
    'all_items'                  => 'Todas as linhas',
    'parent_item'                => 'Linha pai',
    'parent_item_colon'          => 'Linha pai:',
    'new_item_name'              => 'Nova linha',
    'add_new_item'               => 'Adicionar nova linha',
    'edit_item'                  => 'Editar linha',
    'update_item'                => 'Atualizar linha',
    'view_item'                  => 'Ver linha',
    'separate_items_with_commas' => 'Separe as linhas com vírgulas',
    'add_or_remove_items'        => 'Adicionar ou remover linhas',
    'choose_from_most_used'      => 'Escolha entre as mais usadas',
    'popular_items'              => 'Linhas populares',
    'search_items'               => 'Pesquisar linhas',
    'not_found'                  => 'Nenhuma linha encontrada',
    'no_terms'                   => 'Nenhuma linha',
    'items_list'                 => 'Lista de linhas',
    'items_list_navigation'      => 'Navegação da lista de linhas',
  );

  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'meta_box_cb'                => false,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => false,
    'show_tagcloud'              => false,
    'rewrite'                    => false,
    'show_in_rest'               => true,
  );

  register_taxonomy( 'line-products', array( 'products' ), $args );
}

add_action( 'init', 'line_products_taxonomy', 0 );

function type_products_taxonomy() {
  $labels = array(
    'name'                       => 'Tipos de Produtos',
    'singular_name'              => 'Tipo de Produto',
    'menu_name'                  => 'Tipos de Produtos',
    'all_items'                  => 'Todas as tipos',
    'parent_item'                => 'Tipo pai',
    'parent_item_colon'          => 'Tipo pai:',
    'new_item_name'              => 'Nova tipo',
    'add_new_item'               => 'Adicionar nova tipo',
    'edit_item'                  => 'Editar tipo',
    'update_item'                => 'Atualizar tipo',
    'view_item'                  => 'Ver tipo',
    'separate_items_with_commas' => 'Separe as tipos com vírgulas',
    'add_or_remove_items'        => 'Adicionar ou remover tipos',
    'choose_from_most_used'      => 'Escolha entre as mais usadas',
    'popular_items'              => 'Tipos populares',
    'search_items'               => 'Pesquisar tipos',
    'not_found'                  => 'Nenhuma tipo encontrada',
    'no_terms'                   => 'Nenhuma tipo',
    'items_list'                 => 'Lista de tipos',
    'items_list_navigation'      => 'Navegação da lista de tipos',
  );

  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'meta_box_cb'                => false,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => false,
    'show_tagcloud'              => false,
    'rewrite'                    => false,
    'show_in_rest'               => true,
  );

  register_taxonomy( 'type-products', array( 'products' ), $args );
}

add_action( 'init', 'type_products_taxonomy', 0 );

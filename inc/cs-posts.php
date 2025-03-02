<?php
//Custom posts
function langusistemos_post_types() {
	register_post_type('production', array(
        'rewrite' => array('slug' => 'produkcija','with_front' => false),
		'public' => true,
        'show_in_rest' => true,
        'show_in_menu' => true,
        'menu_position' => 8,
        'taxonomies' => ['category', 'post_tag'],
		'labels' => array(
			'name' => 'Produkcija',
            'add_new_item' => 'Pridėti',
            'edit_item' => 'Redaguoti',
            'all_items' => 'Visi',
            'singular_name' => 'Produkcija'
		),
		'menu_icon' => 'dashicons-products',
        'supports' => array(
            'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes', 'post-formats', 'custom-fields'
        )
	));
    register_post_type('services', array(
        'rewrite' => array('slug' => 'paslaugos','with_front' => false),
		'public' => true,
        'show_in_rest' => true,
        'show_in_menu' => true,
        'menu_position' => 9,
        'taxonomies' => ['category', 'post_tag'],
		'labels' => array(
			'name' => 'Paslaugos',
            'add_new_item' => 'Pridėti',
            'edit_item' => 'Redaguoti',
            'all_items' => 'Visi',
            'singular_name' => 'Paslaugos'
		),
		'menu_icon' => 'dashicons-forms',
        'supports' => array(
            'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes', 'post-formats', 'custom-fields'
        )
	));
}
add_action('init', 'langusistemos_post_types');
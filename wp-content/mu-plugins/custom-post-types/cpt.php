<?php

/**
 * @param $name
 * @param array $args
 * https://developer.wordpress.org/resource/dashicons/#schedule
 */
function add_post_type( $name, $args = array() ) {
	add_action( 'init', function () use ( $name, $args ) {
		$upper = ucwords( $name );
		$name  = strtolower( str_replace( ' ', '_', $name ) );

		$args = array_merge(
			[
				'public'      => true,
				'label'       => $upper . "s",
				'labels'      => array( 'add_new_item' => "Add new $upper" ),
				'supports'    => array( 'title', 'editor', 'comments', 'thumbnail' ),
				'has_archive' => true
			],
			$args );

		register_post_type( $name, $args );
	} );
}

function add_taxonomy( $name, $post_type, $args = array() ) {
	$name = strtolower( $name );
	add_action( 'init', function () use ( $name, $post_type, $args ) {
		$args = array_merge(
			[
				'label' => ucwords( $name )
			],
			$args );

		register_taxonomy( $name, $post_type, $args );
	} );
}


add_post_type( 'blog', [
	'public'      => true,
	//    'menu_position' => 5,
	'label'       => 'Blogs',
	'menu_icon'   => 'dashicons-welcome-write-blog',
	'labels'      => [ 'add_new_item' => "Add New Blog" ],
	'taxonomies'  => [ 'blog-category','Categories' ],
	'taxonomies'  => array('featured', 'post_tag'),
	'supports'    => [ 'title', 'editor', 'thumbnail', 'author' ],
	'has_archive' => true
] );


$labels = array(
    'name'                       => _x( 'Blogs Categories', 'taxonomy general name' ),
    'singular_name'              => _x( 'Blog Category', 'taxonomy singular name' ),
    'search_items'               => __( 'Search Blogs Categories' ),
    'popular_items'              => __( 'Popular Blogs Categories' ),
    'all_items'                  => __( 'All Blogs Categories' ),
    'parent_item'                => null,
    'parent_item_colon'          => null,
    'edit_item'                  => __( 'Edit Blogs Category' ),
    'update_item'                => __( 'Update Blogs Category' ),
    'add_new_item'               => __( 'Add New Blogs Category' ),
    'new_item_name'              => __( 'New Blogs Category Name' ),
    'separate_items_with_commas' => __( 'Separate Blogs categories with commas' ),
    'add_or_remove_items'        => __( 'Add or remove Blogs categories' ),
    'choose_from_most_used'      => __( 'Choose from the most used Blogs categories' ),
    'menu_name'                  => __( 'Blogs Categories' ),
);

add_taxonomy( "blog-category", 'blog', [
	'labels'       => $labels,
    'hierarchical' => true
] );


add_post_type( 'service', [
	'public'      => true,
	//    'menu_position' => 5,
	'label'       => 'Services',
	'menu_icon'   => 'dashicons-admin-tools',
	'labels'      => [ 'add_new_item' => "Add New Service" ],
	// 'taxonomies'  => [ 'work-category','Categories' ],
	// 'taxonomies'  => array('featured'),
	'supports'    => [ 'title', 'editor', 'thumbnail','author' ],
	'has_archive' => true
] );


/**
 * Set default cat for cpt
 * @source {https://circlecube.com/says/2013/01/set-default-terms-for-your-custom-taxonomy-default/}
 * @source {http://wordpress.mfields.org/2010/set-default-terms-for-your-custom-taxonomies-in-wordpress-3-0/}
 * @license   GPLv2
 */
function set_default_object_terms_203962( $post_id, $post ) {
    if ( 'publish' === $post->post_status ) {
        $defaults = array(
            //'your_taxonomy_id' => array( 'your_term_slug', 'your_term_slug' )
            'blog-category' => array( 'uncategorized' ),
            // 'work-category' => array( 'uncategorized' ),
            // 'monkey-faces' => array( 'see-no-evil' ),
            );
    $taxonomies = get_object_taxonomies( $post->post_type );
    foreach ( (array) $taxonomies as $taxonomy ) {
        $terms = wp_get_post_terms( $post_id, $taxonomy );
        if ( empty( $terms ) && array_key_exists( $taxonomy, $defaults ) ) {
            wp_set_object_terms( $post_id, $defaults[$taxonomy], $taxonomy );
        }
    }}
}
add_action( 'save_post', 'set_default_object_terms_203962', 100, 2 );

flush_rewrite_rules();



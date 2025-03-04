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


add_post_type( 'news-events', [
	'public'      => true,
	//    'menu_position' => 5,
	'label'       => 'News & Events',
	'menu_icon'   => 'dashicons-welcome-write-blog',
	'labels'      => [ 'add_new_item' => "Add New News/Events" ],
	'taxonomies'  => [ 'news-events-category','Categories' ],
	'taxonomies'  => array('featured', 'post_tag'),
	'supports'    => [ 'title', 'editor', 'thumbnail', 'author' ],
	'has_archive' => true
] );


$labels = array(
    'name'                       => _x( 'News & Events Categories', 'taxonomy general name' ),
    'singular_name'              => _x( 'News/Events Category', 'taxonomy singular name' ),
    'search_items'               => __( 'Search News & Events Categories' ),
    'popular_items'              => __( 'Popular News & Events Categories' ),
    'all_items'                  => __( 'All News & Events Categories' ),
    'parent_item'                => null,
    'parent_item_colon'          => null,
    'edit_item'                  => __( 'Edit News & Events Category' ),
    'update_item'                => __( 'Update News & Events Category' ),
    'add_new_item'               => __( 'Add New News & Events Category' ),
    'new_item_name'              => __( 'New News & Events Category Name' ),
    'separate_items_with_commas' => __( 'Separate News & Events categories with commas' ),
    'add_or_remove_items'        => __( 'Add or remove News & Events categories' ),
    'choose_from_most_used'      => __( 'Choose from the most used News & Events categories' ),
    'menu_name'                  => __( 'News & Events Categories' ),
);

add_taxonomy( "news-events-category", 'news-events', [
	'labels'       => $labels,
    'hierarchical' => true
] );


add_post_type( 'brand', [
	'public'      => true,
	//    'menu_position' => 5,
	'label'       => 'Brands',
	'menu_icon'   => 'dashicons-admin-tools',
	'labels'      => [ 'add_new_item' => "Add New Brand" ],
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
            'news-events-category' => array( 'Uncategorized' ),
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



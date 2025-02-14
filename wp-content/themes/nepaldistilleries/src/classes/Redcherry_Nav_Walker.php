<?php


class Redcherry_Nav_Walker extends Walker_Nav_Menu {

	function start_lvl( &$output, $depth = 0, $args = [] ) {
        
		$output .= "<ul class='dropdown-menu'>";
	}

	function start_el( &$output, $item, $depth = 0, $args = [], $id = 0 ) {
		$classes = empty( $item->classes ) ? [] : (array) $item->classes;


		//this is used to make current menu active
		if ( in_array( 'current-menu-item', $classes, true ) || in_array( 'current-menu-parent', $classes, true ) || in_array( 'current-menu-ancestor', $classes, true ) ) {
			if ( $depth == 0 ) {
				$classes[] = 'active';
			}
		}

		// if ( in_array( 'menu-item-has-children', $classes, true ) && ( is_singular( 'project' ) ) ) {		//this is used to make class active when we are on child's page
		// 	if ( $depth == 0 ) {
		// 		$classes[] = 'active';
		// 	}
		// }
		
		if ( $args->walker->has_children ) {
			$output .= "<li class='nav-item dropdown'>";		//this is added to menu which has children
		} elseif ( $depth === 0 ) {
			$output .= "<li class='nav-item'>";		//this is added to to menu which has no children
		} else {
			$output .= "<li>";		//this is added to children
		}

		
		if ( $args->walker->has_children ) {
			$output .= "<a href='" . $item->url . "' class='nav-link custom-class'><span>";			//this is added to menu which has children
		} elseif ( $depth === 0 ) {
			$output .= "<a href='" . $item->url . "' class='nav-link'><span>";			//this is added to to menu which has no children
		} else {
			$output .= "<a href='" . $item->url . "' class='dropdown-item'><span>";			//this is added to children
		}

		$output .= $item->title;

		$output .= "</span></a>";
	}
}
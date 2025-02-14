<?php

    $include_files = [
        "src/setup.php",
        "src/acf_hooks.php",
        "src/filter.php",
        // "src/product.php",
        "src/helper.php",
        // "src/ajax_product.php",
        // "src/woocommerce_hooks.php",
        "src/classes/Redcherry_Nav_Walker.php",

    ];

    array_walk( $include_files, function ( $file ) {
        if ( ! locate_template( $file, true, true ) ) {
            trigger_error( sprintf( "Could not find %s", $file ), E_USER_ERROR );
        }
    } );
    
    unset( $include_files );
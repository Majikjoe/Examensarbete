<?php 

// jquery
function insert_jquery(){
wp_enqueue_script('jquery', false, array(), false, false);
}
add_filter('wp_enqueue_scripts','insert_jquery',1);

// Enable custom and cart menu
function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'my-custom-menu' => __( 'My Custom Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );



// Display 12 products in products page
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );

// Display 4 products in related products
function woo_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 4;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
  function jk_related_products_args( $args ) {
	$args['posts_per_page'] = 4; // 4 related products
	$args['columns'] = 1; // arranged in 2 columns
	return $args;
}

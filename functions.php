<?php
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    /*--- Sidebar Widget ---*/
    register_sidebar( array(
        'name'          => ('First Widget'),
        'id'            => 'first-widget',
        'description'   => 'Widget for our sidebar on pages',
        'before_widget' => '<div class="widget-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));

    /*--- First Footer Widget ---*/
    register_sidebar( array(
        'name'          => ('First Footer Widget'),
        'id'            => 'footer-one',
        'description'   => 'Left widget in the footer',
        'before_widget' => '<div class="widget-footer widget-left">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));

    /*--- Second Footer Widget ---*/
    register_sidebar( array(
        'name'          => ('Second Footer Widget'),
        'id'            => 'footer-two',
        'description'   => 'Right widget in the footer',
        'before_widget' => '<div class="widget-footer widget-middle">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));

}
add_action('widgets_init', 'blank_widgets_init');

/*--------------- Enable Menus -----------*/

add_theme_support('menus');

/*--- Enable Post Thumbnails ---*/

add_theme_support( 'post-thumbnails' );

/*-- Numbered Pagination ---*/

function pagination_wie() {
	if( is_singular() )
		return;
	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="row"><div class="twelve columns navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div></div>' . "\n";

}

/**---- Enable Latest Version of jQuery ---**/

wp_deregister_script('jquery');

wp_enqueue_script('jquery', 'http://code.jquery.com/jquery-latest.min.js','','',true);

/**---- Add jQuery Slider ---**/

function enqueue_unslider() {
    wp_enqueue_script(                                // function to enqueue script
    'unslider',                                       // name of our script (id)
    get_template_directory_uri() . '/js/unslider.js', // file loc
    array('jquery'),                                  // dependencies
    '',                                               // version - left blank
    true                                              // load in footer
  );
}
add_action('wp_enqueue_scripts', 'enqueue_unslider');

?>

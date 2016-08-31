<?php
function wptutsplus_register_theme_menu() {
    register_nav_menu( 'primary', 'Main Navigation Menu' );
}
function wptutsplus_filter_wp_title( $title ) {
    // Return a custom document title for
    // the my-custom-page custom page template
    if ( is_page_template( 'page.php' ) ) {
        return 'CCCI | Home';
    }
    // Otherwise, don't modify the document title
    return $title;
}
add_action( 'init', 'wptutsplus_register_theme_menu' );
add_filter( 'wp_title', 'wptutsplus_filter_wp_title' );

function wpgyan_widgets_init() {

	register_sidebar( array(
		'name' => 'Header Sidebar',
		'id' => 'header_sidebar',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpgyan_widgets_init' );


function add_search_to_wp_menu ( $items, $args ) {
	if( 'primary' === $args -> theme_location ) {
	$items .= '<li class="menu-item menu-item-search">';
	$items .= '<form method="get" class="menu-search-form" action="' . get_bloginfo('home') . '/"><input class="global-search-input" type="text" placeholder="search website here" value="" name="s" id="s" onfocus="if (this.value == \'Enter Text &amp; Click to Search\') {this.value = \'\';}" onblur="if (this.value == \'\') {this.value = \'Enter Text &amp; Click to Search\';}" /><i class="fa fa-search fa-lg" aria-hidden="true"></i></form>';
	$items .= '</li>';
		}
	return $items;
}
add_filter('wp_nav_menu_items','add_search_to_wp_menu',10,2);
?>
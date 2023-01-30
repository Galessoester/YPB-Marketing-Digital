<?php 

	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );

	add_filter( 'show_admin_bar', '__return_false' );
	/* REMOVE OPTIONS FROM MENU */

	/* REMOVE ADMIN BAR SITE */
	function remove_admin_bar_links() {
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu('wp-logo');
		$wp_admin_bar->remove_menu('new-content');

	}
	add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );

	//IMAGEM DESTACADA
	add_theme_support( 'post-thumbnails' );

	// TITULO ESTRUTURADO PARA SEO WORDPRESS
	add_filter( 'wp_title', 'site_titlee' );
	function site_titlee( $title ) {
	  global $page, $paged;
	  if ( is_feed() )
	    return $title;
	  $site_description = get_bloginfo( 'description' );
	  $filtered_title = $title . get_bloginfo( 'name' );
	  $filtered_title .= ( ! empty( $site_description ) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description: '';
	  $filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) ) : '';

	  return $filtered_title;
	}

	// SUPORTE DE EXCERPT EM PAGINAS
	add_post_type_support( 'page', 'excerpt' );
	// REGISTRO DE MENU WORDPRESS
	register_nav_menus( array(
		'menu_principal' => 'Menu Principal'
	) );

	//MENU DE OPÇÔES
	if( function_exists('acf_add_options_page') ) {
		
		acf_add_options_page(array(
			'page_title' 	=> 'Administração',
			'menu_title'	=> 'Administração',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));	
	}

	//Attr Menu
	add_filter( 'nav_menu_link_attributes', 'my_menu_atts', 10, 3 );
	function my_menu_atts( $atts, $item, $args )
	{
	  // Provide the id of the targeted menu item
	  $menu_target = 2;

	  // inspect $item

	  if ($item->ID == $menu_target) {
		// original post used a comma after 'modal' but this caused a 500 error as is mentioned in the OP's reply
		$atts['data-toggle'] = 'collapse';
		$atts['data-target'] = '.navbar-collapse.show';
	  }
	  return $atts;
	}

	//PAGINATION

	function pagination($pages = '', $range = 4){  
		$showitems = ($range * 2)+1;  

		global $paged;
		if(empty($paged)) $paged = 1;

		if($pages == '')
		{
		 global $wp_query;
		 $pages = $wp_query->max_num_pages;
		 if(!$pages)
		 {
		     $pages = 1;
		 }
		}   

		if(1 != $pages)
		{
		 echo "<div class=\"pagination\"><div class=\"center\"><ul>";
		 if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
		 if($paged > 1 && $showitems < $pages) echo "<li><a class=\"button small grey\" href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a></li>";

		 for ($i=1; $i <= $pages; $i++)
		 {
		     if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
		     {
		         echo ($paged == $i)? "<li class=\"current\"><a href='#' class=\"button small grey\">".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."' class=\"button small grey\">".$i."</a></li>";
		     }
		 }

		 if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\" class=\"button small grey\">Next &rsaquo;</a>";  
		 if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."'>Last &raquo;</a></li>";
		 echo "</ul></div></div><div class=\"clear\"></div>\n";
		}
	}


/* WIDGETS */
 
if (function_exists('register_sidebar'))
	{
		register_sidebar(array(
			'name' => 'Sidebar',
			'id' => 'sidebar-1',
			'before_widget' => '<div class="widget menu-side">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
		));
		
		register_sidebar( array(
			'name' => 'Footer 1',
			'id' => 'footer-1',
			'before_widget' => '<div class="col-md-4">',
			'after_widget' => '</div>',
			'before_title' => '<h5>',
			'after_title' => '</h5>',
		) );
	
		register_sidebar( array(
			'name' => 'Footer 2',
			'id' => 'footer-2',
			'before_widget' => '<div class="col-md-4">',
			'after_widget' => '</div>',
			'before_title' => '<h5>',
			'after_title' => '</h5>',
		) );
		
		register_sidebar( array(
			'name' => 'Footer 3',
			'id' => 'footer-3',
			'before_widget' => '<div class="col-md-4 face-plugin">',
			'after_widget' => '</div>',
			'before_title' => '<h5>',
			'after_title' => '</h5>',
		) );
	
		register_sidebar( array(
			'name' => 'Copyright',
			'id' => 'copyright',
			'before_widget' => '<div class="col">',
			'after_widget' => '</div>',
			'before_title' => '<h5>',
			'after_title' => '</h5>',
		) );
	}
 
function get_excerpt(){
	$excerpt = get_the_content();
	$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 30);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	return $excerpt;
}

?>
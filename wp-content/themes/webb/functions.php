<?

function show_image($image_id, $class = array(), $image_link = false) {
	if ($image_link): ?>
		<a target="_blank" href="<?=$image_link;?>">
	<? endif;
	echo wp_get_attachment_image( $image_id, "large", false, array("class" => implode(" ", $class)) );
	if ($image_link): ?>
		</a>
	<? endif;?>
	<span class="photo-credit new-multi-photo-credit">
		<?=generate_photo_credits($image_id);?>
	</span> <?
}

function generate_photo_credits($image_id) {
	$str = "";
	if (get_field('new_photo_credits', $image_id)):
		foreach (get_field('new_photo_credits', $image_id) as $key => $credit): if ($key): $str .= ", "; endif;
			$str .= "<a ";
			if ($credit["new_link_for_photo_credit"]):
				$str .= 'href="'.$credit["new_link_for_photo_credit"].'"';
			endif;
			$str .= 'target="_blank" data-image-id="'.$image_id.'">'.$credit["new_photo_credit"].'</a>';
		endforeach;
	elseif (get_field('photo_credit', $image_id)):
		$str .= '<a ';
		if (get_field('link_for_photo_credit', $image_id)):
			$str .= 'href="'.get_field('link_for_photo_credit', $image_id).'"';
		endif;
		$str .= 'target="_blank" data-image-id="'.$image_id.'">';
		$str .= get_field('photo_credit', $image_id);
		$str .= '</a>';
	endif;
	return $str;
}


function webb_styles_and_scripts() {
    wp_enqueue_style( 'styles', get_stylesheet_uri(), array(), "1" );

    wp_enqueue_script( 'my-jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), '2.2.4', true );
    wp_enqueue_script( 'concatenated-sitewide-js', get_theme_root_uri().'/webb/global.min.js', array("my-jquery"), '1', true );
    // wp_enqueue_script( 'page-siglines', get_theme_root_uri().'/kasler/assets/js/specific/signaturelines.js', array("my-jquery"), '', true );
    // wp_enqueue_script( 'page-inspired', get_theme_root_uri().'/kasler/assets/js/specific/inspired.js', array("my-jquery"), '', true );
    


    // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'webb_styles_and_scripts' );

 
function wpb_adding_scripts() {
wp_register_script('my_amazing_script', get_template_directory_uri() . '/webb/global.min.js', array('jquery'),'1.1', true);
wp_enqueue_script('my_amazing_script');
}
 
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );  



function no_break($str) {
	return str_replace(" ", "&nbsp;", $str);
}



//Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );




//https://gist.github.com/gerbenvandijk/5253921
add_action('nav_menu_css_class', 'add_current_nav_class', 10, 2 );
function add_current_nav_class($classes, $item) {
	
	// Getting the current post details
	global $post;
	
	// Getting the post type of the current post
	$current_post_type = get_post_type_object(get_post_type($post->ID));
	$current_post_type_slug = $current_post_type->rewrite["slug"];
		
	// Getting the URL of the menu item
	$menu_slug = strtolower(trim($item->url));
	
	// If the menu item URL contains the current post types slug add the current-menu-item class
	if (strpos($menu_slug,$current_post_type_slug) !== false) {
	
	   $classes[] = 'current-menu-item';
	
	}
	
	// Return the corrected set of classes to be added to the menu item
	return $classes;

}





function create_sk_insp_opt() {
	if( function_exists('acf_add_options_page') ) {
	 	
		
		$option_page = acf_add_options_page(array(
			'page_title' 	=> 'Inspired Options',
			'menu_title' 	=> 'Inspired Options',
			'position' 		=> "26.1",
		));

		$option_page = acf_add_options_page(array(
			'page_title' 	=> 'Social Links',
			'menu_title' 	=> 'Social Links',
			'position' 		=> "5.1",
			'icon_url'      => 'dashicons-share',
		));

		$option_page = acf_add_options_page(array(
			'page_title' 	=> 'Home Slideshow',
			'menu_title' 	=> 'Home Slideshow',
			'position' 		=> "11.1",
			'icon_url'      => 'dashicons-images-alt',
		));
	 
	}
}
add_action( 'init', 'create_sk_insp_opt', 0 );



// shows all options by default on the content editor toolbar
function kasler_unhide_kitchensink( $args ) { 
	$args['wordpress_adv_hidden'] = false; 
	return $args;
} 
add_filter( 'tiny_mce_before_init', 'kasler_unhide_kitchensink' );







function kasler_filter_image_send_to_editor($html, $id, $caption, $title, $align, $url, $size, $alt) {
	$html = str_replace('<img ', '<img data-image-id="'.$id.'" ', $html);
	$html .= "<a class='photo-credit' data-image-id='".$id."' href='".get_field('link_for_photo_credit', $id)."' target='_blank'>";
		$html .= get_field("photo_credit", $id);
	$html .= "</a>";

	return $html;
}
add_filter('image_send_to_editor', 'kasler_filter_image_send_to_editor', 10, 8);





function kalser_add_editor_styles() {
	global $post;

	// New post (init hook).
	if ( stristr( $_SERVER['REQUEST_URI'], 'post-new.php' ) !== false ) {
		add_editor_style( get_stylesheet_directory_uri() . '/assets/css/editor-styles.css' );
	}

	// Edit post (pre_get_posts hook).
	if ( stristr( $_SERVER['REQUEST_URI'], 'post.php' ) !== false ) {
		add_editor_style( get_stylesheet_directory_uri() . '/assets/css/editor-styles.css' );
	}
}
add_action( 'init', 'kalser_add_editor_styles' );
add_action( 'pre_get_posts', 'kalser_add_editor_styles' );




// Fix stupid wordpress 4.4 'feature' that breaks justified menus
add_filter('wp_nav_menu_items', 'filter_menu_items');
function filter_menu_items($menu_items){
	return str_replace('<li', " <li", str_replace('</li>', "</li> ", $menu_items));
}



// Register Navigation Menus
function custom_navigation_menus() {

	$locations = array(
		'Navigation' => __( 'The site\'s main nav', 'text_domain' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'custom_navigation_menus' );




add_filter( 'gettext', 'sk_text_changes', 20, 3 );
function sk_text_changes( $translated_text, $text, $domain ) {

	switch ( $translated_text ) {
		/*case 'Sort by newness' :
			$translated_text = __( 'Sort by Date Added', 'theme_text_domain' );
		break;
		
		case 'Share with Friends' :
			$translated_text = "Share your Wishlist";
		break;
		
		case 'This item is already in one of your wishlists' :
			$translated_text = "This item is in one of your wishlists:";
		break;
		
		case 'Your cart was sent successfully.' :
			$translated_text = "Your wishlist was sent successfully.";
		break;
		case 'Click here to view your cart.':
			$translated_text = 'Click here to view your wishlist.';
		break;
		case 'View my Cart on %s':
			$translated_text = 'View my Wishlist on %s';
		break;
		case 'Your cart is currently empty.':
			$translated_text = 'Your wishlist is currently empty.';
		break;
		*/
	}

	return $translated_text;
}







add_action( 'admin_head', 'sk_admin_mods' );

/**
 * Disable parent checkboxes in Post Editor.
 */
function sk_admin_mods() {
	?>
		<style>
			.acf-taxonomy-field .categorychecklist-holder {
				max-height: none;
			}
		</style>
	<?

}








// ----------------------- Set the number of a custom post type posts per page
add_filter( 'pre_get_posts', 'sk_max_posts_per_page' );
// @link http://www.billerickson.net/customize-the-wordpress-query/
function sk_max_posts_per_page( $query ) {
	if( $query->is_main_query() && $query->is_post_type_archive('sk_interiors') ) {
		$query->set( 'posts_per_page', 1000000 );
	}
	if( $query->is_main_query() && $query->is_post_type_archive('sk_press') ) {
		$query->set( 'posts_per_page', 1000000 );
	}
}










// Register Custom Post Type
function create_sk_press() {

	$labels = array(
		'name'                => _x( 'Press', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Press', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Press', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Items', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'add_new_item'        => __( 'Add New Item', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                => 'press',
		'with_front'          => true,
		'pages'               => false,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'sk_press', 'text_domain' ),
		'description'         => __( 'Press', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => "51.1",
		'menu_icon'           => 'dashicons-megaphone',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'sk_press', $args ); // yep, screwed up the spelling

}

// Hook into the 'init' action
add_action( 'init', 'create_sk_press', 0 );











// Register Custom Post Type
function create_sk_books() {

	$labels = array(
		'name'                => _x( 'Monographs', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Books', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Books', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Items', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'add_new_item'        => __( 'Add New Item', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                => 'monographs',
		'with_front'          => true,
		'pages'               => false,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'sk_monographs', 'text_domain' ),
		'description'         => __( 'Books', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => "41.1",
		'menu_icon'           => 'dashicons-book-alt',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'sk_monogaphs', $args ); // yep, screwed up the spelling

}

// Hook into the 'init' action
add_action( 'init', 'create_sk_books', 0 );









// Register Custom Post Type
function create_sk_interiors() {

	$labels = array(
		'name'                => _x( 'Interiors', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Interiors', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Interiors', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Items', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'add_new_item'        => __( 'Add New Item', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                => 'interiors',
		'with_front'          => true,
		'pages'               => false,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'sk_interiors', 'text_domain' ),
		'description'         => __( 'Interiors', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => "39.1",
		'menu_icon'           => 'dashicons-screenoptions', //'dashicons-admin-multisite',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'sk_interiors', $args );

}

// Hook into the 'init' action
add_action( 'init', 'create_sk_interiors', 0 );










// Register Custom Post Type
function create_sk_sig_lines() {

	$labels = array(
		'name'                => _x( 'Signature Lines', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Signature Lines', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Signature Lines', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Items', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'add_new_item'        => __( 'Add New Item', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                => 'signaturelines',
		'with_front'          => true,
		'pages'               => false,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'sk_sig_lines', 'text_domain' ),
		'description'         => __( 'Signature Lines', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => "40.1",
		'menu_icon'           => 'dashicons-heart',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'sk_sig_lines', $args );

}

// Hook into the 'init' action
add_action( 'init', 'create_sk_sig_lines', 0 );







function create_sk_insp_issue() {

	$labels = array(
		'name'                => _x( 'Inspired', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Inspired Issues', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Inspired Issues', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Items', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'add_new_item'        => __( 'Add New Item', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                => 'inspired',
		'with_front'          => true,
		'pages'               => false,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'Inspired Issue', 'text_domain' ),
		'description'         => __( 'Inspired Issues', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => "40.1",
		//'menu_icon'           => 'dashicons-megaphone',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'sk_insp_issue', $args );

}

// Hook into the 'init' action
add_action( 'init', 'create_sk_insp_issue', 0 );








function create_sk_insp_calendar() {

	$labels = array(
		'name'                => _x( 'Calendar | Inspired', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Inspired Calendar', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Inspired Calendar', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Items', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'add_new_item'        => __( 'Add New Item', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                => 'calendar',
		'with_front'          => true,
		'pages'               => false,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'Inspired Calendar', 'text_domain' ),
		'description'         => __( 'Inspired Calendars', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => "40.1",
		// 'menu_icon'           => 'dashicons-',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'sk_insp_calendar', $args );

}

// Hook into the 'init' action
add_action( 'init', 'create_sk_insp_calendar', 0 );





function create_sk_insp_shop() {

	$labels = array(
		'name'                => _x( 'Shop | Inspired', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Inspired Shop', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Inspired Shop', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Items', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'add_new_item'        => __( 'Add New Item', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                => 'shop',
		'with_front'          => true,
		'pages'               => false,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'Inspired Shop', 'text_domain' ),
		'description'         => __( 'Inspired Shops', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => "40.1",
		// 'menu_icon'           => 'dashicons-',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'sk_insp_shop', $args );

}

// Hook into the 'init' action
add_action( 'init', 'create_sk_insp_shop', 0 );








function create_sk_insp_6picks() {

	$labels = array(
		'name'                => _x( '6 Picks | Inspired', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Inspired 6 Pick', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Inspired 6 Pick', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Items', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'add_new_item'        => __( 'Add New Item', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                => 'six-picks',
		'with_front'          => true,
		'pages'               => false,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'Inspired 6 Pick', 'text_domain' ),
		'description'         => __( 'Inspired 6 Picks', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => "40.1",
		// 'menu_icon'           => 'dashicons-',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'sk_insp_6picks', $args );

}

// Hook into the 'init' action
add_action( 'init', 'create_sk_insp_6picks', 0 );







function create_sk_insp_sat() {

	$labels = array(
		'name'                => _x( 'Saturdays | Inspired', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Inspired Saturday', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Inspired Saturdays', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Items', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'add_new_item'        => __( 'Add New Item', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                => 'saturdays',
		'with_front'          => true,
		'pages'               => false,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'Inspired Saturday', 'text_domain' ),
		'description'         => __( 'Inspired Saturdays', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => "40.1",
		// 'menu_icon'           => 'dashicons-',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'sk_insp_sat', $args );

}

// Hook into the 'init' action
add_action( 'init', 'create_sk_insp_sat', 0 );







function create_sk_insp_pp() {

	$labels = array(
		'name'                => _x( 'PrePreview | Inspired ', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Inspired PrePreview', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Inspired PrePreview', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Items', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'add_new_item'        => __( 'Add New Item', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                => 'pre-preview',
		'with_front'          => true,
		'pages'               => false,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'Inspired PrePreview', 'text_domain' ),
		'description'         => __( 'Inspired PrePreviews', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => "40.1",
		// 'menu_icon'           => 'dashicons-',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'sk_insp_pp', $args );

}

// Hook into the 'init' action
add_action( 'init', 'create_sk_insp_pp', 0 );








function create_sk_insp_guest_rooms() {

	$labels = array(
		'name'                => _x( 'Guest Room | Inspired', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Inspired Guest Room', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Inspired Guest Rooms', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Items', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'add_new_item'        => __( 'Add New Item', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                => 'guest-room',
		'with_front'          => true,
		'pages'               => false,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'Inspired Guest Room', 'text_domain' ),
		'description'         => __( 'Inspired Guest Rooms', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => "40.1",
		// 'menu_icon'           => 'dashicons-',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'sk_insp_guest_rooms', $args );

}

// Hook into the 'init' action
add_action( 'init', 'create_sk_insp_guest_rooms', 0 );







function create_sk_insp_passport() {

	$labels = array(
		'name'                => _x( 'Passport | Inspired', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Inspired Passport', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Inspired Passport', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Items', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'add_new_item'        => __( 'Add New Item', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                => 'passport',
		'with_front'          => true,
		'pages'               => false,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'Inspired Passport', 'text_domain' ),
		'description'         => __( 'Inspired Passports', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => "40.1",
		// 'menu_icon'           => 'dashicons-',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'sk_insp_passport', $args );

}

// Hook into the 'init' action
add_action( 'init', 'create_sk_insp_passport', 0 );







function create_sk_insp_keith() {

	$labels = array(
		'name'                => _x( 'Keith | Inspired', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Keith', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Inspired Keith', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Items', 'text_domain' ),
		'view_item'           => __( 'View Item', 'text_domain' ),
		'add_new_item'        => __( 'Add New Item', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Item', 'text_domain' ),
		'update_item'         => __( 'Update Item', 'text_domain' ),
		'search_items'        => __( 'Search Item', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                => 'keith',
		'with_front'          => true,
		'pages'               => false,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'Keith', 'text_domain' ),
		'description'         => __( 'Keith', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => "40.1",
		// 'menu_icon'           => 'dashicons-',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'sk_insp_keith', $args );

}

// Hook into the 'init' action
add_action( 'init', 'create_sk_insp_keith', 0 );


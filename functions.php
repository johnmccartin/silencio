<?php


/********** WIDGETS & MENUS ************/
function add_widgets() {
	register_sidebar( array(
		'name' => 'Blog Sidebar',
		'id' => 'blog_sidebar',
	) );
}
add_action( 'widgets_init', 'add_widgets' );

function register_my_menus() {
  register_nav_menu('header',__( 'Header Menu' ));
}
if (function_exists('register_my_menus')) {
	add_action( 'init', 'register_my_menus' );
}


/********** POST TYPES & FORMATS ************/
/*	
	function my_post_types() {

		$data_labels = array(
			'name' 				=> 'Data',
			'singular_name'		=> 'Data',
			'add_new_item'		=> 'Add New Data',
			'edit_item'			=> 'Edit Data',
			'new_item'			=> 'New Data',
			'view_item'			=> 'View Data',
			'search_items'		=> 'Search Data',
			'not_found'			=> 'No Data Found',
			'not_found_in_trash'=> 'No Data Found in Trash',
			'parent_item_colon'	=> ''
		);
		$data_args = array(
			'labels'             => $data_labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => 'data',
			'rewrite'            => array( 'slug' => 'data' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'supports'           => array( 'title','post-formats','editor','revisions' ),
			'taxonomies'		 => array( 'post_tag','category')
		);
		register_post_type( 'data', $data_args );
	}
	
	add_action( 'init', 'my_post_types' );
	
	
	
	$pFormats = array(
		'link',
		'image',
		'quote',
		'video',
		'audio',
		'status',
		'aside',
		'chat',
		'gallery'
	);
	
	add_theme_support('post-formats',$pFormats);
	
	add_filter( 'pre_get_posts', 'get_data' );

	function get_data( $query ) {

		if ( ( is_home() && $query->is_main_query() ) || is_feed() )
			$query->set( 'post_type', array( 'post','data' ) );

		return $query;
	}
*/


function header_scripts() {
	if (!is_admin()) {
	wp_deregister_script( 'jquery' );
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
	wp_enqueue_script('jquery');
	}
}
if (function_exists('header_scripts')) {
	add_action('wp_enqueue_scripts', 'header_scripts');
}

/********** UTILITIES ************/
// disable the admin bar
add_filter('show_admin_bar', '__return_false');

//force IE edge rendering
if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) {
        header('X-UA-Compatible: IE=edge');
       }
       

$ajax = !empty($_SERVER['HTTP_X_REQUESTED_WITH'])
    && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
    

/********** DEBUGGING ************
http://www.paulund.co.uk/output-php-data-in-browser-console
**********************************/
	function dtc($data) {
		if(is_array($data) || is_object($data))
		{
			echo("<script>console.log('PHP: ".json_encode($data)."');</script>");
		} else {
			echo("<script>console.log('PHP: ".$data."');</script>");
		}
	}


?>
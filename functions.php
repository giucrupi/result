<?php 


function pd_produtos_scripts(){
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/bootstrap.min.js', array( 'jquery' ), '4.4.1', true );
	
		wp_enqueue_script('menu-js', get_template_directory_uri() . '/js/menu.js', array('jquery'), filemtime(get_template_directory() . '/js/menu.js'), true);


	


	wp_enqueue_script( 'jquery2','https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
	wp_enqueue_script( 'boot-js','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js');
	wp_enqueue_script( 'slick-carousel','http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
	wp_enqueue_script( 'fancybox-js','https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js');
		// wp_enqueue_script( 'pointer-js','/wp-content/themes/Arqosv2/js/pointer.js');



	// fim menu

	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/bootstrap.min.css', array(), '4.4.1', 'all' );
	wp_enqueue_style( 'galeria-css', get_template_directory_uri() . '/css/galeria.css', array(), '4.4.1', 'all' );
	// wp_enqueue_style( 'css-arbore', 'arboreengenharia.com.br/wp-content/themes/arbore/css/style.css');

	// wp_enqueue_style( 'css', get_template_directory_uri() . '/sass/style.css', array(), '1.0', 'all' );
	


wp_enqueue_style('730-style-sass', get_template_directory_uri() . '/sass/style.css', array(), filemtime(get_template_directory() . '/sass/style.css'), false);


 	
 	
 	wp_enqueue_style( 'slick-css','http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
 	// wp_enqueue_style( 'pointer-css','/wp-content/themes/Arqosv2/sass/pointer.css');
 	wp_enqueue_style( 'fancy-box-css','https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css');
 	wp_enqueue_style( 'fontawesome','https://use.fontawesome.com/releases/v5.14.0/css/all.css');
 	

 	// Theme's main stylesheet

 	// wp_enqueue_style( 'fancy-lab-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );

 	// Google Fonts
 	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900' );
 	


}
add_action( 'wp_enqueue_scripts', 'pd_produtos_scripts' );

add_theme_support('title-tag');




/*Custom Post type start*/

function cw_post_type_prdutos() {

$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);

$labels = array(
'name' => _x('Produtos', 'plural'),
'singular_name' => _x('Produto', 'singular'),
'menu_name' => _x('Produtos', 'admin menu'),
'name_admin_bar' => _x('Produtos', 'admin bar'),
'add_new' => _x('Adicionar produto', 'add new'),
'add_new_item' => __('Adicionar Novo'),
'new_item' => __('Novo produto'),
'edit_item' => __('Editar produto'),
'view_item' => __('Ver produto'),
'all_items' => __('Todos os produtos'),
'search_items' => __('Procurar produtos'),
'not_found' => __('Nenhum produto encontrado'),
);

$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'post'),
'has_archive' => true,
'hierarchical' => false,
);
register_post_type('produtos', $args);
}
add_action('init', 'cw_post_type_prdutos');

/*Custom Post type end*/
/* ------------------------------ Taxonomias - Tipo de produto -----------------------------*/
function custom_taxonomy_produto() {

	/**
	 * Taxonomy: Produto.
	 */

	$labels = [
		"name" => __( "Status", "twentyseventeen" ),
		"singular_name" => __( "Status do produto", "twentyseventeen" ),
	];

	$args = [
		"label" => __( "Status", "twentyseventeen" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'produtos', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "genero",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		];
	register_taxonomy( "Status", [ "produtos" ], $args );





}
add_action( 'init', 'custom_taxonomy_produto' );
// Method 1: Filter.
function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyCDdhmRE3vWrr2dVQ2ADzR8-XGTmtW6uAQ';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

/*Custom Post type end*/
/* ------------------------------ Taxonomias - Tipo de produto -----------------------------*/






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
'rewrite' => array('slug' => 'news'),
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
		'rewrite' => array('slug' => 'produto'),
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


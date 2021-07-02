<?php 


	//load css
	function load_css()
	{
		wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all' );
		wp_enqueue_style('bootstrap');

		wp_register_style( 'main', get_template_directory_uri() . '/css/main.css', array(), false, 'all' );
		wp_enqueue_style('main');
	}
	add_action('wp_enqueue_scripts', 'load_css');


	//load js
	function load_js()
	{
		wp_enqueue_script('jquery');
		wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true );
		wp_enqueue_script('bootstrap');
	}
	add_action('wp_enqueue_scripts', 'load_js');
	
	//Theme options
	
	add_theme_support('menus');

	add_theme_support('post-thumbnails');

	//Menus
	register_nav_menus(
		array(
			'top-menu' => 'Top Menu Location',
			'mobile-menu' => 'Mobile Menu Location',
			'footer-menu' => 'Footer Menu Location',
		)
	);

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	$logo_width  = 300;
	$logo_height = 100;

	add_theme_support(
		'custom-logo',
		array(
			'height'               => $logo_height,
			'width'                => $logo_width,
			'flex-width'           => true,
			'flex-height'          => true,
			'unlink-homepage-logo' => true,
		)
	);

	//add image size
	add_image_size('blog-large', 800, 400, true);
	add_image_size('blog-small', 300, 200, true);

	function projects_post_type()
	{
		$args = array (
			'labels' => array(
				'name' => 'Projetos',
				'singular_name' => 'Projetos'
			),
        	'hierarchical' => true,
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'dashicons-media-code',
    		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
			'rewrite' => array( 'slug' => 'nossos-projetos' )
		);

		register_post_type('projects', $args);
	}
	add_action('init', 'projects_post_type');

	function services_post_type()
	{
		$args = array (
			'labels' => array(
				'name' => 'Serviços',
				'singular_name' => 'Serviço'
			),
        	'hierarchical' => true,
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'dashicons-hammer',
    		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
			'rewrite' => array( 'slug' => 'nossos-servicos' )
		);

		register_post_type('services', $args);
	}
	add_action('init', 'services_post_type');

	function services_taxonomy()
	{
		$args = array (
			'labels' => array(
				'name' => 'Aplicações',
				'singular_name' => 'Aplicação'
			),
			'public' => true,
			'hierarchical' => true,
  
		);

		register_taxonomy('aplications', array('services'), $args);
	}
	add_action('init', 'services_taxonomy');

	/**
	 * Register Custom Navigation Walker
	 */
	function register_navwalker(){
		require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
	}
	add_action( 'after_setup_theme', 'register_navwalker' );


	function projects_shortcode(){
		ob_start();
		get_template_part('includes/list', 'projects');
		return ob_get_clean();
	}
	add_shortcode( 'list_projects', 'projects_shortcode' );


	function services_shortcode(){
		ob_start();
		get_template_part('includes/list', 'services');
		return ob_get_clean();
	}
	add_shortcode( 'list_services', 'services_shortcode' );


	function aplications_services_shortcode(){
		ob_start();
		get_template_part('includes/list', 'aplications');
		return ob_get_clean();
	}
	add_shortcode( 'list_aplications_services', 'aplications_services_shortcode' );
<?php
// show admin_bar
add_filter('show_admin_bar', '__return_false');

add_action( 'wp_enqueue_scripts', 'my_scripts_and_styles');
add_action( 'init', 'register_post_types');
add_theme_support('post-thumbnails'); // можливість додавати картинки в пости і т.д

function my_scripts_and_styles() {
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery-1.12.4', get_template_directory_uri().'/js/jquery-1.12.4.min.js', [], null, true);
  wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', [], null, true);
  wp_enqueue_script('fancybox', get_template_directory_uri().'/js/jquery.fancybox.pack.js', [], null, true);
  wp_enqueue_script('fancybox-media', get_template_directory_uri().'/js/jquery.fancybox-media.js', [], null, true);
  wp_enqueue_script('isotope', 'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js', [], null, true);
  wp_enqueue_script('slick', get_template_directory_uri().'/js/slick.js', [], null, true);
  wp_enqueue_script('jquery.countTo', get_template_directory_uri().'/js/jquery.countTo.js', [], null, true);
  wp_enqueue_script('validate', get_template_directory_uri().'/js/validate.js', [], null, true);

//  //[if lt IE 9]
//  wp_enqueue_script('validate', 'https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js', [], null, true);
//  wp_enqueue_script('respond', get_template_directory_uri().'/js/respond.js', [], null, true);

  wp_enqueue_script('jquery', get_template_directory_uri().'/js/revolution/jquery.themepunch.tools.min.js', [], null, true);
  wp_enqueue_script('revolution', get_template_directory_uri().'/js/revolution/jquery.themepunch.revolution.min.js', [], null, true);
  wp_enqueue_script('actions', get_template_directory_uri().'/js/revolution/extensions/revolution.extension.actions.min.js', [], null, true);
  wp_enqueue_script('carousel', get_template_directory_uri().'/js/revolution/extensions/revolution.extension.carousel.min.js', [], null, true);
  wp_enqueue_script('kenburn', get_template_directory_uri().'/js/revolution/extensions/revolution.extension.kenburn.min.js', [], null, true);
  wp_enqueue_script('layeranimation', get_template_directory_uri().'/js/revolution/extensions/revolution.extension.layeranimation.min.js', [], null, true);
  wp_enqueue_script('migration', get_template_directory_uri().'/js/revolution/extensions/revolution.extension.migration.min.js', [], null, true);
  wp_enqueue_script('navigation', get_template_directory_uri().'/js/revolution/extensions/revolution.extension.navigation.min.js', [], null, true);
  wp_enqueue_script('parallax', get_template_directory_uri().'/js/revolution/extensions/revolution.extension.parallax.min.js', [], null, true);
  wp_enqueue_script('slideanims', get_template_directory_uri().'/js/revolution/extensions/revolution.extension.slideanims.min.js', [], null, true);
  wp_enqueue_script('video', get_template_directory_uri().'/js/revolution/extensions/revolution.extension.video.min.js', [], null, true);
  wp_enqueue_script('scripts', get_template_directory_uri().'/js/scripts.min.js', [], null, true);
  wp_enqueue_script('script', get_template_directory_uri().'/js/script.js', [], null, true);

//  CSS
  wp_enqueue_style('responsive', get_template_directory_uri().'/css/responsive.css', array(), '0.1.0', 'all');
  wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '0.1.0', 'all');
  wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.css', array(), '0.1.0', 'all');
  wp_enqueue_style('flaticon', get_template_directory_uri().'/css/flaticon.css', array(), '0.1.0', 'all');
  wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.css', array(), '0.1.0', 'all');
  wp_enqueue_style('slick', get_template_directory_uri().'/css/slick.css', array(), '0.1.0', 'all');
  wp_enqueue_style('slick-theme', get_template_directory_uri().'/css/slick-theme.css', array(), '0.1.0', 'all');
  wp_enqueue_style('fancybox', get_template_directory_uri().'/css/jquery.fancybox.css', array(), '0.1.0', 'all');
  wp_enqueue_style('settings', get_template_directory_uri().'/css/revolution/settings.css', array(), '0.1.0', 'all');
  wp_enqueue_style('layers', get_template_directory_uri().'/css/revolution/layers.css', array(), '0.1.0', 'all');
  wp_enqueue_style('navigation', get_template_directory_uri().'/css/revolution/navigation.css', array(), '0.1.0', 'all');
  wp_enqueue_style('style', get_template_directory_uri().'/css/style.css', array(), '0.1.0', 'all');
}

//register menus
//add_action( 'after_setup_theme', 'register_menus');

register_nav_menus([
  'nav_menu' => 'Головне меню'
]);

function getSliders () {
	return get_posts([
		'numberposts' => -1,
    'orderby' => 'date',
    'order' => 'ASC',
    'post_status' => 'publish',
    'post_type' => 'slider',
	]);
}

function getSchedule() {
	return get_field('schedule', 'options');
};

function getCall_us() {
	return get_field('call_us', 'options');
};

function getBlogs() {
	return get_posts([
		'numberposts' => -1,
		'orderby' => 'date',
		'order' => 'DESC',
		'post_status' => 'publish',
		'post_type' => 'post',
	]);
};

function register_post_types() {
  register_post_type('slider', [
    'labels' => [
      'name' => 'Головний слайдер',
      'singular_name' => 'Головний слайдер',
      'add_new' => 'Додати слайдер',
      'add_new_item' => 'Додавання слайдера',
      'edit_item' => 'Редагування слайдера',
      'new_item' => 'Новий слайдер',
      'view_item' => 'Дивитись слайдер',
      'search_items' => 'Шукати слайдер',
      'not_found' => 'Не знайдено',
      'not_found_in_trash' => 'Не знайдено в корзині',
      'parent_item_colon' => '',
      'menu_name' => 'Головний слайдер',
    ],
    'public' => true,
    'menu_position' => 4,
    'menu_icon' => 'dashicons-format-aside',
    'hierarchical' => true,
    'supports' => ['title', 'editor', 'comments', 'thumbnail'],
    'has_archive' => true,
    'rewrite' => true,
    'query_var' => true,
    'show_in_rest' => true
  ]);
};

if (function_exists('acf_add_options_page')) {

	acf_add_options_page([
		'menu_title' => 'Додаткові поля',
		'menu_slug' => 'theme-general-settings',
		'position' => '5'
	]);

	acf_add_options_sub_page([
		'page_title' => 'Блок розкладу',
		'menu_title' => 'Schedule',
		'parent_slug' => 'theme-general-settings',
	]);

	acf_add_options_sub_page([
		'page_title' => 'Блок номер телефону',
		'menu_title' => 'Call_us',
		'parent_slug' => 'theme-general-settings',
	]);
	acf_add_options_sub_page([
		'page_title' => 'Блок контактів',
		'menu_title' => 'Contacts',
		'parent_slug' => 'theme-general-settings',
	]);
	acf_add_options_sub_page([
		'page_title' => 'Блок підвалу',
		'menu_title' => 'Footer',
		'parent_slug' => 'theme-general-settings',
	]);

};



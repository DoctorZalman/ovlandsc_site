<?php
// show admin_bar
add_filter('show_admin_bar', '__return_false');

add_action( 'wp_enqueue_scripts', 'my_scripts_and_styles');
add_action( 'init', 'register_post_types');
add_theme_support('post-thumbnails'); // можливість додавати картинки в пости і т.д
//add_action( 'widgets_init', 'widgets_zones' );
add_action( 'widgets_init', 'blog_single_right' );

function my_scripts_and_styles() {
//  wp_deregister_script('jquery');
//  wp_enqueue_script('jquery-1.12.4', get_template_directory_uri().'/js/jquery-1.12.4.min.js', [], null, true);
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

  wp_enqueue_script('themepunch', get_template_directory_uri().'/js/revolution/jquery.themepunch.tools.min.js', [], null, true);
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
  wp_enqueue_style('responsive', get_template_directory_uri().'/css/responsive.css');
  wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css');
  wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.css');
  wp_enqueue_style('flaticon', get_template_directory_uri().'/css/flaticon.css');
  wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.css');
  wp_enqueue_style('slick', get_template_directory_uri().'/css/slick.css');
  wp_enqueue_style('slick-theme', get_template_directory_uri().'/css/slick-theme.css');
  wp_enqueue_style('fancybox', get_template_directory_uri().'/css/jquery.fancybox.css');
  wp_enqueue_style('settings', get_template_directory_uri().'/css/revolution/settings.css');
  wp_enqueue_style('layers', get_template_directory_uri().'/css/revolution/layers.css');
  wp_enqueue_style('navigation', get_template_directory_uri().'/css/revolution/navigation.css');
  wp_enqueue_style('style', get_template_directory_uri().'/css/style.css');
}

//register menus
//add_action( 'after_setup_theme', 'register_menus');
function blog_single_right() {
	register_sidebar([
		'name'=> 'blog single right',
		'id' => 'blog_single_right',
	]);
}

register_nav_menus([
  'nav_menu' => 'Головне меню',
  'footer_menu' => 'Footer menu'
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

function getPhone() {
	return get_field('phone_us', 'options');
};

function getBlogs() {
	return get_posts([
		'numberposts' => 3,
		'orderby' => 'date',
		'order' => 'DESC',
		'post_status' => 'publish',
		'post_type' => 'post',
	]);
};


function getServices() {
	return get_posts([
		'numberposts' => 2,
		'orderby' => 'date',
		'order' => 'DESC',
		'post_status' => 'publish',
		'post_type' => 'services',
	]);
};

function getServices_page() {
	return get_posts([
		'numberposts' => -1,
		'orderby' => 'date',
		'order' => 'DESC',
		'post_status' => 'publish',
		'post_type' => 'services',
	]);
};

function getGallery() {
	return get_posts([
		'numberposts' => 4,
		'orderby' => 'date',
		'order' => 'DESC',
		'post_status' => 'publish',
		'post_type' => 'gallery',
	]);
};

function getTestimonial() {
	return get_posts([
		'numberposts' => -1,
		'orderby' => 'date',
		'order' => 'DESC',
		'post_status' => 'publish',
		'post_type' => 'testimonial',
	]);
};

function getAllgallery() {
	return get_posts([
		'numberposts' => -1,
		'orderby' => 'date',
		'order' => 'DESC',
		'post_status' => 'publish',
		'post_type' => 'gallery',
	]);
};

function getOur_history() {
	return get_posts([
		'numberposts' => -1,
		'orderby' => 'date',
		'order' => 'DESC',
		'post_status' => 'publish',
		'post_type' => 'our_history',
	]);
};

function getCounter() {
	return get_field('experience_company', '191');
};

function getWho_we_are_desc() {
	return get_field('who_we_are_desc1', '157');
};

function getOur_process() {
	return get_field('step_1', 'options');
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
    'menu_icon' => 'dashicons-format-video',
    'hierarchical' => true,
    'supports' => ['title', 'editor', 'comments', 'thumbnail'],
    'has_archive' => true,
    'rewrite' => true,
    'query_var' => true,
    'show_in_rest' => true
  ]);

	register_post_type('services', [
		'labels' => [
			'name' => 'Сервіс',
			'singular_name' => 'Сервіс',
			'add_new' => 'Додати сервіс',
			'add_new_item' => 'Додавання сервісу',
			'edit_item' => 'Редагування сервісу',
			'new_item' => 'Новий сервіс',
			'view_item' => 'Дивитись сервіс',
			'search_items' => 'Шукати сервіс',
			'not_found' => 'Не знайдено',
			'not_found_in_trash' => 'Не знайдено в корзині',
			'parent_item_colon' => '',
			'menu_name' => 'Сервіс',
		],
		'public' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-admin-tools',
		'hierarchical' => true,
		'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
		'has_archive' => true,
		'rewrite' => true,
    'taxonomies' => ['category'],
		'query_var' => true,
		'show_in_rest' => true
	]);

	register_post_type('gallery', [
		'labels' => [
			'name' => 'Наші проекти',
			'singular_name' => 'Проекти',
			'add_new' => 'Додати проект',
			'add_new_item' => 'Додавання проект',
			'edit_item' => 'Редагування проект',
			'new_item' => 'Новий проект',
			'view_item' => 'Дивитись проект',
			'search_items' => 'Шукати проект',
			'not_found' => 'Не знайдено',
			'not_found_in_trash' => 'Не знайдено в корзині',
			'parent_item_colon' => '',
			'menu_name' => 'Проекти',
		],
		'public' => true,
		'menu_position' => 6,
		'menu_icon' => 'dashicons-images-alt',
		'hierarchical' => true,
		'supports' => ['title', 'excerpt', 'thumbnail'],
		'has_archive' => true,
		'rewrite' => true,
		'query_var' => true,
		'show_in_rest' => true
	]);

	register_post_type('testimonial', [
		'labels' => [
			'name' => 'Відгуки',
			'singular_name' => 'Відгуки',
			'add_new' => 'Додати відгук',
			'add_new_item' => 'Додавання відгуку',
			'edit_item' => 'Редагування ',
			'new_item' => 'Новий відгук',
			'view_item' => 'Дивитись відгук',
			'search_items' => 'Шукати відгук',
			'not_found' => 'Не знайдено',
			'not_found_in_trash' => 'Не знайдено в корзині',
			'parent_item_colon' => '',
			'menu_name' => 'Відгуки',
		],
		'public' => true,
		'menu_position' => 9,
		'menu_icon' => 'dashicons-images-alt',
		'hierarchical' => true,
		'supports' => ['title', 'excerpt', 'thumbnail'],
		'has_archive' => true,
		'rewrite' => true,
		'query_var' => true,
		'show_in_rest' => true
	]);

	register_post_type('our_history', [
		'labels' => [
			'name' => 'Наша історія',
			'singular_name' => 'Історія',
			'add_new' => 'Додати подію',
			'add_new_item' => 'Додавання події',
			'edit_item' => 'Редагування події',
			'new_item' => 'Нова подія',
			'view_item' => 'Дивитись подію',
			'search_items' => 'Шукати подію',
			'not_found' => 'Не знайдено',
			'not_found_in_trash' => 'Не знайдено в корзині',
			'parent_item_colon' => '',
			'menu_name' => 'Історія',
		],
		'public' => true,
		'menu_position' => 7,
		'menu_icon' => 'dashicons-clock',
		'hierarchical' => true,
		'supports' => ['title', 'excerpt', 'thumbnail'],
		'has_archive' => true,
		'rewrite' => true,
		'query_var' => true,
		'show_in_rest' => true
	]);
	register_post_type('our_counter', [
	  'labels' => [
		  'name' => 'Наш досвід',
		  'singular_name' => 'Досвід',
		  'add_new' => 'Додати',
		  'add_new_item' => 'Додавання',
		  'edit_item' => 'Редагування',
		  'new_item' => 'Новий',
		  'view_item' => 'Дивитись',
		  'search_items' => 'Шукати',
		  'not_found' => 'Не знайдено',
		  'not_found_in_trash' => 'Не знайдено в корзині',
		  'parent_item_colon' => '',
		  'menu_name' => 'Досвід',
		],
		'public' => true,
		'menu_position' => 7,
		'menu_icon' => 'dashicons-universal-access',
		'hierarchical' => true,
		'supports' => ['title'],
		'has_archive' => true,
		'rewrite' => true,
		'query_var' => true,
		'show_in_rest' => true
	]);
};

if (function_exists ('acf_add_options_page')) {

	acf_add_options_page([
		'menu_title' => 'Додаткові поля',
		'menu_slug' => 'theme-general-settings',
		'position' => '9'
	]);

	acf_add_options_sub_page([
		'page_title' => 'Блок розкладу',
		'menu_title' => 'Schedule',
		'parent_slug' => 'theme-general-settings',
	]);

	acf_add_options_sub_page([
		'page_title' => 'Блок контактів',
		'menu_title' => 'Contacts',
		'parent_slug' => 'theme-general-settings',
	]);

	acf_add_options_sub_page([
		'page_title' => 'Блок Процесів',
		'menu_title' => 'Process',
		'parent_slug' => 'theme-general-settings',
	]);
};


// copyright
function comicpress_copyright() {
	global $wpdb;
	$copyright_dates = $wpdb->get_results("
SELECT
YEAR(min(post_date_gmt)) AS firstdate,
YEAR(max(post_date_gmt)) AS lastdate
FROM
$wpdb->posts
WHERE
post_status = 'publish'
");
	$output = '';
	if($copyright_dates) {
		$copyright = "&copy; " . $copyright_dates[0]->firstdate;
		if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
			$copyright .= '-' . $copyright_dates[0]->lastdate;
		}
		$output = $copyright;
	}
	return $output;
}

function format_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li class="media comment">
		<div class="img-fluid">
			<?php echo get_avatar( $comment, 75); ?>
		</div>
		<div class="media-body pt-xl-2 pl-3">
			<h5 class="d-inline"><?php comment_author(); ?></h5>
			<span class="date"><?php comment_date('d.m.Y g:i a');?></span>
			<p><?php comment_text(); ?></p>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</div>
	</li>
<?php };

//function the_breadcrumb(){
//
//	// получаем номер текущей страницы
//	$pageNum = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
//
//	$separator = ' &raquo; '; //  »
//
//	// если главная страница сайта
//	if( is_front_page() ){
//
//		if( $pageNum > 1 ) {
//			echo '<a href="' . site_url() . '">Главная</a>' . $separator . $pageNum . '-я страница';
//		} else {
//			echo 'Вы находитесь на главной странице';
//		}
//
//	} else { // не главная
//
//		echo '<a href="' . site_url() . '">Главная</a>' . $separator;
//
//
//		if( is_single() ){ // записи
//
//			the_category(', '); echo $separator; the_title();
//
//		} elseif ( is_page() ){ // страницы WordPress
//
//			the_title();
//
//		} elseif ( is_category() ) {
//
//			single_cat_title();
//
//		} elseif( is_tag() ) {
//
//			single_tag_title();
//
//		} elseif ( is_day() ) { // архивы (по дням)
//
//			echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $separator;
//			echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a>' . $separator;
//			echo get_the_time('d');
//
//		} elseif ( is_month() ) { // архивы (по месяцам)
//
//			echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $separator;
//			echo get_the_time('F');
//
//		} elseif ( is_year() ) { // архивы (по годам)
//
//			echo get_the_time('Y');
//
//		} elseif ( is_author() ) { // архивы по авторам
//
//			global $author;
//			$userdata = get_userdata($author);
//			echo 'Опубликовал(а) ' . $userdata->display_name;
//
//		} elseif ( is_404() ) { // если страницы не существует
//
//			echo 'Ошибка 404';
//
//		}
//
//		if ( $pageNum > 1 ) { // номер текущей страницы
//			echo ' (' . $pageNum . '-я страница)';
//		}
//
//	}
//
//}

<?
include $_SERVER['DOCUMENT_ROOT'].'/wp-head.php';
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    // Подключение основного файла стилей темы
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    // Пример подключения дополнительных стилей
    wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/swiper/swiper-bundle.min.css' );
    wp_enqueue_style( 'avenir', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'splide-skyblue', get_template_directory_uri() . '/css/avenir' );
    wp_enqueue_style( 'additional-style', get_template_directory_uri() . '/assets/splidejs/dist/css/themes/splide-skyblue.min.css' );
    wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/npm/swiper/swiper-bundle.min.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/npm/bootstrap/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'uikit', get_template_directory_uri() . '/npm/uikit/dist/css/uikit.min.css' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/ajax/libs/animate.css/4.1.1/animate.min.css' );
    wp_enqueue_style( 'bebas-neue', get_template_directory_uri() . '/css/bebas-neue' );
    wp_enqueue_style( 'style-add', get_template_directory_uri().'/assets/css/style.css');
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_assets' );
function my_theme_enqueue_assets() {
    // Подключение JavaScript файла
    wp_enqueue_script( 'jquery3', get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquery31', get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js', array(), '1.0.0', false );
    wp_enqueue_script( 'imask', get_template_directory_uri() . '/imask/dist/imask.js', array(), '1.0.0', false );
    wp_enqueue_script( 'uikit', get_template_directory_uri() . '/npm/uikit/dist/js/uikit.min.js', array(), '1.0.0', false );
    wp_enqueue_script( 'uikit-icons', get_template_directory_uri() . '/npm/uikit/dist/js/uikit-icons.min.js', array(), '1.0.0', false );
    wp_enqueue_script( 'splide', get_template_directory_uri() . '/assets/splidejs/dist/js/splide.min.js', array(), '1.0.0', false );
    wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/npm/swiper/swiper-bundle.min.js', array(), '1.0.0', false );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/npm/bootstrap/dist/js/bootstrap.bundle.min.js' , array(), '1.0.0', false );
    wp_enqueue_script( 'functionss', get_template_directory_uri() . '/js/functions.js', array(), '1.0.0', false );
    // Параметр true означает, что скрипт будет загружен в подвале. Установите false, если нужно загрузить в заголовке.
}
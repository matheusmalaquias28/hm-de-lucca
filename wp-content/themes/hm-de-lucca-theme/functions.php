<?php
/**
 * HM De Lucca — functions.php
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/* ============================================================
   THEME SETUP
============================================================ */
function hm_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );
    add_theme_support( 'menus' );

    register_nav_menus( [
        'primary' => __( 'Menu Principal', 'hm-delucca' ),
        'footer'  => __( 'Menu Rodapé', 'hm-delucca' ),
    ] );
}
add_action( 'after_setup_theme', 'hm_theme_setup' );

/* ============================================================
   ENQUEUE SCRIPTS & STYLES
============================================================ */
function hm_theme_scripts() {
    $v = '2.0.' . filemtime( get_template_directory() . '/assets/css/main.css' );

    // Google Fonts — Manrope (modern sans-serif)
    wp_enqueue_style(
        'hm-fonts',
        'https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap',
        [],
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'hm-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [ 'hm-fonts' ],
        $v
    );

    // Main JS (defer)
    wp_enqueue_script(
        'hm-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        $v,
        true
    );

    // Pass AJAX url and site URL to JS
    wp_localize_script( 'hm-main', 'HM', [
        'siteUrl'  => home_url( '/' ),
        'themeUrl' => get_template_directory_uri(),
    ] );
}
add_action( 'wp_enqueue_scripts', 'hm_theme_scripts' );

/* ============================================================
   ADD DEFER TO SCRIPTS
============================================================ */
function hm_defer_scripts( $tag, $handle, $src ) {
    if ( $handle === 'hm-main' ) {
        return '<script defer src="' . esc_url( $src ) . '"></script>' . "\n";
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'hm_defer_scripts', 10, 3 );

/* ============================================================
   PRELOAD FONTS
============================================================ */
function hm_preload_fonts() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}
add_action( 'wp_head', 'hm_preload_fonts', 1 );

/* ============================================================
   AUTO-CREATE PAGES ON THEME ACTIVATION
============================================================ */
function hm_create_pages() {
    $pages = [
        [ 'title' => 'Áreas de Atuação', 'slug' => 'areas-de-atuacao',   'template' => 'page-areas.php' ],
        [ 'title' => 'Equipe',           'slug' => 'equipe',             'template' => 'page-equipe.php' ],
        [ 'title' => 'Blog',             'slug' => 'blog',               'template' => '' ],
        [ 'title' => 'Fale Conosco',     'slug' => 'fale-conosco',       'template' => '' ],
        [ 'title' => 'Trabalhe Conosco', 'slug' => 'trabalhe-conosco',   'template' => '' ],
        [ 'title' => 'Política de Privacidade', 'slug' => 'politica-de-privacidade', 'template' => '' ],
        [ 'title' => 'Termos de Uso',    'slug' => 'termos-de-uso',      'template' => '' ],
        // Páginas individuais de área de atuação
        [ 'title' => 'Direito Criminal',    'slug' => 'direito-criminal',    'template' => 'page-area.php' ],
        [ 'title' => 'Direito da Saúde',    'slug' => 'direito-da-saude',    'template' => 'page-area.php' ],
        [ 'title' => 'Direito Imobiliário', 'slug' => 'direito-imobiliario', 'template' => 'page-area.php' ],
    ];

    foreach ( $pages as $p ) {
        if ( ! get_page_by_path( $p['slug'] ) ) {
            $id = wp_insert_post( [
                'post_title'   => $p['title'],
                'post_name'    => $p['slug'],
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_content' => '',
            ] );
            if ( $id && ! is_wp_error( $id ) && ! empty( $p['template'] ) ) {
                update_post_meta( $id, '_wp_page_template', $p['template'] );
            }
        }
    }

    // Set static front page if not set
    if ( ! get_option( 'page_on_front' ) ) {
        $home = get_page_by_path( 'home' );
        if ( ! $home ) {
            $home_id = wp_insert_post( [
                'post_title'  => 'Home',
                'post_name'   => 'home',
                'post_status' => 'publish',
                'post_type'   => 'page',
            ] );
            update_option( 'show_on_front', 'page' );
            update_option( 'page_on_front', $home_id );
        }
    }
}
add_action( 'after_switch_theme', 'hm_create_pages' );

// Also run on init so pages/menu get created even if theme was already active
add_action( 'init', 'hm_ensure_setup', 20 );
function hm_ensure_setup() {
    // Only run once (check if home page already exists)
    if ( get_page_by_path( 'home' ) || get_option( 'page_on_front' ) ) return;
    hm_create_pages();
}

// Garante que as páginas individuais de área existam (mesmo com tema já ativo)
add_action( 'init', 'hm_ensure_area_pages', 25 );
function hm_ensure_area_pages() {
    $area_pages = [
        [ 'title' => 'Direito Criminal',    'slug' => 'direito-criminal',    'template' => 'page-area.php' ],
        [ 'title' => 'Direito da Saúde',    'slug' => 'direito-da-saude',    'template' => 'page-area.php' ],
        [ 'title' => 'Direito Imobiliário', 'slug' => 'direito-imobiliario', 'template' => 'page-area.php' ],
    ];
    foreach ( $area_pages as $p ) {
        if ( ! get_page_by_path( $p['slug'] ) ) {
            $id = wp_insert_post( [
                'post_title'   => $p['title'],
                'post_name'    => $p['slug'],
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_content' => '',
            ] );
            if ( $id && ! is_wp_error( $id ) ) {
                update_post_meta( $id, '_wp_page_template', $p['template'] );
            }
        }
    }
}

/* ============================================================
   BODY CLASSES
============================================================ */
function hm_body_classes( $classes ) {
    if ( is_front_page() ) $classes[] = 'is-front-page';
    return $classes;
}
add_filter( 'body_class', 'hm_body_classes' );

/* ============================================================
   EXCERPT LENGTH
============================================================ */
function hm_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'hm_excerpt_length' );

function hm_excerpt_more( $more ) {
    return '…';
}
add_filter( 'excerpt_more', 'hm_excerpt_more' );

/* ============================================================
   DISABLE EMOJI (PERFORMANCE)
============================================================ */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/* ============================================================
   WIDGET AREAS
============================================================ */
function hm_register_sidebars() {
    register_sidebar( [
        'name'          => __( 'Sidebar Blog', 'hm-delucca' ),
        'id'            => 'sidebar-blog',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ] );
}
add_action( 'widgets_init', 'hm_register_sidebars' );

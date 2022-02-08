<?php

    /* ==== Add Google Fonts ==== */
    function addGoogleFonts() {
        wp_enqueue_style( 'addGoogleFonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap', false ); 
    }
    add_action('wp_enqueue_scripts', 'addGoogleFonts');


    /* ==== Register Stylesheets ==== */
    function registerCustomStyleSheets() {
        wp_register_style("reset", get_template_directory_uri() . "/css/reset.css", '', '1.0.0');
        wp_register_style("slick", get_template_directory_uri() . "/css/slick.css", '', '1.0.0');
        wp_register_style("slick-theme", get_template_directory_uri() . "/css/slick-theme.css", '', '1.0.0');
        wp_register_style("main", get_template_directory_uri() . "/css/main.css", '', '1.0.0');
    }
    add_action('wp_enqueue_scripts', 'registerCustomStyleSheets');


    /* ==== Add Stylesheets ==== */
    function add_theme_stylesheets() {
        wp_enqueue_style('fontAwesome', '//use.fontawesome.com/releases/v5.8.1/css/all.css', NULL, '1.0', 'all');
        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_style('reset');
        wp_enqueue_style('slick');
        wp_enqueue_style('slick-theme');
        wp_enqueue_style('scrollTop');
        wp_enqueue_style('main');
    }
    add_action('wp_enqueue_scripts', 'add_theme_stylesheets');


    /* ==== Theme Scripts ==== */
    function addThemeScripts() {
        wp_enqueue_script('jquery');
        wp_enqueue_script("slick", get_template_directory_uri() . "/js/slick.min.js", '', '1.5.7');
        wp_enqueue_script("main", get_template_directory_uri() . "/js/main.js", '', '1.0.0');
    }
    add_action('wp_enqueue_scripts', 'addThemeScripts');


    /* ==== Favicon ==== */
    function myfavicon() {
        echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_template_directory_uri().'/images/favicon.ico" />';
    }
    add_action('wp_head', 'myfavicon');


    /* ==== Theme Options ==== */
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus');


    /* ==== Post Options ==== */
    add_post_type_support( 'post', 'excerpt' );


    /* ==== Menus ==== */
    register_nav_menus( 
        ['header' => 'Header']
    );

    /* ==== Custom Image Sizes ==== */
    add_image_size('blog-large', 800, 400, false );
    add_image_size('blog-small', 300, 200, true );


    /* ==== Limit excerpt ==== */
    function custom_excerpt_length( $length ) {
        return 20;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


    /* ==== Custom Post -Guest ==== */
    function custom_post_guests() 
    {
        $args = [
            'labels' => [
                'name' => 'Guests',
                'singular_name' => 'Guest'
            ],
            'menu_icon' => 'dashicons-groups',
            'hierarchical' => false,
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
            'rewrite' => ['slug' => 'guests']

        ];

        register_post_type('guests', $args);
    }
    add_action('init', 'custom_post_guests', 0);


    /* ==== Guest - Resident taxonomy ==== */
    function guest_taxonomy() 
    {
        $args = array(
            'labels' => [
                'name' => 'Types',
                'singular_name' => 'Type'
            ],
            'public' => true,
            'show_ui' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'hierarchical' => true
        );

        register_taxonomy( 'guest_type', array('guests') , $args );
    }
    add_action('init', 'guest_taxonomy', 0); 


    /* ==== Custom Post Read ==== */
    function custom_post_read() 
    {
        $args = [
            'labels' => [
                'name' => 'Read',
                'singular_name' => 'Read'
            ],
            'menu_icon' => 'dashicons-format-aside',
            'hierarchical' => false,
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
            'rewrite' => ['slug' => 'read']

        ];

        register_post_type('read', $args);
    }
    add_action('init', 'custom_post_read', 0); 
    
    
    /* ==== Read - Custom taxonomy ==== */
    function guest_taxonomy_read() 
    {
        $args = array(
            'labels' => [
                'name' => 'Types',
                'singular_name' => 'Type'
            ],
            'public' => true,
            'show_in_rest' => true,
            'hierarchical' => true
        );

        register_taxonomy( 'read_type', array('read') , $args );
    }
    add_action('init', 'guest_taxonomy_read', 0); 

    /* ==== Custom Post Watch ==== */
    function custom_post_watch() 
    {
        $args = [
            'labels' => [
                'name' => 'Watch',
                'singular_name' => 'Watch'
            ],
            'menu_icon' => 'dashicons-format-video',
            'hierarchical' => false,
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
            'rewrite' => ['slug' => 'watch']

        ];

        register_post_type('watch', $args);
    }
    add_action('init', 'custom_post_watch', 0); 
       
       
    /* ==== Watch - Custom taxonomy ==== */
    function guest_taxonomy_watch() 
    {
        $args = array(
            'labels' => [
                'name' => 'Types',
                'singular_name' => 'Type'
            ],
            'public' => true,
            'show_in_rest' => true,
            'hierarchical' => true
        );

        register_taxonomy( 'watch_type', array('watch') , $args );
    }
    add_action('init', 'guest_taxonomy_watch', 0); 


    /* ==== Custom Post Listen ==== */
    function custom_post_listen() 
    {
        $args = [
            'labels' => [
                'name' => 'Listen',
                'singular_name' => 'Listen'
            ],
            'menu_icon' => 'dashicons-controls-volumeon',
            'hierarchical' => false,
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
            'rewrite' => ['slug' => 'listen']

        ];

        register_post_type('listen', $args);
    }
    add_action('init', 'custom_post_listen', 0); 
        
        
    /* ==== Watch - Custom taxonomy ==== */
    function guest_taxonomy_listen() 
    {
        $args = array(
            'labels' => [
                'name' => 'Types',
                'singular_name' => 'Type'
            ],
            'public' => true,
            'show_in_rest' => true,
            'hierarchical' => true
        );

        register_taxonomy( 'listen_type', array('listen') , $args );
    }
    add_action('init', 'guest_taxonomy_listen', 0); 



    add_filter('acf/settings/remove_wp_meta_box', '__return_false');    

    /* ==== SEARCH FORM ==== */ 
    function wp_search_form( $form ) { 
        $form = '<div class="search searchform">
                <form role="search" method="get" action="' 
              . home_url( '/' ) . '" > <label class="screen-reader-text" for="s">' 
              . __('', 'domain') . '</label> <input type="search" class="search-field" value="' 
              . get_search_query() 
              . '" name="s" id="s" placeholder="Search our site" /> 
              <button type="submit" id="searchsubmit" class="search-submit fas fa-search" value="'
              . esc_attr__('', 'domain') .'" /> </form></div>'; 
              
        return $form; 
    } 
    
    add_filter( 'get_search_form', 'wp_search_form' );


    @ini_set( 'upload_max_size' , '512M' );
    @ini_set( 'post_max_size', '128M');
    @ini_set( 'max_execution_time', '300' );


    /* ==== MAKE THEME WIDGET AWARE ==== */
    if (function_exists('register_sidebar')) {

        register_sidebar(array(
            'name' => 'Widgetized Area',
            'id'   => 'widgetized-area',
            'description'   => 'This is a widgetized area.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>'
        ));
    
    }


    /* ==== ADD GOOGLE ANALYTICS ==== */
    add_action('wp_head', 'wpb_add_googleanalytics');
    function wpb_add_googleanalytics() { ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z7Q5KTXRLR"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-Z7Q5KTXRLR');
        </script>
    
    <?php } ?>
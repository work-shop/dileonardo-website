<?php


class WS_Site {

    public function __construct() {

        add_action('init', array( $this, 'register_image_sizing') );
        add_action('init', array( $this, 'register_theme_support') );
        add_action('init', array( $this, 'register_post_types_and_taxonomies' ) );

        add_action('wp_enqueue_scripts', array( $this, 'enqueue_scripts_and_styles' ) );

        add_filter('show_admin_bar', '__return_false');

        new WS_CDN_Url();

    }


    public function register_post_types_and_taxonomies() {

        //WS_Custom_Category::register();
        //WS_Custom_Post::register();

        register_post_type( 'projects',
            array(
                'labels' => array(
                    'name' => 'Projects',
                    'singular_name' =>'Project',
                    'add_new' => 'Add New',
                    'add_new_item' => 'Add New Project',
                    'edit_item' => 'Edit Project',
                    'new_item' => 'New Project',
                    'all_items' => 'All Projects',
                    'view_item' => 'View Project',
                    'search_items' => 'Search Projects',
                    'not_found' =>  'No Projects found',
                    'not_found_in_trash' => 'No Projects found in Trash',
                ),
                'public' => true,
                'has_archive' => false,
                'rewrite' => array('slug' => 'projects'),
                'show_in_rest'       => true,
                'rest_base'          => 'projects',
                'rest_controller_class' => 'WP_REST_Posts_Controller',
                'supports' => array( 'title', 'thumbnail'),
                'menu_icon'   => 'dashicons-building'
            ));

        register_taxonomy(
            'project-categories',
            'projects',
            array(
                'hierarchical' => true,
                'label' => 'Project Categories',
                'show_admin_column' => true,
                'query_var' => true,
                'rewrite' => array('slug' => 'project-categories'),
                'rest_base'          => 'project-categories',
                'rest_controller_class' => 'WP_REST_Terms_Controller',
            )
        );
        register_taxonomy(
            'project-regions',
            'projects',
            array(
                'hierarchical' => true,
                'label' => 'Project Regions',
                'show_admin_column' => true,
                'query_var' => true,
                'rewrite' => array('slug' => 'project-regions'),
                'rest_base'          => 'project-regions',
                'rest_controller_class' => 'WP_REST_Terms_Controller',
            )
        );

        register_post_type( 'thoughts',
            array(
                'labels' => array(
                    'name' => 'Thoughts',
                    'singular_name' =>'Thought',
                    'add_new' => 'Add New',
                    'add_new_item' => 'Add New Thought',
                    'edit_item' => 'Edit Thought',
                    'new_item' => 'New Thought',
                    'all_items' => 'All Thoughts',
                    'view_item' => 'View Thought',
                    'search_items' => 'Search Thoughts',
                    'not_found' =>  'No Thoughts found',
                    'not_found_in_trash' => 'No Thoughts found in Trash',
                ),
                'public' => true,
                'has_archive' => false,
                'rewrite' => array('slug' => 'thoughts'),
                'show_in_rest'       => true,
                'rest_base'          => 'thoughts',
                'rest_controller_class' => 'WP_REST_Posts_Controller',
                'supports' => array( 'title', 'thumbnail'),
                'menu_icon'   => 'dashicons-lightbulb'
            ));

        register_taxonomy(
            'thought-categories',
            'thoughts',
            array(
                'hierarchical' => true,
                'label' => 'Thought Categories',
                'show_admin_column' => true,
                'query_var' => true,
                'rewrite' => array('slug' => 'thought-categories'),
                'rest_base'          => 'thought-categories',
                'rest_controller_class' => 'WP_REST_Terms_Controller',
            )
        );
        global $wp_taxonomies;
        $taxonomy_name = 'thought-categories';
        if ( isset( $wp_taxonomies[ $taxonomy_name ] ) ) {
            $wp_taxonomies[ $taxonomy_name ]->show_in_rest = true;
            $wp_taxonomies[ $taxonomy_name ]->rest_base = $taxonomy_name;
            $wp_taxonomies[ $taxonomy_name ]->rest_controller_class = 'WP_REST_Terms_Controller';
        }

        register_post_type( 'news',
            array(
                'labels' => array(
                    'name' => 'News',
                    'singular_name' =>'News Story',
                    'add_new' => 'Add New',
                    'add_new_item' => 'Add New News Story',
                    'edit_item' => 'Edit News Story',
                    'new_item' => 'New News Story',
                    'all_items' => 'All News',
                    'view_item' => 'View News Story',
                    'search_items' => 'Search News',
                    'not_found' =>  'No News Stories found',
                    'not_found_in_trash' => 'No News Stories found in Trash',
                ),
                'public' => true,
                'has_archive' => false,
                'rewrite' => array('slug' => 'news'),
                'show_in_rest'       => true,
                'rest_base'          => 'news',
                'rest_controller_class' => 'WP_REST_Posts_Controller',
                'supports' => array( 'title', 'thumbnail'),
                'menu_icon'   => 'dashicons-media-document'
            ));

        register_taxonomy(
            'news-categories',
            'news',
            array(
                'hierarchical' => true,
                'label' => 'News Categories',
                'show_admin_column' => true,
                'query_var' => true,
                'show_in_rest' => true,
                'rewrite' => array('slug' => 'news-categories'),
                'rest_base'          => 'news-categories',
                'rest_controller_class' => 'WP_REST_Terms_Controller',
            )
        );

    }


    public function register_image_sizing() {
        if ( function_exists( 'add_image_size' ) ) {
            add_image_size('xs', 300, 187, false); //1.6:1
            add_image_size('xs_cropped', 300, 187, true); //1.6:1
            add_image_size('xs_square', 300, 300, true);
            add_image_size('sm', 768, 480, false); //1.6:1
            add_image_size('sm_cropped', 768, 480, true); //1.6:1
            add_image_size('sm_square', 768, 768, true);
            add_image_size('md', 1024, 640, false); //1.6:1
            add_image_size('md_cropped', 1024, 640, true); //1.6:1
            add_image_size('md_square', 1024, 1024, true);
            add_image_size('lg', 1440, 900, false); //1.6:1
            add_image_size('lg_cropped', 1440, 900, true); //1.6:1
            add_image_size('lg_square', 1440, 1440, true);   
            add_image_size('xl', 1920, 1200, false); //1.6:1
            add_image_size('xl_cropped', 1920, 1200, true); //1.6:1
            add_image_size('xl_square', 1920, 1920, true);  
            add_image_size('acf_preview', 300, 300, false);            
            add_image_size('fb', 1200, 630, true);
            add_image_size('page_hero', 1680, 770, true);
        }
    }


    public function register_theme_support() {
        if ( function_exists( 'add_theme_support' ) ) {
            add_theme_support('post-thumbnails');
            add_theme_support( 'menus' );
        }
    }


    public function enqueue_scripts_and_styles() {
        if ( function_exists( 'get_template_directory_uri' ) && function_exists( 'wp_enqueue_style' ) && function_exists( 'wp_enqueue_script' ) ) {

            $main_css = '/bundles/bundle.css';
            $main_js = '/bundles/bundle.js';

            $compiled_resources_dir = get_template_directory();
            $compiled_resources_uri = get_template_directory_uri();

            $main_css_ver = filemtime( $compiled_resources_dir . $main_css ); // version suffixes for cache-busting.
            $main_js_ver = filemtime( $compiled_resources_dir . $main_css ); // version suffixes for cache-busting.

            wp_register_style( 'fonts', get_template_directory_uri() . '/fonts/fonts.css');
            wp_enqueue_style( 'fonts' );  
            wp_enqueue_style('main-css', $compiled_resources_uri . $main_css, array(), null);
            wp_enqueue_script('main-js', $compiled_resources_uri . $main_js, $main_js_ver);

        }
    }


}

?>

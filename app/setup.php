<?php

namespace App;

use Roots\Sage\Container;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;
use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('sage/main.css', asset_path('styles/main.css'), false, null);
    wp_enqueue_script('sage/main.js', asset_path('scripts/main.js'), ['jquery'], null, true);

    if (is_single() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}, 100);

/**
 * Theme setup
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from Soil when plugin is activated
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil-clean-up');
    add_theme_support('soil-jquery-cdn');
    add_theme_support('soil-nav-walker');
    add_theme_support('soil-nice-search');
    add_theme_support('soil-relative-urls');

    /**
     * Enable plugins to manage the document title
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Register navigation menus
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage')
    ]);

    /**
     * Enable post thumbnails
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable HTML5 markup support
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

    /**
     * Enable selective refresh for widgets in customizer
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Use main stylesheet for visual editor
     * @see resources/assets/styles/layouts/_tinymce.scss
     */
    add_editor_style(asset_path('styles/main.css'));
}, 20);

/**
 * Register sidebars
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ];
    register_sidebar([
        'name'          => __('Primary', 'sage'),
        'id'            => 'sidebar-primary'
    ] + $config);
    register_sidebar([
        'name'          => __('Footer', 'sage'),
        'id'            => 'sidebar-footer'
    ] + $config);
});

/**
 * Updates the `$post` variable on each iteration of the loop.
 * Note: updated value is only available for subsequently loaded views, such as partials
 */
add_action('the_post', function ($post) {
    sage('blade')->share('post', $post);
});

/**
 * Setup Sage options
 */
add_action('after_setup_theme', function () {
    /**
     * Add JsonManifest to Sage container
     */
    sage()->singleton('sage.assets', function () {
        return new JsonManifest(config('assets.manifest'), config('assets.uri'));
    });

    /**
     * Add Blade to Sage container
     */
    sage()->singleton('sage.blade', function (Container $app) {
        $cachePath = config('view.compiled');
        if (!file_exists($cachePath)) {
            wp_mkdir_p($cachePath);
        }
        (new BladeProvider($app))->register();
        return new Blade($app['view']);
    });

    /**
     * Create @asset() Blade directive
     */
    sage('blade')->compiler()->directive('asset', function ($asset) {
        return "<?= " . __NAMESPACE__ . "\\asset_path({$asset}); ?>";
    });
});

/**
 * Initialize ACF Builder
 * @link https://roots.io/guides/using-acf-builder-with-sage/
 */
add_action('init', function () {
    if (!function_exists('acf_add_local_field_group')) return;

    collect(glob(config('theme.dir') . '/app/fields/*.php'))->map(function ($field) {
        return require_once($field);
    })->map(function ($field) {
        if ($field instanceof FieldsBuilder) {
            acf_add_local_field_group($field->build());
        }
    });
});

/**
 * Register Database Post Types
 *
 * fields are built in ACF controller
 */
add_action('init', function () {
    //Clinics
    register_post_type('clinic',
        array(
            'labels'      => array(
                'name'          => __('Clinics', 'textdomain'),
                'singular_name' => __('Clinic', 'textdomain'),
            ),
            'public'      => true,
            'has_archive' => true,
            'supports' => ['title', false],
        )
    );
    //Doctors
    register_post_type('doctor',
        array(
            'labels'      => array(
                'name'          => __('Doctors', 'textdomain'),
                'singular_name' => __('Doctor', 'textdomain'),
            ),
            'supports' => ['title', false],
            'public'      => true,
            'has_archive' => true,
        )
    );
    //Invoices
    register_post_type('invoice',
        array(
            'labels'      => array(
                'name'          => __('Invoices', 'textdomain'),
                'singular_name' => __('Invoice', 'textdomain'),
            ),
            'supports' => ['title', false],
            'public'      => true,
            'has_archive' => true,
        )
    );
    //CT Reports
    register_post_type('ct_report',
        array(
            'labels'      => array(
                'name'          => __('CT Reports', 'textdomain'),
                'singular_name' => __('CT Report', 'textdomain'),
            ),
            'supports' => ['title', false],
            'public'      => true,
            'has_archive' => true,
        )
    );
    //Ultrasound Reports
    register_post_type('ultrasound_report',
        array(
            'labels'      => array(
                'name'          => __('Ultrasound Reports', 'textdomain'),
                'singular_name' => __('Ultrasound Report', 'textdomain'),
            ),
            'supports' => ['title', false],
            'public'      => true,
            'has_archive' => true,
        )
    );
    //Echo Reports
    register_post_type('echo_report',
        array(
            'labels'      => array(
                'name'          => __('Echocardiography Reports', 'textdomain'),
                'singular_name' => __('Echocardiography Report', 'textdomain'),
            ),
            'supports' => ['title', false],
            'public'      => true,
            'has_archive' => true,
        )
    );
    //Radio Reports
    register_post_type('radio',
        array(
            'labels'      => array(
                'name'          => __('Radiographic Interpretations', 'textdomain'),
                'singular_name' => __('Radiographic Interpretation', 'textdomain'),
            ),
            'supports' => ['title', false],
            'public'      => true,
            'has_archive' => true,
        )
    );
    //Radio Reports
    register_post_type('misc',
        array(
            'labels'      => array(
                'name'          => __('Misc. Reports', 'textdomain'),
                'singular_name' => __('Misc. Report', 'textdomain'),
            ),
            'supports' => ['title', false],
            'public'      => true,
            'has_archive' => true,
        )
    );
    //Radio Reports
    register_post_type('service',
        array(
            'labels'      => array(
                'name'          => __('Services', 'textdomain'),
                'singular_name' => __('Service', 'textdomain'),
            ),
            'supports' => ['title', false],
            'public'      => true,
            'has_archive' => true,
        )
    );
});

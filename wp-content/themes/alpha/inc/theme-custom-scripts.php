<?php
/**
 * [alpha_scripts description]
 * @return [type] [description]
 */
function alpha_scripts() {
    wp_enqueue_style(
        'fonts-Open-Sans',
        'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap',
        array(),
        true
    );

    wp_enqueue_style(
        'fonts-awesome',
        // get_stylesheet_directory_uri() . '/css/font-awesome.min.css',
        'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        array(),
        'v4.7.0'
    );

    wp_enqueue_style(
        'bootstrap-4',
        get_stylesheet_directory_uri() . '/css/bootstrap.min.css',
        array(),
        'v4.5.0'
    );

    wp_enqueue_style(
        'animate',
        get_stylesheet_directory_uri() . '/css/animate.min.css',
        array(),
        'v3.5.1'
    );

    //Theme Default style.css
    wp_enqueue_style( 'alpha-style', get_stylesheet_uri(), array(), _S_VERSION );

    wp_enqueue_style(
        'custom-style',
        get_stylesheet_directory_uri() . '/css/custom.css',
        array(),
        filemtime( get_stylesheet_directory() . '/css/custom.css' )
    );

    wp_enqueue_style(
    	'responsive',
    	get_stylesheet_directory_uri() . '/css/responsive.css',
    	array(),
    	filemtime( get_stylesheet_directory() . '/css/responsive.css' )
    );

    /**
     * Scripts File
     */
    wp_enqueue_script(
        'popper',
        get_stylesheet_directory_uri() . '/js/popper.min.js',
        array(),
        false,
        true
    );

    wp_enqueue_script(
    	'bootstrap-4',
	    get_stylesheet_directory_uri() . '/js/bootstrap.min.js',
	    array('jquery'),
	    'v4.5.0',
	    true
	);

    wp_enqueue_script(
        'banner-parallux',
        get_stylesheet_directory_uri() . '/js/banner-parallux.js',
        array('jquery'),
        false,
        true
    );

    wp_enqueue_script(
        'wow',
        get_stylesheet_directory_uri() . '/js/wow.js',
        array('jquery'),
        false,
        true
    );

    wp_enqueue_script(
        'jquery.sticky',
        get_stylesheet_directory_uri() . '/js/jquery.sticky.js',
        array('jquery'),
        false,
        true
    );

    wp_enqueue_script(
        'custom',
        get_stylesheet_directory_uri() . '/js/custom.js',
        array('jquery'),
        filemtime( get_stylesheet_directory() . '/js/custom.js' ),
        true
    );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

	//if ( is_page_template( array( 'template-frontpage.php' ) ) ) {}
}
add_action('wp_enqueue_scripts', 'alpha_scripts');

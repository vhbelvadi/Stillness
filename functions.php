<?php
function stillness_register_theme_customizer( $wp_customize ) {
 
    $wp_customize->add_setting(
        'stillness_accent_color',
        array(
            'default'     => '#89a527'
        )
    );
 
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'accent_color',
            array(
                'label'      => __( 'Accent Colour', 'stillness' ),
                'section'    => 'colors',
                'settings'   => 'stillness_accent_color'
            )
        )
    );
 
}

add_action('wp_enqueue_scripts', 'wpdocs_scripts_method');
 
/*
 * Enqueue a script with the correct path.
 */
function wpdocs_scripts_method() {
    wp_enqueue_script(
        'custom_script',
        get_template_directory_uri() . '/responsive-nav.min.js',
        array('jquery')
    );
}

add_action( 'customize_register', 'stillness_register_theme_customizer' );

function stillness_customizer_css() {
    ?>
    <style type="text/css">
        .post a, h1.blog-title a { color: <?php echo get_theme_mod( 'stillness_accent_color' ); ?> !important; }
    </style>
    <?php
}
add_action( 'wp_head', 'stillness_customizer_css' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Main Menu' ),
      'social-menu' => __( 'Social Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

?>

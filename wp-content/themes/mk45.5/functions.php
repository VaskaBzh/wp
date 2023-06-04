<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */

function get_question( $name = null, $args = array() ) {
    /**
     * Fires before the footer template file is loaded.
     *
     * @since 2.1.0
     * @since 2.8.0 The `$name` parameter was added.
     * @since 5.5.0 The `$args` parameter was added.
     *
     * @param string|null $name Name of the specific footer file to use. Null for the default footer.
     * @param array       $args Additional arguments passed to the footer template.
     */
    do_action( 'get_question', $name, $args );

    $templates = array();
    $name      = (string) $name;
    if ( '' !== $name ) {
        $templates[] = "question-{$name}.php";
    }

    $templates[] = 'question.php';

    if ( ! locate_template( $templates, true, true, $args ) ) {
        return false;
    }
}

if ( ! function_exists( 'mk455_support' ) ) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since Twenty Twenty-Two 1.0
     *
     * @return void
     */
    function mk455_support() {

        // Add support for block styles.
        add_theme_support( 'wp-block-styles' );

        // Enqueue editor styles.
        add_editor_style( 'style.css' );

    }

endif;
add_filter( 'template_include', 'custom_archive_product_template', 99 );
function custom_archive_product_template( $template ) {

    if ( is_page( 122 ) ) {
        wc_get_template( 'archive-product.php' );
    }
}

add_action( 'after_setup_theme', 'mk455_support' );

// Add block patterns
//require_once get_template_directory() . '/inc/block-patterns.php';
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
function mk5_45_scripts() {
    wp_enqueue_style(
        'mk5-45-style',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme()->get( 'Version' )
    );

    wp_register_script(
        'mk5-45-app-asset',
        get_template_directory_uri() . '/assets/js/app.js',
        array(),
        wp_get_theme()->get( 'Version' ),
        true
    );
    wp_enqueue_script('mk5-45-app-asset');
}
add_action( 'wp_enqueue_scripts', 'mk5_45_scripts' );
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

// Обработчик формы отправки вопроса
function submit_question_form_handler() {
    if (isset($_POST['action']) && $_POST['action'] === 'submit_question_form') {
        $redirect_url = isset($_POST['redirect_url']) ? esc_url_raw($_POST['redirect_url']) : get_home_url();

        // Проверка на валидность Nonce
        if (!isset($_POST['question_form_nonce']) || !wp_verify_nonce($_POST['question_form_nonce'], 'submit_question_form')) {
            wp_die('Invalid nonce');
        }

        // Получение данных из формы
        $user_name = sanitize_text_field($_POST['user_name']);
        $user_phone = sanitize_text_field($_POST['user_phone']);
        $user_question = sanitize_textarea_field($_POST['user_question']);
        $email_address = get_field('email_address', 79);

        // Подготовка и отправка письма
        $subject = 'Новый вопрос от пользователя';
        $message = "Имя: $user_name\n";
        $message .= "Телефон: $user_phone\n";
        $message .= "Вопрос: $user_question\n";
        $headers = array('Content-Type: text/html; charset=UTF-8');

        if (wp_mail($email_address, $subject, $message, $headers)) {
            wp_safe_redirect($redirect_url); // Перенаправление пользователя после отправки формы
            exit;
        } else {
            wp_die('Error sending email'); // В случае ошибки отправки почты
        }
    }
}
add_action('admin_post_nopriv_submit_question_form', 'submit_question_form_handler');
add_action('admin_post_submit_question_form', 'submit_question_form_handler');
//add_filter( 'template_include', 'custom_archive_product_template', 99 );
//function custom_archive_product_template( $template ) {
//
//    if ( is_page( 122 ) ) {
//        $template = wc_get_template( 'archive-product.php' );
//    }
//
//    return $template;
//}

add_action( 'after_setup_theme', 'mk455_support' );

// Add block patterns
//require_once get_template_directory() . '/inc/block-patterns.php';
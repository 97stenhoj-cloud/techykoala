function connect_styles() {
    if (is_page_template('connect/page-connect.php') || is_page('connect')) {
        wp_enqueue_style(
            'connect-styles',
            get_stylesheet_directory_uri() . '/connect/css/connect.css',
            array(),
            '1.0'
        );
    }
}
add_action('wp_enqueue_scripts', 'connect_styles');

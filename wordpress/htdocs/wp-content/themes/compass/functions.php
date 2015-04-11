<?php
include_once get_template_directory() . '/functions/inkthemes-functions.php';
$functions_path = get_template_directory() . '/functions/';
require_once ($functions_path . 'define_template.php');
/* These files build out the options interface.  Likely won't need to edit these. */
require_once ($functions_path . 'admin-functions.php');  // Custom functions and plugins
require_once ($functions_path . 'admin-interface.php');  // Admin Interfaces 
require_once ($functions_path . 'theme-options.php');   // Options panel
?>
<?php
/**
 * Styles Enqueue 
 */
function compass_add_stylesheet() {
    if (!is_admin()) {
		 wp_enqueue_style('stylesheet',get_stylesheet_uri(),'','','all');
        wp_enqueue_style('compass_Animate_Css', get_template_directory_uri() . "/css/animate.css", '', '', 'all');
    }
}
add_action('wp_enqueue_scripts', 'compass_add_stylesheet');
/**
 * jQuery Enqueue
 */
function compass_wp_enqueue_scripts() {
    wp_enqueue_script('compass-superfish', get_template_directory_uri() . '/js/superfish.js', array('jquery'));
    wp_enqueue_script('compass-modernizr', get_template_directory_uri() . '/js/modernizr.custom.79639.js', array('jquery'));
    wp_enqueue_script('compass-ba-cond', get_template_directory_uri() . '/js/jquery.ba-cond.min.js', array('jquery'));
    wp_enqueue_script('compass-slitslider', get_template_directory_uri() . '/js/jquery.slitslider.js', array('jquery'));
    wp_enqueue_script('compass-responsive-menu-2', get_template_directory_uri() . '/js/menu/jquery.meanmenu.2.0.min.js', array('jquery'));
    wp_enqueue_script('compass-responsive-menu-2-options', get_template_directory_uri() . '/js/menu/jquery.meanmenu.options.js', array('jquery'));
    wp_enqueue_script('compass-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'compass_wp_enqueue_scripts');
function compass_get_option($name) {
    $options = get_option('compass_options');
    if (isset($options[$name]))
        return $options[$name];
}
function compass_update_option($name, $value) {
    $options = get_option('compass_options');
    $options[$name] = $value;
    return update_option('compass_options', $options);
}
function compass_delete_option($name) {
    $options = get_option('compass_options');
    unset($options[$name]);
    return update_option('compass_options', $options);
}
//Enqueue comment thread js
function compass_enqueue_scripts() {
    if (is_singular() and get_site_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_filter('wp_title', 'compass_wp_title', 10, 2);
/**
 * Create a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * @since Compass 1.0
 *
 * @global int $paged WordPress archive pagination page count.
 * @global int $page  WordPress paginated post page count.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function compass_wp_title($title, $sep) {
    global $paged, $page;

    if (is_feed()) {
        return $title;
    }

    // Add the site name.
    $title .= get_bloginfo('name', 'display');

    // Add the site description for the home/front page.
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && ( is_home() || is_front_page() )) {
        $title = "$title $sep $site_description";
    }

    // Add a page number if necessary.
    if (( $paged >= 2 || $page >= 2 ) && !is_404()) {
        $title = "$title $sep " . sprintf(__('Page %s', 'compass'), max($paged, $page));
    }

    return $title;
}
add_action('wp_enqueue_scripts', 'compass_enqueue_scripts');
require_once(get_template_directory() . '/functions/plugin-activation.php');
require_once(get_template_directory() . '/functions/plugin-notify.php');
add_action('tgmpa_register', 'compass_plugins_notify');
?>

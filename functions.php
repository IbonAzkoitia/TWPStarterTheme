<?php
/**
 * TWP Starter Theme functions and definitions
 * php version 7.3.5
 *
 * @category PHP
 * @package  TWPStarterTheme
 * @author   Trinchera WP <info@trincherawp.com>
 * @license  GNU General Public License v3 https://www.gnu.org/licenses/gpl-3.0.html
 * @link     https://trincherawp.com
 */

if (! defined('TWP_VERSION')) {
    // Replace the version number of the theme on each release.
    define('TWP_VERSION', '1.0.0');
}

// Start the theme
require get_template_directory() . '/inc/functions/twp-setup.php';

// Enqueue scripts and styles.
require get_template_directory() . '/inc/functions/enqueue-scripts.php';

// Removes Admin Bar.
add_filter('show_admin_bar', '__return_false');

// Removes Edit Link.
add_filter('edit_post_link', '__return_false');

// Removes Emoji.
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');

// Removes the WordPress version number
remove_action('wp_head', 'wp_generator');

<?php
/**
 * Functions > Enqueue Scripts
 * php version 7.3.5
 *
 * @category PHP
 * @package  TWPStarterTheme
 * @author   Trinchera WP <info@trincherawp.com>
 * @license  GNU General Public License v3 https://www.gnu.org/licenses/gpl-3.0.html
 * @link     https://trincherawp.com
 */

 /**
  * Manages the Scripts and Styles for the theme.
  *
  * @since 1.0.0
  */
function twp_scripts()
{
    wp_enqueue_style(
        'twp',
        get_stylesheet_directory_uri() . '/assets/css/theme.min.css',
        array(),
        TWP_VERSION
    );
}
add_action('wp_enqueue_scripts', 'twp_scripts', 100);

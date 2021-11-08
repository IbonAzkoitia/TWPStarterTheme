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

if (! function_exists('twp_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function twp_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on TrincheraWP, use a find and replace
         * to change 'twp' to the name of your theme in all the
         * template files.
         */
        load_theme_textdomain(
            'twp',
            get_template_directory() . '/languages'
        );

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /**
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         *
         * @since 1.0.0
         */
        add_theme_support('title-tag');

        /**
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @since 1.0.0
         * @link  https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'primary'  => esc_html__('Primary', 'twp'),
            )
        );
    }
endif;
add_action('after_setup_theme', 'twp_setup');

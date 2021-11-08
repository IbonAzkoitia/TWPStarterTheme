<?php
/**
 * Header
 * php version 7.3.5
 *
 * @category PHP
 * @package  TWPStarterTheme
 * @author   Trinchera WP <info@trincherawp.com>
 * @license  GNU General Public License v3 https://www.gnu.org/licenses/gpl-3.0.html
 * @link     https://trincherawp.com
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

  </head>

  <body <?php body_class($body_class); ?>>

    <a href="#content" class="sr-only">
      <?php esc_html_e('Skip to content', 'twp'); ?>
    </a>

<?php
/**
 * @package PhilStar_RSS
 * @version 1.7.2
 */
/*
/**
 * Plugin Name
 *
 * @package           PluginPackage
 * @author            Your Name
 * @copyright         2019 Your Name or Company Name
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       ccs-page-plugin
 * Plugin URI:        https://wordpress.org/plugins/ccs-page-plugin
 * Description:       IPT10 Wordpress CCS Page Plugin
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Micoh Yabut
 * Author URI:        https://example.com
 * Text Domain:       plugin-slug
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://example.com/my-plugin/
 */


define( 'CCS_LOGO', "http://www.aufccs.com/ccs/wp-content/uploads/2020/10/ccsonline-logo.jpg" );
// define( 'SPOTIFY_LINK', "https://open.spotify.com/embed/playlist/7h8Iu7JxGTI86j0fWkX89t?utm_source=generator" );
// define( 'TRAILER_LINK', "https://www.youtube.com/embed/6ZfuNTqbHE8" );


function showLogo()
{
    return '<img src="' . CCS_LOGO . '" alt="Photo" width="200" height="200">';
}

function ccs_activate()
{
    error_log('ccs RSS Plugin is now activated');
}

function ccs_deactivate()
{
    error_log('ccs RSS Plugin is now deactivated');
}

register_activation_hook( __FILE__, 'ccs_activate' );
register_deactivation_hook( __FILE__, 'ccs_deactivate' );
add_shortcode( 'ccs', 'showLogo' );
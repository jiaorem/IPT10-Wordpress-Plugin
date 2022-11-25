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
 * Plugin Name:       personal-page-plugin
 * Plugin URI:        https://wordpress.org/plugins/personal-page-plugin
 * Description:       IPT10 Wordpress Personal Page Plugin
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


define( 'PICTURE_LINK', "https://media-exp1.licdn.com/dms/image/C5603AQHhhWc2LUSd0A/profile-displayphoto-shrink_800_800/0/1596126064268?e=2147483647&v=beta&t=mygpK8sL-SEo4yLhAiyoqKA6eob9t06ko7eRuV6lwWo" );
define( 'SPOTIFY_LINK', "https://open.spotify.com/embed/playlist/7h8Iu7JxGTI86j0fWkX89t?utm_source=generator" );
define( 'TRAILER_LINK', "https://www.youtube.com/embed/6ZfuNTqbHE8" );


function showInfo()
{
    return '
<<<EOD
    <head>

    </head>

    <body>

        <div>
            <img src="' . PICTURE_LINK . '" alt="Photo" width="200" height="200"></br></br>
        </div>
        <div class="center">
            <h2>My Favorite Spotify Playlist</h2>
            <iframe style="border-radius:12px" src="' . SPOTIFY_LINK . '" width="100%" height="500" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
        </div>
        <div class="center">
            <h2>My Favorite Movie Trailer</h2>
            <iframe src="' . TRAILER_LINK . '" title="YouTube video player" width="100%" height="600" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </body>

    <style>
        .center {
            text-align:center
        }

        img {
            border-radius: 50%;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
            }

        body {
            color:antiquewhite;
        }
    </style>

EOD;

';
}

function personal_activate()
{
    error_log('personal RSS Plugin is now activated');
}

function personal_deactivate()
{
    error_log('personal RSS Plugin is now deactivated');
}

register_activation_hook( __FILE__, 'personal_activate' );
register_deactivation_hook( __FILE__, 'personal_deactivate' );
add_shortcode( 'personal', 'showInfo' );
<?php
/*
Plugin Name: 404 Router
Plugin URI:  https://github.com/marshallshoeb/404-router
Description: 404 Router turns those 'Oops, page not found' moments into a smooth ride back to your site's homepage, keeping visitors happy and engaged.
Version:     1.0.0
Author:      Mohammad Shoeb Ansari
Author URI:  https://profiles.wordpress.org/lovemarshall/
License:     GPL-3.0
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

add_action('template_redirect', 'msa_404_router_redirect_to_homepage');

function msa_404_router_redirect_to_homepage() {
    if (is_404()) {
        wp_redirect(home_url(), 301);
        exit();
    }
}

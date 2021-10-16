<?php
/**
* Plugin Name: Elementor - just free
* Plugin URI: https://www.migaweb.de/
* Description: Just show free stuff in Elementor
* Version: 1.0
* Author: Michael Gangolf
* Author URI: https://www.migaweb.de/
**/

add_action('admin_menu', 'elementor_free_styles_menu', 801);
add_action('admin_enqueue_scripts', 'elementor_free_styles_menu_scripts');

function elementor_free_styles_menu()
{
    remove_submenu_page('elementor', 'e-form-submissions');
    remove_submenu_page('elementor', 'elementor_custom_fonts');
    remove_submenu_page('elementor', 'elementor_custom_icons');
    remove_submenu_page('elementor', 'elementor_custom_custom_code');
    remove_submenu_page('elementor', 'go_elementor_pro');
}

function elementor_free_styles_menu_scripts()
{
    wp_enqueue_style('elementor_free_styles', plugins_url('styles/main.css', __FILE__));
}

add_action('elementor/editor/before_enqueue_scripts', function () {
    wp_enqueue_style('admin-styles', plugins_url('styles/main.css', __FILE__));
});

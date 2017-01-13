<?php
//require_once('wp_bootstrap_navwalker.php');

function register_menus() {
    register_nav_menus(
        array(
            'mainmenu' => __('Hauptmenü'),
            'footermenu' => __('Fußmenü')
        )
    );
}
add_action('init', 'register_menus');
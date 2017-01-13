<?php
/*
Plugin Name: Hello Wordpress
Plugin URI:  https://suhrer.consulting/sowhat
Description: First Plugin Ever
Version:     0.0.1
Author:      Stefan Suhrer
Author URI:  https://suhrer.consulting/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: hellowordpress
Domain Path: /languages
*/

add_action('admin_menu', 'hello_world_register');

function hello_world_register() {
  //add_menu_page( string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '', string $icon_url = '', int $position = null );
  add_menu_page('Hello World Page', 'Hello World Menu', 'edit_posts', 'hello-world', 'hello_world', 'dashicons-welcome-write-blog', 3);

}

function hello_world() { ?>
  <div class="wrap">
    <h1>Hello World</h1>
  </div>
<?php }

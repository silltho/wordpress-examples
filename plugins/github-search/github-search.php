<?php

include 'options.php';

/*
Plugin Name: My GitHub Repo Plugin
Plugin URI:  
Description: SHows Github Repos
Version:     0.0.1
Author:      Thomas Siller
Author URI:  
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: dashboardweather
Domain Path: /languages
*/

add_action('wp_dashboard_setup', 'github_plugin_welcome_panel');

function github_plugin_welcome_panel() {
	wp_add_dashboard_widget(
                 'github_dashboard_widget',// Widget slug.
                 'Github Search',          // Title.
                 'github_widget_function'  // Display function.
        );
}

function github_widget_function() {
	$username = get_option('github_username');
	print_r($username.'\'s repos:<hr>');
	$api_request = 'https://api.github.com/users/'.$username.'/repos';
	$api_response = wp_remote_get($api_request);
	$api_data = json_decode(wp_remote_retrieve_body($api_response), true);
	foreach( $api_data as $repo ) { 
		print_r($repo['name']. '<br>');
	}
	/*print_r($api_data['city']['name'] . '<br>');
	print_r('Temp: '.$api_data['list'][0]['main']['temp'] . '<br>');
	print_r('Hum: '.$api_data['list'][0]['main']['humidity'] . '<br>');*/
	//echo "Hello World, I'm a great Dashboard Widget";
}
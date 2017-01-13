<?php
/*
Plugin Name: Dashboard Weather
Plugin URI:  https://suhrer.consulting/sowhat
Description: Shows the weather on the admin dashboard
Version:     0.0.1
Author:      Stefan Suhrer
Author URI:  https://suhrer.consulting/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: dashboardweather
Domain Path: /languages
*/

add_action('wp_dashboard_setup', 'my_weather_plugin_welcome_panel');

function my_weather_plugin_welcome_panel() {
	wp_add_dashboard_widget(
                 'example_dashboard_widget',         // Widget slug.
                 'Greatest Weather Widget',         // Title.
                 'example_dashboard_widget_function' // Display function.
        );
}
function example_dashboard_widget_function() {
	$api_request    = 'http://api.openweathermap.org/data/2.5/forecast?id=2766824&APPID=28640bf35c3bdf57a733929a65e24149&units=metric ';
	$api_response = wp_remote_get($api_request);
	$api_data = json_decode(wp_remote_retrieve_body($api_response), true);
	print_r($api_data['city']['name'] . '<br>');
	print_r('<hr>');
	foreach($api_data['list'] as $forecast){
		if(substr($forecast['dt_txt'], 11, 2)=='09'){
			print_r('Time: '.$forecast['dt_txt'] . '<br>');
			print_r('Temp: '.$forecast['main']['temp'] . '°C<br>');
			print_r('Hum: '.$forecast['main']['humidity'] . '%<br>');
			print_r('<hr>');
		}
	}
	
	//print_r('Temp: '.$api_data['list'][0]['main']['temp'] . '<br>');
	//print_r('Hum: '.$api_data['list'][0]['main']['humidity'] . '<br>');
	//echo "Hello World, I'm a great Dashboard Widget";
}
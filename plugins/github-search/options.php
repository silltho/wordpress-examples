<?php 
add_action('admin_menu', 'github_plugin_create_menu');

function github_plugin_create_menu() {

	//create new top-level menu
	add_menu_page('Github Plugin Settings', 'Github Settings', 'administrator', __FILE__, 'github_plugin_settings_page' , plugins_url('/images/icon.png', __FILE__) );

	//call register settings function
	add_action( 'admin_init', 'register_github_plugin_settings' );
}


function register_github_plugin_settings() {
	add_option("github_username", "", "", "yes");
	//register our settings
	register_setting( 'github-plugin-settings-group', 'github_username' );
	//register_setting( 'my-cool-plugin-settings-group', 'some_other_option' );
	//register_setting( 'my-cool-plugin-settings-group', 'option_etc' );
}

?><?php
function github_plugin_settings_page() {
?>
  <h2>My custom plugin</h2>
   Options relating to the Custom Plugin.

    <form method="post" action="options.php"> 
        <?php settings_fields('github-plugin-settings-group'); ?>
        <?php do_settings_sections('github-plugin-settings-group'); ?>
		<input type="text" name="github_username" value="<?php echo get_option('github_username'); ?>"/><br>
        <?php submit_button(); ?>
    </form>

<?php
}?>
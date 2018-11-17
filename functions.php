<?php
/*
Plugin Name: Display User ID
Plugin URI: https://github.com/nwcybersolutions/DUID
Description: Displays User ID on the Users Page
Author: Northwest Cyber Solutions
Author URI: https://nwcybersolutions.com
Version: 1.0.0
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: Display User ID
Domain Path: /languages
*/
add_filter('manage_users_columns', 'nwcs_add_user_id_column');
function nwcs_add_user_id_column($columns) {
    $columns['user_id'] = 'User ID';
    return $columns;
}
 
add_action('manage_users_custom_column',  'nwcs_show_user_id_column_content', 10, 3);
function nwcs_show_user_id_column_content($value, $column_name, $user_id) {
    $user = get_userdata( $user_id );
	if ( 'user_id' == $column_name )
		return $user_id;
    return $value;
}

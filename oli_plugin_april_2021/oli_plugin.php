<?php

/*
Plugin Name: Button UP!
Plugin URI: https://www.olione.be/plugin
Description: Add a button up to your website. This plugin is a personnal project to learn how works plugin in wordpress. My first plugin WP. Last update: 14-O4/21.
Author: OliOne
Version: 1.0.2
Author URI: https://www.olione.be
*/

require_once plugin_dir_path(__FILE__) . 'action/oli_plugin_functions.php';
require_once plugin_dir_path(__FILE__) . 'admin/oli_plugin_pannel.php';

add_filter( 'plugin_action_links_'.plugin_basename( __FILE__ ), 'oli_settings_action_links', 10, 2 );
function oli_settings_action_links( $links, $file ) { 
    array_unshift( $links, '<a href="' . admin_url( 'admin.php?page=oli_plugin_pannel' ) . '">' . __( 'Customize it!' ) . '</a>' );
    return $links;
}

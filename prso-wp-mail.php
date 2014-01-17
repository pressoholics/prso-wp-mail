<?php
/*
 * Plugin Name: SMTP Wordpres Mailer
 * Plugin URI: 
 * Description: Allows Wordpress mail to be sent via an SMTP account.
 * Author: Benjamin Moody
 * Version: 1.0
 * Author URI: http://www.benjaminmoody.com
 * License: GPL2+
 * Text Domain: prso_wp_mail-plugin
 * Domain Path: /languages/
 */

//Define plugin constants
define( 'PRSOWPMAIL__MINIMUM_WP_VERSION', '3.0' );
define( 'PRSOWPMAIL__VERSION', '1.0' );
define( 'PRSOWPMAIL__DOMAIN', 'prso_wp_mail-plugin' );

//Plugin admin options will be available in global var with this name, also is database slug for options
define( 'PRSOWPMAIL__OPTIONS_NAME', 'prso_wp_mail_options' );

define( 'PRSOWPMAIL__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'PRSOWPMAIL__PLUGIN_URL', plugin_dir_url( __FILE__ ) );

//Include plugin classes
require_once( PRSOWPMAIL__PLUGIN_DIR . 'class.prso-wp-mail.php'               );

//Set Activation/Deactivation hooks
register_activation_hook( __FILE__, array( 'PrsoWpMail', 'plugin_activation' ) );
register_deactivation_hook( __FILE__, array( 'PrsoWpMail', 'plugin_deactivation' ) );

//Set plugin config
$config_options = array();

//Instatiate plugin class and pass config options array
new PrsoWpMail( $config_options );
<?php
/*
Plugin Name: WPMU SendGrid Mailer
Plugin URI: https://github.com/MCV-Theme/wpmu-sendgrid-mailer
Description: Email delivery simplified for WordPress Multisite. Requires PHP 5.3.
Version: 1.0.0
Author: Jason Jersey
Author URI: https://twitter.com/degersey
License: GNU General Public License v2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
GitHub Plugin URI: https://github.com/MCV-Theme/wpmu-sendgrid-mailer
GitHub Branch: master
*/


/* Based on the official SendGrid WordPress plugin version 1.4.3 
 * via http://wordpress.org/plugins/sendgrid-email-delivery-simplified/
 *
 */

$plugin = plugin_basename( __FILE__ );

if ( version_compare( phpversion(), '5.3.0', '<' ) ) {
  add_action( 'admin_notices', 'php_version_error' );
  
   /**
    * Display the notice if PHP version is lower than plugin need
    *
    */
    function php_version_error() {
        echo '<div class="error"><p>'.__('WPMU SendGrid Mailer: Plugin requires PHP >= 5.3.0.') . '</p></div>';
    }//end: php_version_error
    
} else {

  require_once plugin_dir_path( __FILE__ ) . '/lib/class-sendgrid-tools.php';
  require_once plugin_dir_path( __FILE__ ) . '/lib/overwrite-sendgrid-methods.php';
  
}//end: if version_compare
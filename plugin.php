<?php
/**
 * Plugin Name: Hide quick share
 * Plugin URI: https://github.com/infinitail/YOURLS_hide-quick-share
 * Description: Hide SNS quick share links from admin page
 * Version: 0.1
 * Author: Infinitail
 * Author URI: https://github.com/infinitail
 */

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

// Add style
yourls_add_action( 'shareboxes_before' , function(){
    echo '<style>#sharebox { display:none; }</style>';
} );

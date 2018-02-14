<?php
/** 
* Plugin Name: Custom Script to Toggle Elements
* Description: Custom Scripts created by Adnan Usman.
* Author: Adnan Usman
* Author URI: https://github.com/adnanusman/
* Plugin URI: https://github.com/adnanusman/custom-button-toggle-plugin
* GitHub Plugin URI: https://github.com/adnanusman/custom-button-toggle-plugin
* Version: 1.0.1
*/

function btoggle_enqueue_script() {
    wp_enqueue_script( 'btoggle', plugin_dir_url( __FILE__ ) . 'js/custom.js', array(), '1.0.1', true );
}
add_action('wp_enqueue_scripts', 'btoggle_enqueue_script');



?>


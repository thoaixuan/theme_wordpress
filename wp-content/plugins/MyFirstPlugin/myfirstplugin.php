<?php
/**
 * Plugin Name: My First Plugin Demo
 * Plugin URI: https://codethue.online
 * Description: Đây là plugin đầu tiên mà tôi viết dành riêng cho WordPress, chỉ để học tập.
 * Version: 1.0 
 * Author: ThoaiXuan
 * Author URI: https://codethue.online 
 * License: GPLv2 or later
 */
?>
<?php
if(!class_exists('HelloWorld')) {
    class HelloWorld {
            function __construct() {
                    if(!function_exists('add_shortcode')) {
                            return;
                    }
                    add_shortcode( 'hello' , array(&$this, 'hello_func') );
            }

            function hello_func($atts = array(), $content = null) {
                    extract(shortcode_atts(array('name' => 'bạn'), $atts));
                    return '<div><p>Xin chào '.$name.'!!!</p></div>';
            }
    }
}
function mfpd_load() {
    global $mfpd;
    $mfpd = new HelloWorld();
}
add_action( 'plugins_loaded', 'mfpd_load' );
?>
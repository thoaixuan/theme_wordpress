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

// add javascript, lib , stylesheet
function enqueue_scripts_and_styles()
{
        wp_register_style( 'hocwp-style', get_template_directory_uri() . '/lib/foundation.css', 'all' );
        wp_enqueue_style( 'hocwp-style' );
        wp_register_script('my-plugin-script', plugins_url( '/js/script.js', __FILE__ ));
        wp_enqueue_script( 'my-plugin-script' );
 //wp_enqueue_script co san trong wordpress, wp_register_script  dang ky moi
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_and_styles' );

// ham tao trang cho plugin
function mfpd_settings_page() {
        ?>
        <div class="wrap">
        <h2>Tạo trang cài đặt cho plugin</h2>
        <?php if( isset($_GET['settings-updated']) ) { ?>
            <div id="message" class="updated">
                <p><strong><?php _e('Settings saved.') ?></strong></p>
            </div>
        <?php } ?>
        
        <form method="post" action="options.php">
            <?php settings_fields( 'mfpd-settings-group' ); ?>
            <table class="form-table">
                <tr valign="top">
                <th scope="row">Tùy chọn cài đặt</th>
                <td><input type="text" name="mfpd_option_name" value="<?php echo get_option('mfpd_option_name'); ?>" /></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
        
        </div>
        <?php } ?>
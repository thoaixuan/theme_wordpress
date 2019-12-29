<?php
function register_mysettings() {
    register_setting( 'mfpd-settings-group', 'mfpd_option_name' );
}

function mfpd_create_menu() {
    add_menu_page('Cài đặt', 'MFPD Settings', 'administrator', __FILE__, 'mfpd_settings_page',plugins_url('/images/setup.png', __FILE__), 1);
    add_action( 'admin_init', 'register_mysettings' );
}
add_action('admin_menu', 'mfpd_create_menu'); 

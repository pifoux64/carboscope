<?php 
/*
*Plugin Name: iChart
* Plugin URI: https://wordpress.org/plugins/iChart
* Description: iChart is a super powerful tool for adding beautiful graphs and charts to your website easily.
* Version: 1.2.0
* Author: QuantumCloud
* Author URI: https://www.quantumcloud.com/
* Requires at least: 3.0
* Tested up to: 4.8.3
* Domain Path: /lang/
* License: GPL2
*/

 defined('ABSPATH') or die("No direct script access!");
 
 //Custom Constants
define('qcld_ichart_url1', plugin_dir_url(__FILE__));
define('qcld_ichart_img_url1', qcld_ichart_url1 . "/assets/images");
define('qcld_ichart_asset_url1', qcld_ichart_url1 . "/assets");
define('qcld_ichart_dir1', dirname(__FILE__));
require('qcld_ichart_shortcode.php');


function qciChart_load_all_scripts(){
	wp_enqueue_script( 'jquery', 'jquery');
    wp_enqueue_script( 'ichart-chart-js', qcld_ichart_asset_url1 . '/js/chart.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'qciChart_load_all_scripts');

/*
function qcld_iChart_options_panels() {
	
	add_menu_page( 'iChart More', 'iChart More', 'manage_options', 'more', 'qcpromo_iChart_add_promo_page_callaback', plugins_url( 'assets/img/ichart.png', __FILE__ ) );
}
add_action('admin_menu','qcld_iChart_options_panels');
*/


function iChart_admin_style_script(){

	wp_enqueue_style( 'qcld-chart-field-css', qcld_ichart_asset_url1 . '/css/chart-field.css' );
	wp_enqueue_style( 'wp-color-picker' ); 
	wp_enqueue_script( 'qcld-custom-script-handle', qcld_ichart_asset_url1 . '/js/custom-color_picker.js', array( 'wp-color-picker' ), false, true );
	wp_enqueue_script( 'qcld-custom-script-iChart', qcld_ichart_asset_url1 . '/js/chart-field.js', array( 'jquery' ), false, true );

}
add_action( 'admin_enqueue_scripts', 'iChart_admin_style_script' );

/* Add Slider Shortcode Button on Post Visual Editor */
function qcichart_tinymce_button_function() {
	add_filter ("mce_external_plugins", "qcichart_sld_btn_js");
	add_filter ("mce_buttons", "qcichart_sld_btn");
}

function qcichart_sld_btn_js($plugin_array) {
	
	$plugin_array['qcld_short_btn_chart'] = plugins_url('assets/js/qcld-tinymce-iChart.js', __FILE__);
	return $plugin_array;
}

function qcichart_sld_btn($buttons) {
	array_push ($buttons, 'qcld_short_btn_chart');
	return $buttons;
}

add_action ('init', 'qcichart_tinymce_button_function'); 
?>
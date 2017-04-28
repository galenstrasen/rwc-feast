<?php
/**
 * @package Custom_Page_Templates_Setup
 *
 * Plugin Name: Custom Page Templates Setup
 * Plugin URI: http://spencerbrown.website/custom-page-templates-setup-plugin
 * Description: Easily add custom page templates without having to use ftp or keep track of changing themes.
 * Author: Spencer Brown
 * Version: 1.1
 * Author URI: http://spencerbrown.website
 * Donate URI: https://www.coinbase.com/mrbrownbear
 * License: GPLv3
 * Last Change: 2016-05-19
 */

define( 'CPT_UPLOAD_SUBDIR', '/custom-page-templates');

require_once plugin_dir_path( __FILE__ ) . 'cpt_functions.php';
require_once plugin_dir_path( __FILE__ ) . 'cpt_page_templater.php';
require_once plugin_dir_path( __FILE__ ) . 'cpt_options.php';

?>

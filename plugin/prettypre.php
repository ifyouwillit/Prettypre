<?php
/**
 * Plugin Name: Prettypre
 * Plugin URI: http://prettypre.com
 * Description: Plugin to customize the diplay of the <pre> tag in WordPress
 * Version: 1.0
 * Author: Mendel Kurland
 * Author URI: http://mendel.me/about
 * License: GPL2
 *
 *  Copyright YEAR  Mendel Kurland  (email : git@mendel.me)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

require_once( plugin_dir_path( __FILE__ ) . '/options.php' );

function change_to_pretty_pre() {

	wp_enqueue_style( "prettypre", "/wp-content/plugins/prettypre/prettyprecss.php?style=".get_option('selectstyle')); 
}

add_action ( 'wp_enqueue_scripts', 'change_to_pretty_pre' );
?>


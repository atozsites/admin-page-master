<?php
/**
 * Plugin Name:       Wordpress Admin Page
 * Version:           1.0.0
 * Author:            AtozSites
 * Author URI:        http://atozsites.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wordpress-admin-page
 * Domain Path:       /languages
 */

// Include Composer autoloader
require __DIR__ . '/vendor/autoload.php';

// Load Main Admin Page
$pluginAdmin = new AtozWordpressAdminPage\MainAdminPage('1.0.0', 'AtozWordpress-admin-page');
$pluginAdmin->runMenuHook();

// Add a sub menu page to Main Admin Page
$pluginSubPage = new AtozWordpressAdminPage\SubAdminPage( '1.0.0', 'AtozWordpress-admin-page');
$pluginSubPage->runSubMenuHook( $pluginAdmin->getSlug() );
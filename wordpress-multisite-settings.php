<?php
/**
 * WordPress Multisite Settings
 *
 * Add here your plugin description, and change all the fields.
 *
 * @link              https://marioyepes.com
 * @since             1.0.0
 * @package           Wordpress_Multisite_Settings
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress Multisite Settings
 * Plugin URI:        https://marioyepes.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Mario Yepes
 * Author URI:        https://marioyepes.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       multisite-settings
 * Domain Path:       /languages
 * Network:           true
 */

namespace Multisite_Settings;

// Lets use composers autoload to load classes from the includes/ dir.
require_once __DIR__ . '/vendor/autoload.php';

// This class is creates and saves multisite options.
Settings_Page::get_instance()->add_hooks();

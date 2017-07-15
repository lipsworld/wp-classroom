<?php

/**
 * Fired during plugin activation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    WP_Classroom
 * @subpackage WP_Classroom/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    WP_Classroom
 * @subpackage WP_Classroom/includes
 * @author     Your Name <email@example.com>
 */
class WP_Classroom_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		$admin = new WP_Classroom_Admin( 'wp-classroom', '1.0.0' );
		$admin->wp_classroom_post_type();
		$admin->wp_classroom_taxonomy();
		flush_rewrite_rules();
	}

}

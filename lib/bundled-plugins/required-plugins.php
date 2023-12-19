<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for child theme Requriedplugins
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 *
 * Depending on your implementation, you may want to change the include call:
 *
 * Parent Theme:
 * require_once get_template_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Child Theme:
 * require_once get_stylesheet_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Plugin:
 * require_once dirname( __FILE__ ) . '/path/to/class-tgm-plugin-activation.php';
 */
require_once get_stylesheet_directory() . '/lib/bundled-plugins/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'requriedplugins_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function requriedplugins_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		
		array(
			'name'               => 'Acclectic Media Organizer', // The plugin name.
			'slug'               => 'media-organizer-main', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/lib/bundled-plugins/plugins/media-organizer-main.zip', // The plugin source.
			'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		),
		
		array(
			'name'               => 'All-in-One WP Migration', // The plugin name.
			'slug'               => 'all-in-one-wp-migration', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/lib/bundled-plugins/plugins/all-in-one-wp-migration.zip', // The plugin source.
		),
		
		array(
			'name'               => 'All-in-One WP Migration Unlimited Extension', // The plugin name.
			'slug'               => 'all-in-one-wp-migration-unlimited-extension', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/lib/bundled-plugins/plugins/all-in-one-wp-migration-unlimited-extension.zip', // The plugin source.
		),
		
		array(
			'name'      => 'Broken Link Checker',
			'slug'      => 'broken-link-checker',
		),

		array(
			'name'      => 'Classic Editor',
			'slug'      => 'classic-editor',
			'required'  => true,
			'force_activation'   => true,
		),

		array(
			'name'      => 'Code Snippets',
			'slug'      => 'code-snippets',
		),

		array(
			'name'      => 'Dashboard Welcome for Elementor',
			'slug'      => 'dashboard-welcome-for-elementor',
			'required'  => true,
		),

		array(
			'name'      => 'iThemes Security',
			'slug'      => 'better-wp-security',
			'required'  => true,
		),

		array(
			'name'               => 'Ocean Pro Demos', // The plugin name.
			'slug'               => 'ocean-pro-demos', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/lib/bundled-plugins/plugins/ocean-pro-demos.1.4.2.zip', // The plugin source.
		),

		array(
			'name'               => 'Ocean White Label', // The plugin name.
			'slug'               => 'ocean-white-label', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/lib/bundled-plugins/plugins/ocean-white-label.2.0.1.zip', // The plugin source.
		),

		array(
			'name'      => 'Really Simple SSL',
			'slug'      => 'really-simple-ssl',
		),

		array(
			'name'      => 'Simple Page Ordering',
			'slug'      => 'simple-page-ordering',
			'force_activation'   => true,
		),

		array(
			'name'      => 'Temporary Login Without Password',
			'slug'      => 'temporary-login-without-password',
		),

		array(
			'name'      => 'User Role Editor',
			'slug'      => 'user-role-editor',
			'source'             => get_stylesheet_directory() . '/lib/bundled-plugins/plugins/user-role-editor.4.64.1.zip', // The plugin source.
			'required'  => true,
			'force_activation'   => true,
		),

		array(
			'name'      => 'User Switching',
			'slug'      => 'user-switching',
			'source'             => get_stylesheet_directory() . '/lib/bundled-plugins/plugins/user-switching.1.7.0.zip', // The plugin source.
		),

		array(
			'name'      => 'Username Changer',
			'slug'      => 'username-changer',
			'source'             => get_stylesheet_directory() . '/lib/bundled-plugins/plugins/username-changer.3.2.2.zip', // The plugin source.
		),

		array(
			'name'      => 'Ocean Extra',
			'slug'      => 'ocean-extra',
			'source'             => get_stylesheet_directory() . '/lib/bundled-plugins/plugins/ocean-extra.2.2.1.zip', // The plugin source.
			'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'required'  => true,
		),
		
		array(
			'name'      => 'Welcome Email Editor',
			'slug'      => 'welcome-email-editor',
		),

		array(
			'name'      => 'WooCommerce Square',
			'slug'      => 'woocommerce-square',
		),

		array(
			'name'      => 'WP Reset – Most Advanced WordPress Reset Tool',
			'slug'      => 'wp-reset',
		),

		array(
			'name'      => 'Yoast Duplicate Post',
			'slug'      => 'duplicate-post',
		),
		
		array(
			'name'      => 'Bulk Media Register',
			'slug'      => 'bulk-media-register',
		),
				
		array(
			'name'      => 'Elementor Website Builder – More than Just a Page Builder',
			'slug'      => 'elementor',
		),
		
		array(
			'name'      => 'File Manager',
			'slug'      => 'wp-file-manager',
		),
		
		array(
			'name'      => 'Flexible Elementor Panel',
			'slug'      => 'flexible-elementor-panel',
		),
						
		array(
			'name'      => 'MainWP Child',
			'slug'      => 'mainwp-child',
		),
			
		array(
			'name'      => 'MainWP Child Reports',
			'slug'      => 'mainwp-child-reports',
		),
/*

		// This is an example of how to include a plugin bundled with a theme.
		array(
			'name'               => 'TGM Example Plugin', // The plugin name.
			'slug'               => 'tgm-example-plugin', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . '/lib/plugins/tgm-example-plugin.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),

		// This is an example of how to include a plugin from an arbitrary external source in your theme.
		array(
			'name'         => 'TGM New Media Plugin', // The plugin name.
			'slug'         => 'tgm-new-media-plugin', // The plugin slug (typically the folder name).
			'source'       => 'https://s3.amazonaws.com/tgm/tgm-new-media-plugin.zip', // The plugin source.
			'required'     => true, // If false, the plugin is only 'recommended' instead of required.
			'external_url' => 'https://github.com/thomasgriffin/New-Media-Image-Uploader', // If set, overrides default API URL and points to an external URL.
		),

		// This is an example of how to include a plugin from a GitHub repository in your theme.
		// This presumes that the plugin code is based in the root of the GitHub repository
		// and not in a subdirectory ('/src') of the repository.
		array(
			'name'      => 'Adminbar Link Comments to Pending',
			'slug'      => 'adminbar-link-comments-to-pending',
			'source'    => 'https://github.com/jrfnl/WP-adminbar-comments-to-pending/archive/master.zip',
		),

		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'BuddyPress',
			'slug'      => 'buddypress',
			'required'  => false,
		),

		// This is an example of the use of 'is_callable' functionality. A user could - for instance -
		// have WPSEO installed *or* WPSEO Premium. The slug would in that last case be different, i.e.
		// 'wordpress-seo-premium'.
		// By setting 'is_callable' to either a function from that plugin or a class method
		// `array( 'class', 'method' )` similar to how you hook in to actions and filters, TGMPA can still
		// recognize the plugin as being installed.
		array(
			'name'        => 'WordPress SEO by Yoast',
			'slug'        => 'wordpress-seo',
			'is_callable' => 'wpseo_init',
		),

*/


	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'requriedplugins',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => false,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		/*
		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'requriedplugins' ),
			'menu_title'                      => __( 'Install Plugins', 'requriedplugins' ),
			/* translators: %s: plugin name. * /
			'installing'                      => __( 'Installing Plugin: %s', 'requriedplugins' ),
			/* translators: %s: plugin name. * /
			'updating'                        => __( 'Updating Plugin: %s', 'requriedplugins' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'requriedplugins' ),
			'notice_can_install_required'     => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'requriedplugins'
			),
			'notice_can_install_recommended'  => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'requriedplugins'
			),
			'notice_ask_to_update'            => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'requriedplugins'
			),
			'notice_ask_to_update_maybe'      => _n_noop(
				/* translators: 1: plugin name(s). * /
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'requriedplugins'
			),
			'notice_can_activate_required'    => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'requriedplugins'
			),
			'notice_can_activate_recommended' => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'requriedplugins'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'requriedplugins'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'requriedplugins'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'requriedplugins'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'requriedplugins' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'requriedplugins' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'requriedplugins' ),
			/* translators: 1: plugin name. * /
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'requriedplugins' ),
			/* translators: 1: plugin name. * /
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'requriedplugins' ),
			/* translators: 1: dashboard link. * /
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'requriedplugins' ),
			'dismiss'                         => __( 'Dismiss this notice', 'requriedplugins' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'requriedplugins' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'requriedplugins' ),

			'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
		),
		*/
	);

	tgmpa( $plugins, $config );
}

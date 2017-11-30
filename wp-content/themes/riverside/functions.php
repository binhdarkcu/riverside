<?php
define('TEMPLATE_PATH',get_bloginfo('template_url'));
define('HOME_URL',get_home_url());
define('BlOG_NAME',get_bloginfo('blog_name'));
define('SLOGAN', get_bloginfo('description'));
//add_image_size( 'thumb-service',225,230,true);
//include 'inc/google_functions.php';

add_theme_support('post-thumbnails',array('post','page', 'banner_slider', 'expertise', 'our_team', 'testimonial'));


//register menu
function register_menu() {
    register_nav_menus( array(
    	'primary_menus' => 'Primary menus'
    ) );
    register_nav_menu('primary_menus',__( 'primary_menus' ));
}
add_action( 'init', 'register_menu' );

if( function_exists('acf_add_options_page') ) {

   acf_add_options_page(array(
    'page_title'  => 'Theme Options',
    'menu_title' => 'Theme Options',
    'menu_slug'  => 'theme-general-settings'
   ));

     acf_add_options_sub_page(array(
      'page_title'  => 'Header',
      'menu_title' => 'Header',
      'parent_slug' => 'theme-general-settings',
     ));
   acf_add_options_sub_page(array(
    'page_title'  => 'Footer',
    'menu_title' => 'Footer',
    'parent_slug' => 'theme-general-settings',
     ));
     acf_add_options_sub_page(array(
      'page_title'  => 'Form Đăng ký',
      'menu_title' => 'Form Đăng ký',
      'parent_slug' => 'theme-general-settings',
       ));
}
function get_id_by_slug($page_slug, $slug_page_type = 'page') {

  $find_page = get_page_by_path($page_slug, OBJECT, $slug_page_type);
  if ($find_page) {
    return $find_page->ID;
  } else {
    return null;
  }
}

/**
 * enqueue scripts and styles
 *
 */
function my_acf_google_map_api( $api ){

  $api['key'] = 'AIzaSyBK1kevmPKYUm0SuOm2zOzqU0NFIfeBzFw';

  return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


function sendContactFormToSiteAdmin () {
  try {
    if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['website']) || empty($_POST['email']) || empty($_POST['message'])) {
      throw new Exception('Bad form parameters. Check the markup to make sure you are naming the inputs correctly.');
    }
    if (!is_email($_POST['email'])) {
      throw new Exception('Email address not formatted correctly.');
    }

    $subject = 'Contact Form: '.$_POST['name'];
    $headers = 'From: My Blog Contact Form <contact@myblog.com>';
    $send_to = "my@contactemail.com";
    $subject = "Contact Form ".$_POST['name'];
    $message = "Message from ".$_POST['name'].": \n\n ". $_POST['message'] . " \n\n Reply to: " . $_POST['email'];

    if (wp_mail($send_to, $subject, $message, $headers)) {
      echo json_encode(array('status' => 'success', 'message' => 'Contact message sent.'));
      exit;
    } else {
      throw new Exception('Failed to send email. Check AJAX handler.');
    }
  } catch (Exception $e) {
    echo json_encode(array('status' => 'error', 'message' => $e->getMessage()));
    exit;
  }
}
add_action("wp_ajax_contact_send", "sendContactFormToSiteAdmin");
add_action("wp_ajax_nopriv_contact_send", "sendContactFormToSiteAdmin");

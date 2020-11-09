<?php
/**
 * Plugin Name: Crewkerne Garage Custom Fields
 * Description: Create admin input for custom fields
 * Version: 1.3
 * Author: Bethany Fowler
 * Author URI: http://bethanyfowler.me/
 */

 // Custom settings
function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

 function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields( 'section' );
           do_settings_sections( 'theme-options' );
           submit_button();
       ?>
    </form>
  </div>
<?php }

// Website introduction
function banner_text() { ?>
  <textarea name="banner" id="banner" style="width: 50%;" cols="2"><?php echo get_option('banner'); ?></textarea>
<?php }
function intro() { ?>
  <textarea name="intro" id="intro" style="width: 50%;" cols="10"><?php echo get_option('intro'); ?></textarea>
<?php }
function services() { ?>
  <textarea name="services" id="services" style="width: 50%;" cols="10"><?php echo get_option('services'); ?></textarea>
<?php }

// Telephone
function setting_phone() { ?>
  <input type="text" name="phone_number" id="phone_number" style="width: 50%;" value="<?php echo get_option( 'phone_number' ); ?>" />
<?php }

// Address
function setting_address_line1() { ?>
  <input type="text" name="address_line1" id="address_line1" style="width: 50%;" value="<?php echo get_option( 'address_line1' ); ?>" />
<?php }
function setting_address_line2() { ?>
  <input type="text" name="address_line2" id="address_line2" style="width: 50%;" value="<?php echo get_option( 'address_line2' ); ?>" />
<?php }
function setting_address_line3() { ?>
  <input type="text" name="address_line3" id="address_line3" style="width: 50%;" value="<?php echo get_option( 'address_line3' ); ?>" />
<?php }

// Email
function setting_email() { ?>
  <input type="text" name="email" id="email" style="width: 50%;" value="<?php echo get_option( 'email' ); ?>" />
<?php }

// Facebook
function setting_facebook() { ?>
  <input type="text" name="facebook" id="facebook" style="width: 50%;" value="<?php echo get_option( 'facebook' ); ?>" />
<?php }

// Opening Hours
function opening_hours() { ?>
  <input type="text" name="hours" id="hours" style="width: 50%;" value="<?php echo get_option( 'hours' ); ?>" />
<?php }


// Web Author
function setting_webauthor() { ?>
  <input type="text" name="webauthor" id="webauthor" style="width: 50%;" value="<?php echo get_option( 'webauthor' ); ?>" />
<?php }

// Web Author Address
function setting_webauthor_address() { ?>
  <input type="text" name="webauthor_address" id="webauthor_address" style="width: 50%;" value="<?php echo get_option( 'webauthor_address' ); ?>" />
<?php }

// Google verification
function setting_google_verification_code() { ?>
  <input type="text" name="google_verification" id="google_verification" style="width: 50%;" value="<?php echo get_option( 'google_verification' ); ?>" />
<?php }

// Google verification
function setting_google_analytics_id() { ?>
  <input type="text" name="google_analytics" id="google_analytics" style="width: 50%;" value="<?php echo get_option( 'google_analytics' ); ?>" />
<?php }

function custom_settings_page_setup() {
  add_settings_section( 'section', 'All Settings', null, 'theme-options' );
  add_settings_field( 'banner', 'Banner Info', 'banner_text', 'theme-options', 'section' );
  add_settings_field( 'intro', 'Page Intro', 'intro', 'theme-options', 'section' );
  add_settings_field( 'services', 'Services list', 'services', 'theme-options', 'section' );
  add_settings_field( 'phone_number', 'Phone Number', 'setting_phone', 'theme-options', 'section' );
  add_settings_field( 'address_line1', 'Address Line 1', 'setting_address_line1', 'theme-options', 'section' );
  add_settings_field( 'address_line2', 'Address Line 2', 'setting_address_line2', 'theme-options', 'section' );
  add_settings_field( 'address_line3', 'Address Line 3', 'setting_address_line3', 'theme-options', 'section' );

  add_settings_field( 'email', 'Email', 'setting_email', 'theme-options', 'section' );
  add_settings_field( 'facebook', 'Facebook', 'setting_facebook', 'theme-options', 'section' );

  add_settings_field( 'hours', 'Opening Days', 'opening_hours', 'theme-options', 'section' );

  add_settings_field( 'webauthor', 'Web Author', 'setting_webauthor', 'theme-options', 'section' );
  add_settings_field( 'webauthor_address', 'Web Author Address', 'setting_webauthor_address', 'theme-options', 'section' );

  add_settings_field( 'google_verification', 'Google Site Verification', 'setting_google_verification_code', 'theme-options', 'section' );
  add_settings_field( 'google_analytics', 'Google Analytics ID', 'setting_google_analytics_id', 'theme-options', 'section' );

  register_setting('section', 'banner');
  register_setting('section', 'intro');
  register_setting('section', 'services');
  register_setting('section', 'phone_number');
  register_setting('section', 'address_line1');
  register_setting('section', 'address_line2');
  register_setting('section', 'address_line3');
  register_setting('section', 'email');
  register_setting('section', 'facebook');
  register_setting('section', 'hours');
  register_setting('section', 'webauthor');
  register_setting('section', 'webauthor_address');
  register_setting('section', 'google_verification');
  register_setting('section', 'google_analytics');
}
add_action( 'admin_init', 'custom_settings_page_setup' );

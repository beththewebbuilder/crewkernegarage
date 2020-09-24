<?php
/**
 * Plugin Name: Crewkerne Garage Contact Form
 * Description: Crewkerne Garage Contact Form
 * Version: 1.0
 * Author: Bethany Fowler
 * Author URI: http://bethanyfowler.me/
 */

function btwb_contact_form() {

if(array_key_exists('contactSubmit', $_POST)) {

  $name = $_POST["firstname"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $message = $_POST["enquiry"];
  $spamfield = $_POST["lastname"];

  if((!empty($name) == 1) && (!empty($email) == 1) && (!empty($phone) == 1) && (!empty($message) == 1) && (empty($spamfield) == 1)){

    global $wpdb;

    $to = get_bloginfo('admin_email');
    $subject = "Crewkerne Garage Enquiry - " . $name;
    $headers = array('Content-Type: text/html; charset=UTF-8', 'From: ' . $name .' '.'<' . $email .'>' );
    $message = "<p>From: ".$name."</p><p>Email: ".$email."</p><p>Telephone: ".$phone."</p><p>Enquiry: ".$message."</p>";

    wp_mail($to, $subject, $message, $headers);

    ?>
    <div class="contact_form">
      <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> Your message has been sent.
      </div>
    </div>
    <?

  }
  else {

    $error_name = $_POST["firstname"];
    $error_email = $_POST["email"];
    $error_phone = $_POST["phone"];
    $error_message = $_POST["enquiry"];

    ?>
    <div class="contact_form">
      <div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error!</strong> There was an problem submitting your message.
      </div>
    </div>
    <?
  }
}

  ?>

  <div class="contact_form">
    <form id="bt_contact_form" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php') ?>">

      <div class="form-group">
        <label>Name*</label>
        <input class="form-control" name="firstname" id="firstname" type="text" required="required" data-error="Please enter your name" value="<?php echo $error_name; ?>"/>
        <small class="text-danger form-control-msg">Your name is required</small>
      </div>

      <div class="form-group contact-spm-field">
        <label>Last Name*</label>
        <input class="form-control" name="lastname" id="lastname" type="text" data-error="Please enter your name"/>
      </div>

      <div class="form-group">
        <label>Email*</label>
        <input class="form-control" name="email" id="email" type="email" required="required" data-error="Please enter your email address" value="<?php echo $error_email; ?>" />
        <small class="text-danger form-control-msg">Your email is required</small>
      </div>

      <div class="form-group">
        <label>Phone*</label>
        <input class="form-control" name="phone" id="phone" type="text" required="required" data-error="Please enter a contact number" value="<?php echo $error_phone; ?>"/>
        <small class="text-danger form-control-msg">Your contact number is required</small>
      </div>

      <div class="form-group">
        <label>Enquiry*</label>
        <textarea class="form-control" name="enquiry" id="enquiry" type="text" required="required" data-error="Please enter your enquiry"><?php echo $error_message; ?></textarea>
        <small class="text-danger form-control-msg">Your enquiry is required</small>
      </div>

      <div class="form-group">
        <button type="submit" name="contactSubmit" class="btn btn-primary">Send</button>
      </div>
      <small class="text-info form-control-msg js-form-submission">Submission in progress, please wait...</small>
      <small class="text-success form-control-msg js-form-success">Message Sent!</small>
      <small class="text-danger form-control-msg js-form-error">There was a problem with the contact form, please try again.</small>

    </form>
  </div>

<?php

}

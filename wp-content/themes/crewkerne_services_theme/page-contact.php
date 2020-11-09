<?php get_header(); ?>

<h1 class="text-center">Contact Us</h1>

<div class="row">
  <div class="col-md-6">
    <div class="contact_details">

      <div class="row">

        <div class="col-3">
          <div class="contact_icon">
            <i class="far fa-clock"></i>
          </div>
        </div>

        <div class="col-9">
          <div class="contact-content">
          <?php echo get_option('hours'); ?>
        </div>
        </div>

      </div>

      <div class="row">

        <div class="col-3">
          <div class="contact_icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
        </div>

        <div class="col-9">
          <div class="contact-content">
          <?php echo get_option('address_line1') ?>
          <br/>
          <?php echo get_option('address_line2') ?>
          <br/>
          <?php echo get_option('address_line3') ?>
        </div>
        </div>

      </div>

      <div class="row">

        <div class="col-3">
          <div class="contact_icon">
            <i class="fas fa-envelope"></i>
          </div>
        </div>

        <div class="col-9">
          <div class="contact-content break-anywhere">
          <a href="mailto:<?php echo get_option('email') ?>">
            <?php echo get_option('email') ?>
          </a>
        </div>
        </div>

      </div>

      <div class="row">

        <div class="col-3">
          <div class="contact_icon">
            <i class="fas fa-phone"></i>
          </div>
        </div>

        <div class="col-9">
          <div class="contact-content">
          <a href="tel:<?php echo get_option('phone_number') ?>">
            <?php echo get_option('phone_number') ?>
          </a>
        </div>
        </div>

      </div>

      <div class="row">

        <div class="col-3">
          <div class="contact_icon">
            <i class="fab fa-facebook-f"></i>
          </div>
        </div>

        <div class="col-9">
          <div class="contact-content">
          <a href="<?php echo get_option('facebook') ?>">
            Find us on Facebook
          </a>
        </div>
        </div>

      </div>

    </div>
  </div>

  <div class="col-md-6">
    <?php btwb_contact_form(); ?>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="map-container">
      <h4 class="text-center">Find Us Here</h4>
      <div id="mapid" style="height: 300px;"></div>
    </div>
  </div>
</div>

<?php get_footer(); ?>

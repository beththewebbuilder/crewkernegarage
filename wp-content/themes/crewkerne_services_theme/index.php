<?php get_header(); ?>

<div class="info-banner">
  <?php echo get_option('banner');?>

</div>
</div>
<div class="homepage-content">
  <div class="container">
    <div class="overlay-text">
      <?php echo get_option('intro');?>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="content-border">
        <h4>Services</h4>
        <ul>
          <?php echo get_option('services');?>
        </ul>
      </div>
    </div>
    <div class="col-md-4">
      <div class="content-border">
        <h4>Bosch Service Centre</h4>
        <div class="bosch-logo">
          <img src="<?php echo get_bloginfo('template_directory'); ?>/images/bcs_logo.png"/>
        </div>
        <p>Whether you are looking for advice, repair or service work we can offer the full package.</p>
        <p>We are fully equipped to deal with the latest automotive technology in vehicles of all makes and keep them in perfect working order.</p>
      </div>
    </div>
    <div class="col-md-4">
      <h4>Where to find us</h4>
      <div id="mapid" style="height: 300px;"></div>
    </div>
  </div>

<?php get_footer(); ?>

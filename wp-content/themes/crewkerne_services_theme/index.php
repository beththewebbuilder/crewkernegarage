<?php get_header(); ?>

  <div class="info-banner">
    <?php echo get_option('banner');?>
  </div>

</div>

<?php
  if(!empty(get_option('infobanner'))) {
    ?>
    <div class="customer-info-banner"><?php echo get_option('infobanner'); ?></div>
    <?
  }
?>

<div class="homepage-content">
  <div class="container">
    <div class="overlay-text">
      <?php echo get_option('intro');?>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="content-border">
        <h4>Services</h4>
        <ul>
          <?php echo get_option('services');?>
        </ul>
      </div>
    </div>
    <div class="col-md-6">
      <h4>Where to find us</h4>
      <div id="mapid" style="height: 300px;"></div>
    </div>
  </div>

<?php get_footer(); ?>

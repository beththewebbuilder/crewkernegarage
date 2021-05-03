<?php get_header();
$meta = get_post_meta( $post->ID, 'services', true );
$thisPostID = $post->ID;
?>

    <h1 class="text-center">Looking after your <?php the_title(); ?></h1>

<div class="service-page-content">
  <?php
  echo get_post_field("post_content", $page->ID);
  ?>

  <div class="contact_banner">
    Please feel free to contact us for any advice or a quote on:
    <a class="contact_number_link" href="tel:<?php echo get_option('phone_number');?>"><?php echo get_option('phone_number');?></a>
  </div>
</div>

<?php get_footer(); ?>

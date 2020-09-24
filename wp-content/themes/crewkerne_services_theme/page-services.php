<?php get_header(); ?>

<?php
$parentPost = get_page_by_title( 'Services', '', 'page' );
$services = New WP_Query(array(
  'post_type' => 'page',
  'post_parent' => $parentPost->ID
));
?>

<h1 class="text-center">Our Services</h1>
<p class="text-center">Click on the buttons below to find out more about our services</p>

  <?php
  if($services->have_posts()) :
    while ($services->have_posts()) : $services->the_post();

    ?>
    <div class="service-btn">
    <a class="btn btn-default" href="<?php echo get_permalink($post, false); ?>">
      Looking After Your <?php the_title();?>
    </a>
  </div>

    <?php
    endwhile;
    wp_reset_postdata();
  endif;
  ?>


<?php get_footer(); ?>

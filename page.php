<?php
get_header();
?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
  
    <?= the_content(); ?>
  <?php endwhile; ?>
<?php else : ?>
  <h1>Pas de pages.</h1>
<?php endif; ?>

<?php
get_footer();
?>

<?php get_header(); ?>
<div class="container-post">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="post">
        <?php the_content(); ?>
        <h1 class="h1"><?php the_title(); ?></h1>
        <?php the_date(); ?><?php the_category(); ?>
      </div>
  <?php endwhile;
  endif; ?>
</div>
<?php get_footer(); ?>
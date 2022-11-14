<?php
get_header();
?>

<div class="page">
  <div class="section_articles">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="post">
          <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => '']); ?>
          <div class="post__meta">
            <p class="post_date"><?php the_time(get_option('date_format')); ?></p>
            <p class="post_category"><?php the_category(); ?> </p>
          </div>
          <h5><?php the_title(); ?></h5>
          <p class="excerpt"><?php the_excerpt(); ?></p>
          <p>
            <a href="<?php the_permalink(); ?>" class="post__link">Read More</a>
          </p>
        </article>
    <?php endwhile;
    endif; ?>
  </div>
  
<?php
get_footer();
?>
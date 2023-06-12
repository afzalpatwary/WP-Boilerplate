<?php get_header(); ?>

<div class="PageContent py-5">
  <?php
  /* Start the Loop */
  while (have_posts()):
    the_post();

    get_template_part('template-parts/content', 'page');

    if (comments_open() || get_comments_number()) {
      comments_template();
    }
  endwhile;
  ?>
</div>

<?php get_footer(); ?>
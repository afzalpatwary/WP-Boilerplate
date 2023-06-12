<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage boilerplate
 * @since boilerplate 1.0
 */

?>



<!-- page-content -->
<article class="page-content">
  <div class="container">
    <div class="content-wrapper">
      <?php the_title(); ?>
      <?php the_content(); ?>

      <?php
      wp_link_pages(
        array(
          'before' => '<nav class="page-links" aria-label="' . esc_attr__('Page', 'my-theme') . '">',
          'after' => '</nav>',
          'pagelink' => esc_html__('Page %', 'my-theme'),
        )
      );
      ?>
    </div>
  </div>
</article>
<!--/ page-content -->
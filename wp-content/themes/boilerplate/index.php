<?php get_header(); ?>





<!-- banner -->
<section class="banner bg-info">
    <div class="container">
        <div class="bg-info py-5">
            <h1 class="wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="100ms">
                WP Boilerplate
            </h1>
        </div>
    </div>
</section>
<!--/ banner -->






<!-- blog-area -->
<section class="blog-area py-5">
    <div class="container">
        <div class="row">



            <?php

            if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
                    <div class="col-xl-4">
                        <div class="blog-item">
                            <a href="<?php the_permalink(); ?>" class="blog-img mb-3 d-block">
                                <?php the_post_thumbnail(); ?>
                            </a>
                            <p class="post-meta">
                                <?php echo get_the_date(); ?>
                            </p>
                            <h3>
                                <?php echo the_title(); ?>
                            </h3>
                            <p>
                                <?php echo the_content(); ?>
                            </p>
                        </div>
                    </div>
                <?php endwhile;
            endif;


            ?>

        </div>
    </div>
</section>
<!--/ blog-area -->






<?php get_footer(); ?>
<?php get_header(); ?>

    <div class="row page-container">
        <div class="eight columns">

<!-- Begin Page PHP -->
            <?php if( have_posts() ) {
              while( have_posts() ) {
                the_post();

                if ( has_post_thumbnail() ) { ?>
                    <div class="post-thumbnail">
                      <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php } ?>

                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
            <?php
              }
            } ?>
<!-- End Page PHP -->

        </div>
        <div class="four columns single-sidebar">
            <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>

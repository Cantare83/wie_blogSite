<?php get_header(); ?>

    <section class="row">
        <div class="eight columns">

<!-- Begin Page PHP -->
            <?php if( have_posts() ) {
              while( have_posts() ) {
                the_post(); ?>

                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
            <?php
              }
            } ?>
<!-- End Page PHP -->
        </div>

        <div class="four columns">
          <?php get_sidebar(); ?>
        </div>

    </section>

<?php get_footer(); ?>

<?php get_header(); ?>

<!-- Begin Main Content -->
<div class="container">
    <section class="row">
        <div class="twelve columns">
          <h1>Education & Inspiration</h1>
        </div>
    </section>
    <section class="row">
        <div class="four columns">
            <figure>
              <img src="" alt="Christina Hendricks" />
            </figure>
        </div>
        <div class="eight columns">
            <h3>Get to Know the Author</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <button type="button" name="button">Learn More</button>
        </div>
    </section>
    <section class="row">
          <!-- Begin Loop -->
          <?php
            if ( have_posts() ) {
              while ( have_posts() ) {
                the_post(); ?>
                <div class="twelve columns index-post">
                  <div class="thumbnail">
                    <?php
                      if ( has_post_thumbnail() ) {
                          the_post_thumbnail('thumbnail');
                      } ?>
                  </div>
                  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <span class="date">Fake Date, 2016</span>
                  <?php the_excerpt(); ?>
                  <a href="<?php the_permalink(); ?>">Read More</a>
                </div>
                <?php
              } //end while
            } //end if
          ?>
          <!-- End Loop -->
    </section>
    <section class="row">
        <div class="twelve columns">
            <button type="button" name="button">More Posts</button>
        </div>
    </section>
</div>
<!-- End Main Content -->

<?php get_footer(); ?>

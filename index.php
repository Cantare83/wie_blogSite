<?php get_header(); ?>

<!-- Begin Main Content -->
<div class="container">
    <section class="row">
        <div class="twelve columns my-slider">
            <ul>
                <li id="hpSlide1">
                  <div class="slides-message">
                    <h1>Education & Inspiration</hi>
                  </div>
                </li>
                <li id="hpSlide2">
                  <div class="slides-message">
                    <h1>Education & Inspiration</hi>
                  </div>
                </li>
                <li id="hpSlide3">
                  <div class="slides-message">
                    <h1>Education & Inspiration</hi>
                  </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="row">
        <div class="four columns">

              <img class="about-img" src="<?php echo get_template_directory_uri(); ?>/images/ch-aboutpic.jpg" alt="Christina Hendricks" />

        </div>
        <div class="eight columns">
            <h3>Get to Know the Author</h3>
            <p>
              My name is Christina Hendricks and I am currently learning all I can about web design and front-end development. I am working through the Web Design and Online Communications Masters program at the University of Florida. Go Gators! I will be posting here about things I learn throughout this semester and intend to carry on blogging after the class is over. Visit my About Page to learn more about me. Thanks for visiting!
            </p>
            <a href="http://www.chrisihendricks.net/blog/about/" class="button">Learn More</a>
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
                      <div class="title-container">
                      <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                      <?php echo do_shortcode("[mashshare]"); ?>
                      </div>
                  </div>

                  <span class="date"><?php echo get_the_date(); ?></span>

                  <div class="post-excerpt">
                  <?php the_excerpt(); ?>
                  </div>

                  <a href="<?php the_permalink(); ?>">Read More</a>

                </div>
                <?php
              } //end while
              pagination_wie();
            } //end if
          ?>
    </section>
</div>
<!-- End Main Content -->

<?php get_footer(); ?>

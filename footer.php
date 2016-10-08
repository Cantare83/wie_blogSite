</div> <!-- End Container Div -->

<div class="footer-wrapper">
    <footer class="container">
        <div class="row">
            <div class="five columns">
              <?php
                  wp_nav_menu( array(
                    'sort_column' => 'menu-order',
                    'container_class' => 'blank-menu-header'
                  ));
              ?>
            </div>

            <div class="seven columns">
                <a href="">Twitter</a>
                <a href="">Linkedin</a>
                <a href="">GitHub</a>
                <a href="">Behance</a>
            </div>
        </div>
        <div class="row">
            <div class="five columns">
                <?php dynamic_sidebar('footer-one'); ?>
            </div>

            <div class="seven columns">
                <?php dynamic_sidebar('footer-two'); ?>
            </div>
        </div>
        <div class="row">
            <div class="twelve columns">
              <a href="">copyright</a>
              <a href="">privacy policy</a>
            </div>
        </div>
    </footer>
</div>

      <?php wp_footer(); ?>
    </body>
</html>

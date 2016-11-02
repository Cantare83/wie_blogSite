</div> <!-- End Container Div -->

<div class="footer-wrapper">
    <footer>
        <div class="row footer-nav">
            <div class="five columns">
              <?php
                  wp_nav_menu( array(
                    'sort_column' => 'menu-order',
                    'container_class' => 'blank-menu-header'
                  ));
              ?>
            </div>

            <div class="seven columns">
                <a class="fa fa-twitter" href="https://twitter.com/ChrisiHendricks"></a>
                <a class="fa fa-linkedin" href="https://www.linkedin.com/in/christina-hendricks-26471a7a"></a>
                <a class="fa fa-github" href="https://github.com/Cantare83"></a>
                <a class="fa fa-behance" href="https://www.behance.net/ChrisiHendricks"></a>
            </div>
        </div>
        <div class="row widgets-row">
            <div class="five columns">
                <?php dynamic_sidebar('footer-one'); ?>
            </div>

            <div class="seven columns">
                <?php dynamic_sidebar('footer-two'); ?>
            </div>
        </div>
        <div class="row">
            <div class="twelve columns copyright">
              <p>Designed by Chrisi Hendricks. Copyright &copy; 2016</p>
            </div>
        </div>
    </footer>
</div>

      <?php wp_footer(); ?>

      <script src="https://use.fontawesome.com/f9fd5646bd.js"></script>

<!-- Begin Unslider Initiator -->
      <script>
          $(function() { $('.my-slider').unslider({
              autoplay: true
              });
          });
      </script>
<!-- End Unslider Initiator -->

    </body>
</html>

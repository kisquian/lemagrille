<?php include 'inc/common-head.php' ?>

    <!-- START WP_HEAD -->

    <?php wp_head(); ?>

    <!-- ENDS WP_HEAD -->



  </head>



  <body id="page-top">



    <?php include 'inc/navigation-single.php'; ?>



    <div class="head-post">

      

    </div>



    <section>

      <div class="container">

        <div class="row">

          <div class="col-xs-12 col-md-8">



            <div class="entry">

              <?php

        // Start the loop.

        while ( have_posts() ) : the_post();

 

            /*

             * Include the post format-specific template for the content. If you want to

             * use this in a child theme, then include a file called called content-___.php

             * (where ___ is the post format) and that will be used instead.

             */

            ?>

          <h2><?php the_title(); ?></h2>

          <div class="entry-body"><?php the_content() ?></div>

            <div class="comentarios">
              <h4>COMENTARIOS</h4>
              <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://lemagrille.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
            </div>

 

           <? endwhile; ?>

            </div>







          </div>

          <?php include 'inc/sidebar.php'; ?>

        </div>

      </div>

    </section>





 <?php include 'inc/footer.php'; ?>



    <!-- Bootstrap core JavaScript -->

    <script src="<?php bloginfo('template_directory') ?>/vendor/jquery/jquery.min.js"></script>

    <script src="<?php bloginfo('template_directory') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



    <!-- Plugin JavaScript -->

    <script src="<?php bloginfo('template_directory') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>



    <!-- Contact form JavaScript -->

    <script src="<?php bloginfo('template_directory') ?>/js/jqBootstrapValidation.js"></script>

    <script src="<?php bloginfo('template_directory') ?>/js/contact_me.js"></script>



    <!-- Custom scripts for this template -->

    <script src="<?php bloginfo('template_directory') ?>/js/agency.min.js"></script>



    <script src="<?php bloginfo('template_directory') ?>/js/scripts.js"></script>



    <!-- START WP_FOOOTER -->

    <?php wp_footer(); ?>

<script id="dsq-count-scr" src="//lemagrille.disqus.com/count.js" async></script>

  </body>



</html>


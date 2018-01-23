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

            <?

 

            // If comments are open or we have at least one comment, load up the comment template.

          

 

        // End the loop.

        endwhile;

        ?>

            </div>







          </div>

          <div class="col-xs-12 col-md-4">

            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus pariatur eum reprehenderit, quidem illo vitae dicta debitis natus dolor laborum aliquam magnam. Commodi perferendis nulla odit dolores, deserunt tenetur ratione.

          </div>

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



  </body>



</html>


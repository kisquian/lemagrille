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

        	<div id="content" class="">
			
				<div id="main" class="col-sm-8 clearfix" role="main">
				
					<div class="page-header">
					<?php if (is_category()) { ?>
						<h1 class="archive_title h2">
							<span><?php _e("CATEGOR[IA:", "wpbootstrap"); ?></span> <?php single_cat_title(); ?>
						</h1>
					<?php } elseif (is_tag()) { ?> 
						<h1 class="archive_title h2">
							<span><?php _e("TAG:", "wpbootstrap"); ?></span> <?php single_tag_title(); ?>
						</h1>
					<?php } elseif (is_author()) { ?>
						<h1 class="archive_title h2">
							<span><?php _e("AUTOR:", "wpbootstrap"); ?></span> <?php get_the_author_meta('display_name'); ?>
						</h1>
					<?php } elseif (is_day()) { ?>
						<h1 class="archive_title h2">
							<span><?php _e("Archivo:", "wpbootstrap"); ?></span> <?php the_time('l, F j, Y'); ?>
						</h1>
					<?php } elseif (is_month()) { ?>
					    <h1 class="archive_title h2">
					    	<span><?php _e("Archivo:", "wpbootstrap"); ?></span> <?php the_time('F Y'); ?>
					    </h1>
					<?php } elseif (is_year()) { ?>
					    <h1 class="archive_title h2">
					    	<span><?php _e("Archivo:", "wpbootstrap"); ?></span> <?php the_time('Y'); ?>
					    </h1>
					<?php } ?>
					</div>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
							
							<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						
						</header> <!-- end article header -->
					
						<section class="post_content">
						
						
							<?php the_excerpt(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php endwhile; ?>	
					
				
								
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("No Posts Yet", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, What you were looking for is not here.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
    
			</div> <!-- end #content -->

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

<div class="col-xs-12 col-md-4 sidebarclass">
	<ul>
		<h3>CATEGORÍAS</h3>
		<?php wp_list_categories('title_li='); ?>
	</ul>

	<div class="clearfix" style="height:50px;"></div>
	
	<ul>
		<h3>ARTÍCULOS</h3>
		<?php wp_get_archives(); ?>
	</ul>
 

 </div> <!-- end sidebar -->
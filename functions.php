<?php 

	add_theme_support( 'post-thumbnails' );

	//add_image_size( 'custom-size', 220, 180 );



	// show admin bar only for admins

	if (!current_user_can('manage_options')) {

		add_filter('show_admin_bar', '__return_false');

	}

	// show admin bar only for admins and editors

	if (!current_user_can('edit_posts')) {

		add_filter('show_admin_bar', '__return_false');

	}

	add_image_size( 'custom-size', 400, 300, true ); // 220 pixels wide by 180 pixels tall, soft proportional crop mode
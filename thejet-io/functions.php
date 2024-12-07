<?php 
	 add_action( 'wp_enqueue_scripts', 'thejet_io_enqueue_styles' );
	 function thejet_io_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 
 ?>
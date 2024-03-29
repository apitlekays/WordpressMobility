<?php
	
// Adding WP Functions & Theme Support
function joints_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );
	
	add_image_size( 'card-img', 278, 167, array( 'center', 'center' ) ); // width, height, crop
	add_image_size( 'welcome-img', 300, 449, array( 'center', 'center' ) ); // width, height, crop
	add_image_size( 'testi-img', 80, 80, array('center','center') );
	add_image_size( 'sub_course-img', 370, 223, array( 'center', 'center' ) ); // width, height, crop);
	add_image_size( 'staff-img', 150, 150, array( 'center', 'center' ) ); // width, height, crop);
	add_image_size( 'courseDetail-img', 370, 483, array( 'center', 'center' ) ); // width, height, crop);
	
	// Default thumbnail size
	set_post_thumbnail_size(125, 125, true);

	// Add RSS Support
	add_theme_support( 'automatic-feed-links' );
	
	// Add Support for WP Controlled Title Tag
	add_theme_support( 'title-tag' );
	
	// Add HTML5 Support
	add_theme_support( 'html5', 
	         array( 
	         	'comment-list', 
	         	'comment-form', 
	         	'search-form', 
	         ) 
	);
	
	// Adding post format support
	 add_theme_support( 'post-formats',
		array(
			'aside',             // title less blurb
			'gallery',           // gallery of images
			'link',              // quick link to other site
			'image',             // an image
			'quote',             // a quick quote
			'status',            // a Facebook like status update
			'video',             // video
			'audio',             // audio
			'chat'               // chat transcript
		)
	); 
	
	// Set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
	$GLOBALS['content_width'] = apply_filters( 'joints_theme_support', 1200 );		
	
} /* end theme support */

add_action( 'after_setup_theme', 'joints_theme_support' );
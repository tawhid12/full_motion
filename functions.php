<?php
function full_motion_dev(){
	load_theme_textdomain("Full Motion");
	add_theme_support("post-thumbnails");
	add_theme_support("title-tag");
	add_theme_support('post-formats',array('audio'));
	add_image_size('post-image',350,198);
}
add_action("after_setup_theme","full_motion_dev");
add_filter("wp_calculate_image_srcset","__return_null");
/*Load Assets file*/
function load_motion_scripts(){
	wp_enqueue_style("motion-main-style", get_template_directory_uri() ."/assets/css/main.css");
	wp_enqueue_script("motion-scrolly", get_template_directory_uri() ."/assets/js/jquery.scrolly.min.js",array("jquery"),"0.0.1",true);
	wp_enqueue_script("motion-poptrox", get_template_directory_uri() ."/assets/js/jquery.poptrox.min.js",array("jquery"),"0.0.1",true);
	wp_enqueue_script("motion-skel", get_template_directory_uri() ."/assets/js/skel.min.js",array("jquery"),"0.0.1",true);
	wp_enqueue_script("motion-util", get_template_directory_uri() ."/assets/js/util.js",array("jquery"),"0.0.1",true);
	wp_enqueue_script("motion-main", get_template_directory_uri() ."/assets/js/main.js",array("jquery"),"0.0.1",true);
}
add_action("wp_enqueue_scripts","load_motion_scripts");
?>
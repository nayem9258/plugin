<?php 
/*
Plugin Name: First Ctp
Description: First custom post type
Plugin url: https://www.fdls.com
Author: Nayem Molla
Author url: https://sdfsd.com
Text Domain: first
*/



function portfollo_custom_post(){
	register_post_type("portfollos",array(
	'labels'=> array('name'=>__('portfollos','first'),
	'singular_name' =>__('portfollo','first')
	
	),'public'=>true,
	'supports'=>array("title","editor","thumbnail","custom-fields"),
	'menu_icon' => 'dashicons-portfolio'));
	
		register_taxonomy('portfollo cat',"portfollos",array(
	'labels'=> array('name'=>__('categories','first'),
	'singular_name' =>__('category','first')
	
	),'hierarchical'=>true,
	'show_admin_column'=> true));
}
add_action("init","portfollo_custom_post");

function gallary_custom_post(){
	register_post_type("Gallarys",array(
	'labels'=> array('name'=>__('gallarys','first'),
	'singular_name' =>__('Gallary','first')
	
	),'public'=>true,
	'supports'=>array("title","custom-fields"),
	'menu_icon'=>'dashicons-images-alt'));
}
add_action("init","gallary_custom_post");

function testimonials_custom_post(){
	register_post_type("testimonials",array(
	'labels'=> array('name'=>__('testimonials','first'),
	'singular_name' =>__('testimonial','first')
	
	),'public'=>true,
	'supports'=>array("thumbnail"),
	'menu_icon'=>'dashicons-testimonial'));
}
add_action("init","testimonials_custom_post");

function Services_custom_post(){
	register_post_type("Services",array(
	'labels'=> array('name'=>__('Service','first'),
	'singular_name' =>__('Service','first')
	
	),'public'=>true,
	'supports'=>array("title",'editor',"custom-fields
	"),
	'menu_icon' =>'dashicons-insert-after'));
}
add_action("init","Services_custom_post");

function Slider_custom_post(){
	register_post_type("sliders",array(
	'labels'=> array('name' => _x('Slides','Post type general name','first'),
	'singular_name' => _x('Slide','Post type singular name','first'),
	'menu_name' => _x('Slides','Admin Menu text','first'),
	'add_new' => 'Add new slider',
	'add_new_item' => 'Add new slider',
	'edit_item' => 'Edit slide',
	'featured_image' => 'Slider image',
	'set_featured_image' => 'Select a slider image',
	'search_items' => 'Search a slide'
	
	),'public'=>true,
	'supports'=>array("title",'editor','thumbnail'),
	'menu_icon'=>'dashicons-slides'));
}
add_action("init","Slider_custom_post");

function Team_custom_post(){
	register_post_type("teams",array(
	'labels'=> array('name'=>__('teams','first'),
	'singular_name' =>__('team','first')
	
	),'public'=>true,
	'supports'=>array("title",'editor','thumbnail',"page-attributes"),
	'menu_icon' => 'dashicons-bank'));
}
add_action("init","team_custom_post");
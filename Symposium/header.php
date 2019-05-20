<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
    <link href="https://fonts.googleapis.com/css?family=Stylish&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php  bloginfo('template_url')?>/css/bootstrap.min.css">

    <title><?php  bloginfo('name');?></title>
  </head>
  <?php wp_head(); ?>
  <body>


   <nav class="navbar navbar-expand-md navbar-light bg-faded">
   	<a class="navbar-brand" href="#"><?php bloginfo('name') ?></a>
   	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
  	 </button>
	   <?php
	   wp_nav_menu([
	     'menu'            => 'top',
	     'theme_location'  => 'top',
	     'container'       => 'div',
	     'container_id'    => 'bs4navbar',
	     'container_class' => 'collapse navbar-collapse',
	     'menu_id'         => false,
	     'menu_class'      => 'navbar-nav mr-auto',
	     'depth'           => 2,
	     'fallback_cb'     => 'bs4navwalker::fallback',
	     'walker'          => new bs4navwalker()
	   ]);
	   ?>
	</nav>

	<div class=" col col-lg-12 col-sm-12 banner"></div>



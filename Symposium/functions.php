<?php

require_once('bs4navwalker.php');

register_nav_menu('top', 'Top menu');

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'id' => 'footer',
    'name' => 'Footer',
    'before_widget' => '<div class="col-md-4 col-sm-12 widget">',
    'after_widget' => '</div>',
    'before_title' => '<h6>',
    'after_title' => '</h6>',
  )
);

<?php

//Manage reading of javascripts.
$dir = get_stylesheet_directory_uri();

function add_script() {
  //wp_deregister_script('jquery');
  //wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-1.11.3.min.js');
  //wp_register_script('jquery', 'https://code.jquery.com/jquery-1.11.3.min.js');
  wp_enqueue_script('uikit', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/2.24.2/js/uikit.min.js');
  wp_enqueue_script('matchHeight', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js');
  wp_enqueue_script('origin', get_stylesheet_directory_uri() . '/js/common.js');
}

add_action('wp_enqueue_scripts', 'add_script');


//To manage the loading of CSS.
function add_style(){
    wp_enqueue_style('fortawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
    wp_enqueue_style('uikit', 'https://cdnjs.cloudflare.com/ajax/libs/uikit/2.24.2/css/uikit.min.css');
}
add_action('wp_enqueue_scripts', 'add_style');


<?php
/*
Plugin Name:Пробный плагин
*/
function qwerty(){
include "php/function.php";
require "js/script.js";
require "css/style.css";
}


//add_action( 'wp_head', 'qwerty' );
add_action( 'wp_footer', 'qwerty' );
?>
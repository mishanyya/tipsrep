<?php
/*
Plugin Name:Плагин для поиска информации на других сайтах
*/
function for_search_of_information(){
include "php/function.php";

//include "php/foredit.php";

require "js/script.js";
require "css/style.css";
}


//add_action( 'wp_head', 'qwerty' );
add_action( 'wp_head', 'for_search_of_information' );
?>

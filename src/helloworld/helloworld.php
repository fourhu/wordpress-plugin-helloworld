<?php
/**
* Plugin Name: HelloWorld
* Plugin URI: https://chen25840.github.io
* Description: This plugin does some stuff with WordPress
* Version: 1.0.0
* Author: Worameth Semapat
* Author URI: https://chen25840.github.io
*/

function add_thankyou_text($content) {
    return $content .= "<p>Thanks you for reading!</p>";
}

add_action("the_content", "add_thankyou_text");
?>
<?php
 /**
  * Plugin Name: My-First-Plugin
  * Description: This is my first plugin in wordpress.
  * Version: 1.0
  * Author: Muhammed Saber
  */

    function capitalize_post_title($title){
        return strtoupper($title);
    }

    add_filter('the_title','capitalize_post_title');
    /*** Title Capiltalize Function ***/

    function convert_numbers_to_alphabets($content) {
        $number_array = array("0" => "zero", "1" => "one", "2" => "two", "3" => "three", "4" => "four", "5" => "five", "6" => "six", "7" => "seven", "8" => "eight", "9" => "nine");
        
        $content = preg_replace_callback("/\d+/", function($match) use ($number_array) {
            return $number_array[$match[0]];
        }, $content);
        
        return $content;
    }

    add_filter('the_content', 'convert_numbers_to_alphabets');
    /*** Numbers Converter Function ***/

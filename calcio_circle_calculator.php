<?php
/*
Plugin Name: Circle Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/circle-calculator/
Description: Instantly find the area, circumference, radius, and diameter of any circle. Use our free Circle Calculator for fast, accurate geometry solutions.
Version: 1.0.0
Author: www.calculator.io / Circle Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_circle_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Circle Calculator by www.calculator.io";

function calcio_circle_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Circle Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_circle_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_circle_calculator', 'calcio_circle_calculator_shortcode' );
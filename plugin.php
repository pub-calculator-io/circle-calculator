<?php
/*
Plugin Name: Circle Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/circle-calculator/
Description: Circle calculator finds missing characteristics of a circle. It includes a radius calculator, circumference calculator, diameter calculator, and circle area calculator.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_circle_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Circle Calculator by Calculator.iO";

function display_ci_circle_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/circle-calculator/" target="_blank"><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48"></a> Circle Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_circle_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_circle_calculator', 'display_ci_circle_calculator' );
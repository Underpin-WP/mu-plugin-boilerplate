<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load Underpin, and its dependencies.
if(file_exists( plugin_dir_path( __FILE__ ) . 'vendor/autoload.php') ) {
	$autoload = plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';
} else{
	wp_die('Could not load vendor dependencies. Are you sure you ran composer install?');
}

require_once( $autoload );
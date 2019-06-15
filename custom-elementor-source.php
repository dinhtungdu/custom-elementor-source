<?php
/**
 * Plugin Name:     Custom Elementor Source
 * Plugin URI:      https://dinhtungdu.github.io/create-your-own-elementor-template-library
 * Description:     Just a demo for my blog above
 * Author:          Tung Du
 * Author URI:      https://dinhtungdu.github.io
 * Text Domain:     custom-elementor-source
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Custom_Elementor_Source
 */

// Your code starts here.

/**
 * Register our custom source.
 */
add_action( 'elementor/init', function() {
	include 'includes/source.php';
	\Elementor\Plugin::instance()->templates_manager->unregister_source( 'remote' );
	\Elementor\Plugin::instance()->templates_manager->register_source( 'Elementor\TemplateLibrary\Source_Custom' );
}, 15 );

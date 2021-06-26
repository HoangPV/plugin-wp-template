<?php
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

register_activation_hook( __FILE__, [ \Kenhana\Inc\Activator::class, 'activate' ] );

register_deactivation_hook( __FILE__, [ \Kenhana\Inc\Deactivator::class, 'deactivate' ] );


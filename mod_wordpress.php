<?php
	/*
	Plugin Name: Horoscopus module
	Plugin URI: http://http://www.horoscopus.es/servicios/
	Description: Puts a box with the 12 signs of the horoscope with the today's prediction
	Version: 1.3
	Author: Horoscopus
	Author URI: http://www.horoscopus.es/
	License: GPL
	*/
class Horoscopus extends WP_Widget {
	function Horoscopus() {
		parent::__construct(
			'Horoscopus',
			__( 'Horoscopus'),
			array('description' => __('Shows today\'s horoscope'))
		);
	}
	function widget($args, $instance) {
		echo $args['before_widget'];
		echo $args['before_title'].esc_html( $instance['title'] ).$args['after_title'];
		echo '<script type="text/javascript" src="http://www.horoscopus.es/js/hplugin.000.js?sn=horoscopus&signo="></script>';
	}
}

function onRegister() {
	register_widget('Horoscopus');
}
add_action('widgets_init', 'onRegister');

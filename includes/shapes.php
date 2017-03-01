<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Shapes {
	private static $shapes;

	public static function get_shapes( $shape = null ) {
		if ( null === self::$shapes ) {
			self::init_shapes();
		}

		if ( $shape ) {
			return isset( self::$shapes[ $shape ] ) ? self::$shapes[ $shape ] : null;
		}

		return self::$shapes;
	}

	public static function filter_shapes( $by ) {
		return array_filter( self::get_shapes(), function( $shape ) use ( $by ) {
			return ! empty( $shape[ $by ] );
		} );
	}

	public static function get_shape_path( $shape, $is_negative = false ) {
		$file_name = $shape;

		if ( $is_negative ) {
			$file_name .= '-negative';
		}

		return ELEMENTOR_PATH . 'assets/shapes/' . $file_name . '.svg';
	}

	private static function init_shapes() {
		self::$shapes = [
			'single-triangle' => [
				'title' => __( 'Single Triangle', 'elementor' ),
				'has_negative' => true,
			],
			'triangle' => [
				'title' => __( 'Triangle', 'elementor' ),
				'has_negative' => true,
			],
			'triangle-asymmetrical' => [
				'title' => __( 'Triangle Asymmetrical', 'elementor' ),
				'has_negative' => true,
				'has_flip' => true,
			],
			'single-circle' => [
				'title' => __( 'Single Circle', 'elementor' ),
				'has_negative' => true,
			],
			'round-split' => [
				'title' => __( 'Round Split', 'elementor' ),
				'has_negative' => true,
			],
			'curve' => [
				'title' => __( 'Curve', 'elementor' ),
				'has_negative' => true,
			],
			'curve-asymmetrical' => [
				'title' => __( 'Curve Asymmetrical', 'elementor' ),
				'has_negative' => true,
				'has_flip' => true,
			],
			'tilt' => [
				'title' => __( 'Tilt', 'elementor' ),
				'has_negative' => true,
				'has_flip' => true,
			],
			'opacity-tilt' => [
				'title' => __( 'Opacity Tilt', 'elementor' ),
				'has_flip' => true,
			],
			'opacity-tilt-fan' => [
				'title' => __( 'Opacity Tilt Fan', 'elementor' ),
			],
			'zigzag' => [
				'title' => __( 'Zigzag', 'elementor' ),
			],
			'wave' => [
				'title' => __( 'Wave', 'elementor' ),
				'has_negative' => true,
				'has_flip' => true,
			],
			'wave-brush' => [
				'title' => __( 'Waves Brush', 'elementor' ),
				'has_flip' => true,
			],
			'wave-zigzag' => [
				'title' => __( 'Wave Zigzag', 'elementor' ),
				'has_flip' => true,
			],
			'wave-opacity' => [
				'title' => __( 'Waves Opacity', 'elementor' ),
				'has_flip' => true,
			],
			'book' => [
				'title' => __( 'Book', 'elementor' ),
				'has_negative' => true,
			],
			'drops' => [
				'title' => __( 'Drops', 'elementor' ),
				'has_negative' => true,
				'has_flip' => true,
			],
			'clouds' => [
				'title' => __( 'Clouds', 'elementor' ),
				'has_negative' => true,
				'has_flip' => true,
			],
		];
	}
}
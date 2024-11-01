<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.facebook.com/disismehbub
 * @since      1.0.0
 *
 * @package    Gravity_Forms_Tooltip
 * @subpackage Gravity_Forms_Tooltip/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Gravity_Forms_Tooltip
 * @subpackage Gravity_Forms_Tooltip/public
 * @author     Mehbub Rashid <rashidiam1998@gmail.com>
 */
class Gravity_Forms_Tooltip_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Gravity_Forms_Tooltip_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Gravity_Forms_Tooltip_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/gravity-forms-tooltip-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Gravity_Forms_Tooltip_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Gravity_Forms_Tooltip_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_script( 'popper-js-for-tippy', plugin_dir_url( __FILE__ ) . 'js/popper.min.js', array('jquery'), null, true );
		wp_enqueue_script( 'tippy-polyfill', '//polyfill.io/v3/polyfill.min.js?features=Array.prototype.find,Promise,Object.assign', array('jquery'), null, true );
		wp_enqueue_script( 'tippy', plugin_dir_url( __FILE__ ) . 'js/tippy.min.js', array('tippy-polyfill', 'jquery', 'popper-js-for-tippy'), null, true );
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/gravity-forms-tooltip-public.js', array( 'jquery', 'popper-js-for-tippy', 'tippy' ), $this->version, false );

	}

}

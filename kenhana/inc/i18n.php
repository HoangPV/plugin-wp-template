<?php


namespace Kenhana\Inc;


/**
 * Class I18n
 * @author Hoang Phan <phanvuhoang@gmail.com>
 * @package Kenhana\Inc
 */
class I18n {
	/**
	 * @var
	 */
	private $domain;

	/**
	 * Load the plugin text domain for translation.
	 */
	public function load_plugin_textdomain() {
		load_plugin_textdomain(
			$this->domain,
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);
	}

	/**
	 * @param $domain
	 */
	public function set_domain( $domain ) {
		$this->domain = $domain;
	}
}
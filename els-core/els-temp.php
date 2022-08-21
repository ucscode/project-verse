<?php

class Temp {
	
	protected static $pages = [];
	
	const LOGO = TEMP_DIR . '/assets/images/origin.png';
	
	private static $homekey = __class__ . '#BY-UCSCODE@2022!PRO';
	
	public static function output() {
		$page = self::pageInURI();
		require TEMP_DIR . '/header.php';
		require TEMP_DIR . '/footer.php';
	}
	
	public static function register( ?string $slug, object $page ) {
		if( is_null($slug) ) $slug = self::$homekey;
		self::$pages[ $slug ] = $page;
	}
	
	public static function registered( string $slug ) {
		return array_key_exists( $slug, self::$pages );
	}
	
	protected static function pageInURI() {
		$slug = core::slug();
		if( empty($slug) ) $slug = self::$homekey;
		$page = self::$pages[ $slug ] ?? null;
		if( !$page ) {
			$page = new stdClass();
			$page->sidebar = false;
			$page->content = function() {
				require TEMP_DIR . '/404.php';
			};
		};
		$page->sidebar = !!($page->sidebar ?? true);
		$page->blank = !!($page->blank ?? false);
		if( !isset($page->content) || !is_callable($page->content) ) $page->content = function(){};
		return $page;
	}
	
}
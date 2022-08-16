<?php

class Temp {
	
	protected static $pages = [];
	
	const LOGO = TEMP_DIR . '/assets/images/origin.png';
	
	public static function output() {
		$page = self::pageInURI();
		require TEMP_DIR . '/header.php';
		require TEMP_DIR . '/footer.php';
	}
	
	public static function register( string $slug, object $page ) {
		self::$pages[ $slug ] = $page;
	}
	
	public static function registered( string $slug ) {
		return array_key_exists( $slug, self::$pages );
	}
	
	protected static function pageInURI() {
		$slug = core::slug();
		if( empty($slug) ) $slug = 'home';
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
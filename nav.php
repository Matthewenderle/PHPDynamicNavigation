<?php
require_once 'enum.php';
class nav {
	static $inst = null;
	static function getInstance() {
		if (self::$inst == null) {
			self::$inst = new page ();
		}
		return self::$inst;
	}
	public function nav($url) {
		$enum = enum::getInstance ();
		$url = str_replace ( '.php', '', substr ( $url, strrpos ( $url, '/' ) + 1 ) );
		
		$pages = $enum->pages;
		$alias = $enum->pagealias;
		
		foreach ( $pages as $page ) {
			if ($url == $page) {
				$title = $alias [$page];
				echo '<li id="active"><a href="' . $url . '.php" id="active">' . $title . '</a></li>';
			} else {
				$title = $alias [$page];
				echo '<li><a href="' . $page . '.php">' . $title . '</a></li>';
			}
		}
	}
}
?>
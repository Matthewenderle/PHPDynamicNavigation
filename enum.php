<?php
class enum {
	static $inst = null;
	static function getInstance() {
		if (self::$inst == null) {
			self::$inst = new enum ();
		}
		return self::$inst;
	}
	public $pages = array (
			'index' => 'index',
			'login' => 'login' 
	);
	public $pagealias = array (
			'index' => 'Homepage',
			'login' => 'Login',
			'aboutus' => 'About Us',
			'contact' => 'Contact Us' 
	);
}
?>
<?php
/**
 * Generated by Haxe 4.1.1
 */

namespace php\_Boot;

use \php\Boot;

/**
 * Anonymous objects implementation
 */
class HxAnon extends \StdClass {
	/**
	 * @param mixed $fields
	 * 
	 * @return void
	 */
	public function __construct ($fields = null) {
		#/opt/haxe/std/php/Boot.hx:943: lines 943-948
		$_gthis = $this;
		#/opt/haxe/std/php/Boot.hx:944: characters 3-10
		;
		#/opt/haxe/std/php/Boot.hx:945: lines 945-947
		if ($fields !== null) {
			#/opt/haxe/std/php/Boot.hx:946: characters 4-84
			foreach ($fields as $key => $value) {
				#/opt/haxe/std/php/Boot.hx:946: characters 65-69
				$tmp = $_gthis;
				#/opt/haxe/std/php/Boot.hx:946: characters 49-83
				$tmp->{$key} = $value;
			}
		}
	}

	/**
	 * @param string $name
	 * @param mixed $args
	 * 
	 * @return mixed
	 */
	public function __call ($name, $args) {
		#/opt/haxe/std/php/Boot.hx:957: characters 3-57
		return ($this->$name)(...$args);
	}

	/**
	 * @param string $name
	 * 
	 * @return mixed
	 */
	public function __get ($name) {
		#/opt/haxe/std/php/Boot.hx:952: characters 3-14
		return null;
	}
}

Boot::registerClass(HxAnon::class, 'php._Boot.HxAnon');

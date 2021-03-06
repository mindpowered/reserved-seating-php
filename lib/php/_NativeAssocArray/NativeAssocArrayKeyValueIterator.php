<?php
/**
 * Generated by Haxe 4.1.1
 */

namespace php\_NativeAssocArray;

use \php\_Boot\HxAnon;
use \php\Boot;

class NativeAssocArrayKeyValueIterator {
	/**
	 * @var int
	 */
	public $current;
	/**
	 * @var mixed
	 */
	public $keys;
	/**
	 * @var int
	 */
	public $length;
	/**
	 * @var mixed
	 */
	public $values;

	/**
	 * @param mixed $data
	 * 
	 * @return void
	 */
	public function __construct ($data) {
		#/opt/haxe/std/php/NativeAssocArray.hx:48: characters 20-21
		$this->current = 0;
		#/opt/haxe/std/php/NativeAssocArray.hx:53: characters 3-30
		$this->length = count($data);
		#/opt/haxe/std/php/NativeAssocArray.hx:54: characters 3-38
		$this->keys = array_keys($data);
		#/opt/haxe/std/php/NativeAssocArray.hx:55: characters 3-47
		$this->values = array_values($data);
	}

	/**
	 * @return bool
	 */
	public function hasNext () {
		#/opt/haxe/std/php/NativeAssocArray.hx:59: characters 3-26
		return $this->current < $this->length;
	}

	/**
	 * @return object
	 */
	public function next () {
		#/opt/haxe/std/php/NativeAssocArray.hx:63: characters 16-29
		$tmp = $this->keys[$this->current];
		#/opt/haxe/std/php/NativeAssocArray.hx:63: characters 3-56
		return new HxAnon([
			"key" => $tmp,
			"value" => $this->values[$this->current++],
		]);
	}
}

Boot::registerClass(NativeAssocArrayKeyValueIterator::class, 'php._NativeAssocArray.NativeAssocArrayKeyValueIterator');

<?php
/**
 * Generated by Haxe 4.1.1
 */

namespace haxe\_CallStack;

use \php\Boot;
use \haxe\Exception;
use \haxe\StackItem;
use \haxe\NativeStackTrace;

final class CallStack_Impl_ {

	/**
	 * @param \Array_hx $this
	 * 
	 * @return \Array_hx
	 */
	public static function asArray ($this1) {
		#/opt/haxe/std/haxe/CallStack.hx:115: characters 3-14
		return $this1;
	}

	/**
	 * Return the call stack elements, or an empty array if not available.
	 * 
	 * @return \Array_hx
	 */
	public static function callStack () {
		#/opt/haxe/std/haxe/CallStack.hx:52: characters 3-63
		return NativeStackTrace::toHaxe(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS));
	}

	/**
	 * Make a copy of the stack.
	 * 
	 * @param \Array_hx $this
	 * 
	 * @return \Array_hx
	 */
	public static function copy ($this1) {
		#/opt/haxe/std/haxe/CallStack.hx:107: characters 3-21
		return (clone $this1);
	}

	/**
	 * @param StackItem $item1
	 * @param StackItem $item2
	 * 
	 * @return bool
	 */
	public static function equalItems ($item1, $item2) {
		#/opt/haxe/std/haxe/CallStack.hx:119: lines 119-131
		if ($item1 === null) {
			#/opt/haxe/std/haxe/CallStack.hx:120: lines 120-130
			if ($item2 === null) {
				#/opt/haxe/std/haxe/CallStack.hx:120: characters 23-27
				return true;
			} else {
				#/opt/haxe/std/haxe/CallStack.hx:130: characters 12-17
				return false;
			}
		} else {
			#/opt/haxe/std/haxe/CallStack.hx:119: characters 18-23
			$__hx__switch = ($item1->index);
			if ($__hx__switch === 0) {
				#/opt/haxe/std/haxe/CallStack.hx:119: lines 119-130
				if ($item2 === null) {
					#/opt/haxe/std/haxe/CallStack.hx:130: characters 12-17
					return false;
				} else if ($item2->index === 0) {
					#/opt/haxe/std/haxe/CallStack.hx:121: characters 33-37
					return true;
				} else {
					#/opt/haxe/std/haxe/CallStack.hx:130: characters 12-17
					return false;
				}
			} else if ($__hx__switch === 1) {
				#/opt/haxe/std/haxe/CallStack.hx:119: lines 119-130
				if ($item2 === null) {
					#/opt/haxe/std/haxe/CallStack.hx:130: characters 12-17
					return false;
				} else if ($item2->index === 1) {
					#/opt/haxe/std/haxe/CallStack.hx:122: characters 17-19
					$m1 = $item1->params[0];
					#/opt/haxe/std/haxe/CallStack.hx:122: characters 29-31
					$m2 = $item2->params[0];
					#/opt/haxe/std/haxe/CallStack.hx:123: characters 5-13
					return $m1 === $m2;
				} else {
					#/opt/haxe/std/haxe/CallStack.hx:130: characters 12-17
					return false;
				}
			} else if ($__hx__switch === 2) {
				#/opt/haxe/std/haxe/CallStack.hx:119: lines 119-130
				if ($item2 === null) {
					#/opt/haxe/std/haxe/CallStack.hx:130: characters 12-17
					return false;
				} else if ($item2->index === 2) {
					#/opt/haxe/std/haxe/CallStack.hx:124: characters 18-23
					$item11 = $item1->params[0];
					#/opt/haxe/std/haxe/CallStack.hx:124: characters 25-30
					$file1 = $item1->params[1];
					#/opt/haxe/std/haxe/CallStack.hx:124: characters 32-37
					$line1 = $item1->params[2];
					#/opt/haxe/std/haxe/CallStack.hx:124: characters 39-43
					$col1 = $item1->params[3];
					#/opt/haxe/std/haxe/CallStack.hx:124: characters 75-79
					$col2 = $item2->params[3];
					#/opt/haxe/std/haxe/CallStack.hx:124: characters 68-73
					$line2 = $item2->params[2];
					#/opt/haxe/std/haxe/CallStack.hx:124: characters 61-66
					$file2 = $item2->params[1];
					#/opt/haxe/std/haxe/CallStack.hx:124: characters 54-59
					$item21 = $item2->params[0];
					#/opt/haxe/std/haxe/CallStack.hx:125: characters 5-81
					if (($file1 === $file2) && ($line1 === $line2) && ($col1 === $col2)) {
						#/opt/haxe/std/haxe/CallStack.hx:125: characters 57-81
						return CallStack_Impl_::equalItems($item11, $item21);
					} else {
						#/opt/haxe/std/haxe/CallStack.hx:125: characters 5-81
						return false;
					}
				} else {
					#/opt/haxe/std/haxe/CallStack.hx:130: characters 12-17
					return false;
				}
			} else if ($__hx__switch === 3) {
				#/opt/haxe/std/haxe/CallStack.hx:119: lines 119-130
				if ($item2 === null) {
					#/opt/haxe/std/haxe/CallStack.hx:130: characters 12-17
					return false;
				} else if ($item2->index === 3) {
					#/opt/haxe/std/haxe/CallStack.hx:126: characters 17-23
					$class1 = $item1->params[0];
					#/opt/haxe/std/haxe/CallStack.hx:126: characters 25-32
					$method1 = $item1->params[1];
					#/opt/haxe/std/haxe/CallStack.hx:126: characters 50-57
					$method2 = $item2->params[1];
					#/opt/haxe/std/haxe/CallStack.hx:126: characters 42-48
					$class2 = $item2->params[0];
					#/opt/haxe/std/haxe/CallStack.hx:127: characters 5-43
					if ($class1 === $class2) {
						#/opt/haxe/std/haxe/CallStack.hx:127: characters 25-43
						return $method1 === $method2;
					} else {
						#/opt/haxe/std/haxe/CallStack.hx:127: characters 5-43
						return false;
					}
				} else {
					#/opt/haxe/std/haxe/CallStack.hx:130: characters 12-17
					return false;
				}
			} else if ($__hx__switch === 4) {
				#/opt/haxe/std/haxe/CallStack.hx:119: lines 119-130
				if ($item2 === null) {
					#/opt/haxe/std/haxe/CallStack.hx:130: characters 12-17
					return false;
				} else if ($item2->index === 4) {
					#/opt/haxe/std/haxe/CallStack.hx:128: characters 24-26
					$v1 = $item1->params[0];
					#/opt/haxe/std/haxe/CallStack.hx:128: characters 43-45
					$v2 = $item2->params[0];
					#/opt/haxe/std/haxe/CallStack.hx:129: characters 5-13
					return $v1 === $v2;
				} else {
					#/opt/haxe/std/haxe/CallStack.hx:130: characters 12-17
					return false;
				}
			}
		}
	}

	/**
	 * Return the exception stack : this is the stack elements between
	 * the place the last exception was thrown and the place it was
	 * caught, or an empty array if not available.
	 * May not work if catch type was a derivative from `haxe.Exception`.
	 * 
	 * @return \Array_hx
	 */
	public static function exceptionStack () {
		#/opt/haxe/std/haxe/CallStack.hx:63: characters 3-85
		$eStack = NativeStackTrace::toHaxe(NativeStackTrace::exceptionStack());
		#/opt/haxe/std/haxe/CallStack.hx:64: characters 10-48
		return CallStack_Impl_::subtract($eStack, CallStack_Impl_::callStack());
	}

	/**
	 * @param Exception $e
	 * 
	 * @return string
	 */
	public static function exceptionToString ($e) {
		#/opt/haxe/std/haxe/CallStack.hx:135: lines 135-137
		if ($e->get_previous() === null) {
			#/opt/haxe/std/haxe/CallStack.hx:136: characters 12-34
			$tmp = "Exception: " . ($e->get_message()??'null');
			#/opt/haxe/std/haxe/CallStack.hx:136: characters 37-44
			$tmp1 = $e->get_stack();
			#/opt/haxe/std/haxe/CallStack.hx:136: characters 4-46
			return ($tmp??'null') . ((($tmp1 === null ? "null" : CallStack_Impl_::toString($tmp1)))??'null');
		}
		#/opt/haxe/std/haxe/CallStack.hx:138: characters 3-19
		$result = "";
		#/opt/haxe/std/haxe/CallStack.hx:139: characters 3-29
		$e1 = $e;
		#/opt/haxe/std/haxe/CallStack.hx:140: characters 3-35
		$prev = null;
		#/opt/haxe/std/haxe/CallStack.hx:141: lines 141-150
		while ($e1 !== null) {
			#/opt/haxe/std/haxe/CallStack.hx:142: lines 142-147
			if ($prev === null) {
				#/opt/haxe/std/haxe/CallStack.hx:143: characters 15-37
				$result1 = "Exception: " . ($e1->get_message()??'null');
				#/opt/haxe/std/haxe/CallStack.hx:143: characters 40-47
				$tmp = $e1->get_stack();
				#/opt/haxe/std/haxe/CallStack.hx:143: characters 5-58
				$result = ($result1??'null') . ((($tmp === null ? "null" : CallStack_Impl_::toString($tmp)))??'null') . ($result??'null');
			} else {
				#/opt/haxe/std/haxe/CallStack.hx:145: characters 5-66
				$prevStack = CallStack_Impl_::subtract($e1->get_stack(), $prev->get_stack());
				#/opt/haxe/std/haxe/CallStack.hx:146: characters 5-69
				$result = "Exception: " . ($e1->get_message()??'null') . ((($prevStack === null ? "null" : CallStack_Impl_::toString($prevStack)))??'null') . "\x0A\x0ANext " . ($result??'null');
			}
			#/opt/haxe/std/haxe/CallStack.hx:148: characters 4-12
			$prev = $e1;
			#/opt/haxe/std/haxe/CallStack.hx:149: characters 4-18
			$e1 = $e1->get_previous();
		}
		#/opt/haxe/std/haxe/CallStack.hx:151: characters 3-16
		return $result;
	}

	/**
	 * @param \Array_hx $this
	 * @param int $index
	 * 
	 * @return StackItem
	 */
	public static function get ($this1, $index) {
		#/opt/haxe/std/haxe/CallStack.hx:111: characters 3-21
		return ($this1->arr[$index] ?? null);
	}

	/**
	 * @param \Array_hx $this
	 * 
	 * @return int
	 */
	public static function get_length ($this1) {
		#/opt/haxe/std/haxe/CallStack.hx:46: characters 35-53
		return $this1->length;
	}

	/**
	 * @param \StringBuf $b
	 * @param StackItem $s
	 * 
	 * @return void
	 */
	public static function itemToString ($b, $s) {
		#/opt/haxe/std/haxe/CallStack.hx:155: lines 155-182
		$__hx__switch = ($s->index);
		if ($__hx__switch === 0) {
			#/opt/haxe/std/haxe/CallStack.hx:157: characters 5-26
			$b->add("a C function");
		} else if ($__hx__switch === 1) {
			#/opt/haxe/std/haxe/CallStack.hx:158: characters 16-17
			$m = $s->params[0];
			#/opt/haxe/std/haxe/CallStack.hx:159: characters 5-21
			$b->add("module ");
			#/opt/haxe/std/haxe/CallStack.hx:160: characters 5-13
			$b->add($m);
		} else if ($__hx__switch === 2) {
			#/opt/haxe/std/haxe/CallStack.hx:161: characters 32-35
			$col = $s->params[3];
			#/opt/haxe/std/haxe/CallStack.hx:161: characters 26-30
			$line = $s->params[2];
			#/opt/haxe/std/haxe/CallStack.hx:161: characters 20-24
			$file = $s->params[1];
			#/opt/haxe/std/haxe/CallStack.hx:161: characters 17-18
			$s1 = $s->params[0];
			#/opt/haxe/std/haxe/CallStack.hx:162: lines 162-165
			if ($s1 !== null) {
				#/opt/haxe/std/haxe/CallStack.hx:163: characters 6-24
				CallStack_Impl_::itemToString($b, $s1);
				#/opt/haxe/std/haxe/CallStack.hx:164: characters 6-17
				$b->add(" (");
			}
			#/opt/haxe/std/haxe/CallStack.hx:166: characters 5-16
			$b->add($file);
			#/opt/haxe/std/haxe/CallStack.hx:167: characters 5-20
			$b->add(" line ");
			#/opt/haxe/std/haxe/CallStack.hx:168: characters 5-16
			$b->add($line);
			#/opt/haxe/std/haxe/CallStack.hx:169: lines 169-172
			if ($col !== null) {
				#/opt/haxe/std/haxe/CallStack.hx:170: characters 6-23
				$b->add(" column ");
				#/opt/haxe/std/haxe/CallStack.hx:171: characters 6-16
				$b->add($col);
			}
			#/opt/haxe/std/haxe/CallStack.hx:173: lines 173-174
			if ($s1 !== null) {
				#/opt/haxe/std/haxe/CallStack.hx:174: characters 6-16
				$b->add(")");
			}
		} else if ($__hx__switch === 3) {
			#/opt/haxe/std/haxe/CallStack.hx:175: characters 23-27
			$meth = $s->params[1];
			#/opt/haxe/std/haxe/CallStack.hx:175: characters 16-21
			$cname = $s->params[0];
			#/opt/haxe/std/haxe/CallStack.hx:176: characters 5-47
			$b->add(($cname === null ? "<unknown>" : $cname));
			#/opt/haxe/std/haxe/CallStack.hx:177: characters 5-15
			$b->add(".");
			#/opt/haxe/std/haxe/CallStack.hx:178: characters 5-16
			$b->add($meth);
		} else if ($__hx__switch === 4) {
			#/opt/haxe/std/haxe/CallStack.hx:179: characters 23-24
			$n = $s->params[0];
			#/opt/haxe/std/haxe/CallStack.hx:180: characters 5-30
			$b->add("local function #");
			#/opt/haxe/std/haxe/CallStack.hx:181: characters 5-13
			$b->add($n);
		}
	}

	/**
	 * Returns a range of entries of current stack from the beginning to the the
	 * common part of this and `stack`.
	 * 
	 * @param \Array_hx $this
	 * @param \Array_hx $stack
	 * 
	 * @return \Array_hx
	 */
	public static function subtract ($this1, $stack) {
		#/opt/haxe/std/haxe/CallStack.hx:84: characters 3-23
		$startIndex = -1;
		#/opt/haxe/std/haxe/CallStack.hx:85: characters 3-14
		$i = -1;
		#/opt/haxe/std/haxe/CallStack.hx:86: lines 86-99
		while (++$i < $this1->length) {
			#/opt/haxe/std/haxe/CallStack.hx:87: characters 13-17
			$_g = 0;
			#/opt/haxe/std/haxe/CallStack.hx:87: characters 17-29
			$_g1 = $stack->length;
			#/opt/haxe/std/haxe/CallStack.hx:87: lines 87-97
			while ($_g < $_g1) {
				#/opt/haxe/std/haxe/CallStack.hx:87: characters 13-29
				$j = $_g++;
				#/opt/haxe/std/haxe/CallStack.hx:88: lines 88-96
				if (CallStack_Impl_::equalItems(($this1->arr[$i] ?? null), ($stack->arr[$j] ?? null))) {
					#/opt/haxe/std/haxe/CallStack.hx:89: lines 89-91
					if ($startIndex < 0) {
						#/opt/haxe/std/haxe/CallStack.hx:90: characters 7-21
						$startIndex = $i;
					}
					#/opt/haxe/std/haxe/CallStack.hx:92: characters 6-9
					++$i;
					#/opt/haxe/std/haxe/CallStack.hx:93: characters 6-32
					if ($i >= $this1->length) {
						#/opt/haxe/std/haxe/CallStack.hx:93: characters 27-32
						break;
					}
				} else {
					#/opt/haxe/std/haxe/CallStack.hx:95: characters 6-21
					$startIndex = -1;
				}
			}
			#/opt/haxe/std/haxe/CallStack.hx:98: characters 4-29
			if ($startIndex >= 0) {
				#/opt/haxe/std/haxe/CallStack.hx:98: characters 24-29
				break;
			}
		}
		#/opt/haxe/std/haxe/CallStack.hx:100: characters 10-60
		if ($startIndex >= 0) {
			#/opt/haxe/std/haxe/CallStack.hx:100: characters 28-53
			return $this1->slice(0, $startIndex);
		} else {
			#/opt/haxe/std/haxe/CallStack.hx:100: characters 56-60
			return $this1;
		}
	}

	/**
	 * Returns a representation of the stack as a printable string.
	 * 
	 * @param \Array_hx $stack
	 * 
	 * @return string
	 */
	public static function toString ($stack) {
		#/opt/haxe/std/haxe/CallStack.hx:71: characters 3-27
		$b = new \StringBuf();
		#/opt/haxe/std/haxe/CallStack.hx:72: lines 72-75
		$_g = 0;
		$_g1 = $stack;
		while ($_g < $_g1->length) {
			#/opt/haxe/std/haxe/CallStack.hx:72: characters 8-9
			$s = ($_g1->arr[$_g] ?? null);
			#/opt/haxe/std/haxe/CallStack.hx:72: lines 72-75
			++$_g;
			#/opt/haxe/std/haxe/CallStack.hx:73: characters 4-27
			$b->add("\x0ACalled from ");
			#/opt/haxe/std/haxe/CallStack.hx:74: characters 4-22
			CallStack_Impl_::itemToString($b, $s);
		}
		#/opt/haxe/std/haxe/CallStack.hx:76: characters 3-22
		return $b->b;
	}
}

Boot::registerClass(CallStack_Impl_::class, 'haxe._CallStack.CallStack_Impl_');
Boot::registerGetters('haxe\\_CallStack\\CallStack_Impl_', [
	'length' => true
]);

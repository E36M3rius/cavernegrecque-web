<?php
namespace Package_v1;

class Register {
	// contains resources/config etc.
	private static $bucket = array();

	public static function add($name, $value) {
		self::$bucket[$name] = $value;
	}

	public static function get($name) {
		if (!isset(self::$bucket[$name])) {
			throw new \Exception("Registry cannot find '$name'");
		}

		return self::$bucket[$name];
	}
}
<?php

defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('env')) {
	function env(string $key, $default = null)
	{
		return $_ENV[$key] ?? $default;
	}
}

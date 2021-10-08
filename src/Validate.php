<?php

namespace App;

class Validate
{
	public static function email($value)
	{
		return (bool) filter_var($value, FILTER_VALIDATE_EMAIL);
	}
	public static function url($value)
	{
		return (bool) filter_var($value,FILTER_VALIDATE_URL);
	}
	public static function password($value)
	{
		return (bool) preg_match('/^[a-zA-Z0-9_]{6,12}$/',$value);
	}
}


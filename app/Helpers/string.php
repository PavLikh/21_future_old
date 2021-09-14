<?php

if (! function_exists('trimLine')) {
	function trimLine($line)
	{
		if (mb_strlen($line, 'utf-8') > 8) {
			$line = Str::limit($line, 7, '..');
		}
		return $line;
	}
}
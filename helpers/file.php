<?php

if (!function_exists('split_file_with_basename')) {
	/**
	 * @param array $files
	 * @param string $suffix
	 * @return array
	 */
	function split_file_with_basename(array $files, $suffix = '.php')
	{
		$result = [];
		foreach ($files as $file) {
			$baseName = basename($file, $suffix);
			$result[$baseName] = $file;
		}
		return $result;
	}
}
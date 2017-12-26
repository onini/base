<?php

if (!function_exists('check_db_connection')) {
    /**
     * @return bool
     */
    function check_db_connection()
    {
        try {
            DB::connection()->reconnect();
            return true;
        } catch (Exception $exception) {
            return false;
        }
    }
}

if (!function_exists('onini_db_prefix')) {
	/**
	 * @return string
	 */
	function onini_db_prefix()
	{
		return ONINI_DB_PREFIX;
	}
}
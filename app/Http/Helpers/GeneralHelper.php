<?php 

use Illuminate\Support\Facades\DB;

class GeneralHelper {

	/**
	 * 
	 * @param [type]
	 * @param [type]
	 */
	public static function addLog($username, $msg)
	{
		$result = DB::table('history')->insert(['username' => $username, 'msg' => $msg]);
		return $result;
	}

	public static function getLog() 
	{
		return DB::table('history')->get();
	}

}

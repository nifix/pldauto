<?php 

use Illuminate\Support\Facades\DB;

class VendorsHelper {

	public static function getCount($state = "all")
	{
		if ($state == 'all') {
        	$countVendors = DB::table('vendors')->select('id')->count();	
		} else if ($state == 'inactive') {
			$countVendors = DB::table('vendors')->select('id')->where('is_active', 0)->count();
		} else if ($state == 'active') {
			$countVendors = DB::table('vendors')->select('id')->where('is_active', 1)->count();
		}
        return $countVendors;
	}
}


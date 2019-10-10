<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class AppViewComposer {

	public function compose(View $view) {
		if (!isset($companydata)) {
			$companydata = DB::table('companies')->select('id', 'name')->get();
			$sitesdata = DB::table('sites')->select('id','idCompany','name')->get();
		}
		$view->with('companydata', $companydata);
		$view->with('sitesdata', $sitesdata);
	}
}
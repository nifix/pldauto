<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class VendorsListViewComposer {

	public function compose(View $view) {
		$vendorslist = DB::table('vendors')->select('id', 'lastname', 'firstname', 'phone', 'company', 'site')->where('is_active', 1)->get();
		$view->with('vendorslist', $vendorslist);
	}
}
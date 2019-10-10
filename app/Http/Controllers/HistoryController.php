<?php

/**
 * @author C.Fracassi (2017)
 * 
 * (c) PLD Auto
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GeneralHelper;
use View;
use DB;

class HistoryController extends Controller
{
    
    public function __construct()
    {
    	
    }

    public function listHistory()
    {
        $result = DB::table('history')->orderBy('date', 'desc')->get();
    	return view('history')->with('historylist', $result);
    }
}

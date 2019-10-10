<?php

/**
 * @author C.Fracassi (2017)
 * 
 * (c) PLD Auto
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->returnCompanies();
        return view('home');
    }

    /**
     * Returns the array of the companies
     * 
     * @return array
     */
    protected function returnCompanies()
    {
        $companydata = DB::table('companies')->select('id', 'name')->get();
        return $companydata;
    }

    protected function returnSites()
    {
        $sitedata = DB::table('sites')->select('idCompany','name');
        return $sitedata;
    }

    protected function blockedUser()
    {
        return view('blocked')->with('error','Compte bloqué');
    }
}

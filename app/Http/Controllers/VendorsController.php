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

class VendorsController extends Controller
{
    
    public function __construct()
    {

    }

    public function index()
    {
    	return view('vendors');
    }

    protected function confirmDelete($id)
    {
    	return View::make('vendors.vendorsmodal')->with('id',$id)->render();
    }

    protected function deleteVendor($id)
    {
    	$isData = DB::table('vendors')->select('id','lastname','firstname')->where('id', $id)->where('is_active', 1)->first();
    	if (!empty($isData)) {
    		$result = DB::table('vendors')->where('id', $id)->limit(1)->update(array('is_active' => 0));
    		if ($result == 1) {
    			GeneralHelper::addLog(Auth::user()->username,
    				"suppression du vendeur n°".$id.' ('.$isData->lastname.' '.$isData->firstname.')');
				return View::make('vendors.vendorsdelete')->with('msg', 'Vendeur supprimé.')->render();
    		} else if ($result != 1) {
    			GeneralHelper::addLog(Auth::user()->username,
    				'tentative de suppression de vendeur n°'.$id.' ('.$isData->lastname.' '.$isData->firstname.') échouée (Erreur lors de la suppression)');
    			return View::make('vendors.vendorsdelete')->with('msg', 'Erreur lors de la suppression.')->render();
    		}
    	} else {
    		return View::make('vendors.vendorsdelete')->with('msg', 'Erreur, vendeur introuvable.')->render();
    		GeneralHelper::addLog(Auth::user()->username,"tentative de suppression de vendeur échouée (Vendeur introuvable)");
    	}
    }
}

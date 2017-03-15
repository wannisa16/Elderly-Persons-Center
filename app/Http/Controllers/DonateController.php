<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Donor;
use App\Image;

class DonateController extends Controller
{
    public function indexDonate()
    {
    	$donors = Donor::orderBy('id','ASC')
        	->paginate(10);

        return view('elderly.indexDonate')->with('donors',$donors);
    }

    public function detailDonate($id)
    {
    	$donate = Donor::find($id);

    	return view('elderly.detailDonate')->with('donate',$donate);
    	
    }
}

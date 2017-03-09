<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Donor;

class DonateController extends Controller
{
    public function indexDonate()
    {
    	$donors = Donor::orderBy('id','ASC')
        	->paginate(10);

        return view('elderly.indexDonate')->with('donors',$donors);
    }
}

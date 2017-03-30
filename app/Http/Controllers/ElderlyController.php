<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Elderly;
use App\Http\Requests;

class ElderlyController extends Controller
{
    public function indexElderly()
    {
    	$elderlies = Elderly::orderBy('id','ASC')
        	 ->paginate(10); 

    	return view('elderly.indexelderly')->with('elderlies',$elderlies);
    }
}

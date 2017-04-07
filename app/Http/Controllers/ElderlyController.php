<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Elderly;

class ElderlyController extends Controller
{
    public function indexElderly()
    {
    	$elderlies = Elderly::orderBy('id','ASC')
        	 ->paginate(10); 

    	return view('elderly.indexelderly')->with('elderlies',$elderlies);
    }

    public function detailElderly($id)
    {
    	$elderly = Elderly::find($id); 

    	return view('elderly.detailelderly')->with('elderly',$elderly);
    }
}

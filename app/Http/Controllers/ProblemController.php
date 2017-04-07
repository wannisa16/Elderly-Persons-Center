<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helper;
use App\Victim;
use App\Http\Requests;

class ProblemController extends Controller
{
    public function indexProblems()
    {
        $problems = Victim::orderBy('Victim_id','ASC')
             ->paginate(10);


         return view('elderly.indexProblems')->with('problems',$problems);
    }

}

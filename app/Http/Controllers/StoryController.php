<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Story;

class StoryController extends Controller
{
    public function about()
    {
        $historys = Story::ofDataType('history')->get();
        $goals = Story::ofDataType('goal')->get();
        $obligations = Story::ofDataType('obligation')->get();
        $roles = Story::ofDataType('role')->get();
        $visions = Story::ofDataType('vision')->get();

        return view('elderly.about')->with('historys',$historys)
        	->with('goals',$goals)
        	->with('obligations',$obligations)
        	->with('roles',$roles)
        	->with('visions',$visions);
    }
}

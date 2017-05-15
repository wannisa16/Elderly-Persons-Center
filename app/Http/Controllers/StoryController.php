<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
        $home = "";
        $about = "active";
        $donate = "";
        $contact = "";
        $pro = "";
        $borad="";


        return view('elderly.about')->with('historys',$historys)
        	->with('goals',$goals)
        	->with('obligations',$obligations)
        	->with('roles',$roles)
        	->with('visions',$visions)
            ->with('home', $home)
            ->with('donate', $donate)
            ->with('about', $about)
            ->with('contact', $contact)
            ->with('pro', $pro)
            ->with('borad', $borad);
    }


    public function editAbout(Request $request, $id)
    {
        $story = Story::find($id);
        $home = "";
        $about = "active";
        $donate = "";
        $contact = "";
        $pro = "";
        $borad="";


        return view('elderly.editAbout')->with('story',$story)
            ->with('home', $home)
            ->with('donate', $donate)
            ->with('about', $about)
            ->with('contact', $contact)
            ->with('pro', $pro)
            ->with('borad', $borad);
    }

    public function stroeAbout(Request $request, $id)
    {
        $story = Story::findOrFail($id);
        $story->content = $request->input('story');
        $story->save();

        return redirect('about');
    }
}

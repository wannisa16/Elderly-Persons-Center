<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Elderly;

class ElderlyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexElderly()
    {
    	$elderlies = Elderly::orderBy('id','ASC')
        	->paginate(10); 

        $home = "";
        $about = "";
        $donate = "";
        $contact = "";
        $elderly = "active";

    	return view('elderly.indexelderly')->with('elderlies',$elderlies)
            ->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly);
    }

    public function detailElderly($id)
    {
    	$elderly = Elderly::find($id); 

    	return view('elderly.detailelderly')->with('elderly',$elderly);
    }

    public function ageChart()
    {
        $elderly = Elderly::select('id', 'age', 'sex')->get();
        dd($elderly);

        return "kik";
    }

    public function criterionGraph()
    {
        $home = "";
        $about = "";
        $donate = "";
        $contact = "";
        $elderly = "active";

        return view('elderly.criterionGraph')->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly);
    }



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

        $home = "";
        $about = "";
        $donate = "active";
        $elderly = "";

        return view('elderly.indexDonate')->with('donors',$donors)
            ->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('elderly', $elderly);
    }

    public function addDonate()
    {
        $home = "";
        $about = "";
        $donate = "active";
        $contact = "";
        $elderly = "";

        return view('elderly.addDonate')->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly);
    }

    public function detailDonate($id)
    {
    	$donate = Donor::find($id);

    	return view('elderly.detailDonate')->with('donate',$donate);
    	
    }
}

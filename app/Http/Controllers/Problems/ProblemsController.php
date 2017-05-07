<?php

namespace App\Http\Controllers\Problems;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Helper;
use App\Victim;

class ProblemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $problems = Victim::orderBy('victim_id','ASC')
             ->paginate(10);
        $home = "";
        $about = "";
        $donate = "";
        $contact = "";
        $elderly = "active";
        $pro = "";

         return view('elderly.indexProblems')->with('problems',$problems)
            ->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly)
            ->with('pro', $pro);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $home = "";
        $about = "";
        $donate = "";
        $contact = "";
        $pro = "active";

        return view('elderly.addProblems')->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('pro', $pro);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $victim = Victim::find($id);
        

        $home = "";
        $about = "";
        $donate = "";
        $contact = "";
        $pro = "active";

        return view('elderly.problemsDetail')->with('victim', $victim)
            ->with('home', $home)        
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('pro', $pro);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

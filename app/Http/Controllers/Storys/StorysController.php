<?php

namespace App\Http\Controllers\Storys;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Story;

class StorysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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


        return view('elderly.about')->with('historys',$historys)
            ->with('goals',$goals)
            ->with('obligations',$obligations)
            ->with('roles',$roles)
            ->with('visions',$visions)
            ->with('home', $home)
            ->with('donate', $donate)
            ->with('about', $about)
            ->with('contact', $contact)
            ->with('pro', $pro);

        $home = "";
        $about = "active";
        $donate = "";
        $contact = "";
        $pro = "";

        return view('elderly.about')->with('donors',$donors)
            ->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('pro', $pro);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = Story::findOrFail($id);
        return view('elderly.editAbout', compact('about','id'));
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

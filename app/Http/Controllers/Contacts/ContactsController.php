<?php

namespace App\Http\Controllers\Contacts;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $addresss = Contact::ofTitle('address')
            ->get();
        $tels = Contact::ofTitle('tel')
            ->get();
        $emails = Contact::ofTitle('email')
            ->get();
        $facebooks = Contact::ofTitle('facebook')
            ->get();

        $home = "";
        $about = "";
        $donate = "";
        $contact = "active";
        $elderly = "";
        $pro = "";
        $borads="";

        return view('elderly.contact')->with('addresss',$addresss)
            ->with('tels',$tels)
            ->with('emails',$emails)
            ->with('facebooks',$facebooks)
            ->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly' ,$elderly)
            ->with('pro' ,$pro)
            ->with('borads', $borads);
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
        $contact = "active";
        $pro = "";
        $borads="";

        return view('elderly.contact')->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('pro', $pro)
            ->with('borads', $borads);
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
        $contacts = Contact::findOrFail($id);

        $home = "";
        $about = "";
        $donate = "";
        $contact = "active";
        $pro = "";
        $borads="";


        return view('elderly.editContact')->with('contacts',$contacts)
            ->with('id',$id)
            ->with('home', $home)
            ->with('donate', $donate)
            ->with('about', $about)
            ->with('contact', $contact)
            ->with('pro', $pro)
            ->with('borads', $borads);
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
        $contacts = Contact::findOrFail($id);
        $contacts->content = $request->input('contact');
        $contacts->save();

        return redirect('contacts');
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

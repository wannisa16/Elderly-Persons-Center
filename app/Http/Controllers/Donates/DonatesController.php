<?php

namespace App\Http\Controllers\Donates;

use Illuminate\Http\Request;

use App\Http\Requests\ImageUploadRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Donor;
use App\Image;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use View;

class DonatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donors = Donor::orderBy('id','ASC')
            ->paginate(10);
        $home = "";
        $about = "";
        $donate = "active";
        $contact = "";
        $pro = "";

        return view('elderly.indexDonate')->with('donors',$donors)
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
        $home = "";
        $about = "";
        $donate = "active";
        $contact = "";
        $pro = "";

        return view('elderly.addDonate')->with('home', $home)
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
        $donate = new Donor;
        $donate->d_name = $request->input('name');
        $donate->d_surname = $request->input('surname');
        $donate->d_tel = $request->input('tel');
        $donate->d_email = $request->input('email');
        $donate->d_detail = $request->input('detail');
        $donate->d_number = $request->input('number');
        $donate->d_village = $request->input('village');
        $donate->d_alley = $request->input('alley');
        $donate->d_lane = $request->input('lane');
        $donate->d_road = $request->input('road');
        $donate->d_subdistrict = $request->input('subDistrict');
        $donate->d_district = $request->input('district');
        $donate->d_province = $request->input('province');
        $donate->d_postal = $request->input('postal');
        $object1 = $request->input('object1');
        $object2 = $request->input('object2');
        $donate->d_object = $object1." ".$object2;
        $image = $request->file('photo');
        $image->move(public_path("/images"), $image->getClientOriginalName());
        $donate->d_picture = "images/".$image->getClientOriginalName();
        $donate->save();
        return redirect('donates');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donor = Donor::find($id);
        $home = "";
        $about = "";
        $donate = "active";
        $contact = "";
        $elderly = "";
        $pro = "";

        return view('elderly.detailDonate')->with('donor',$donor)
            ->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly)
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
        $donor = Donor::findOrFail($id);
        
        $home = "";
        $about = "";
        $donate = "active";
        $contact = "";
        $pro = "";

        return view('elderly.editDonate')->with('id',$id)
            ->with('donor',$donor)
            ->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('pro', $pro);    
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
        $donor = Donor::findOrFail($id);
        $donor->d_name = $request->input('name');
        $donor->d_surname = $request->input('surname');
        $donor->d_tel = $request->input('tel');
        $donor->d_email = $request->input('email');
        $donor->d_detail = $request->input('detail');
        $donor->d_number = $request->input('number');
        $donor->d_village = $request->input('village');
        $donor->d_alley = $request->input('alley');
        $donor->d_lane = $request->input('lane');
        $donor->d_road = $request->input('road');
        $donor->d_subdistrict = $request->input('subDistrict');
        $donor->d_district = $request->input('district');
        $donor->d_province = $request->input('province');
        $donor->d_postal = $request->input('postal');
        $donor->d_object = $request->input('object');
        $image = $request->file('photo');
        $image->move(public_path("/images"), $image->getClientOriginalName());
        $donor->d_picture = "images/".$image->getClientOriginalName();
        $donor->save();
        return redirect('donates');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Donor::destroy($id);
        return redirect('donates');
    }
}

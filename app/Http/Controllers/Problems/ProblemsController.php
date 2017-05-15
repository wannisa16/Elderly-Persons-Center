<?php

namespace App\Http\Controllers\Problems;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Helper;
use App\Victim;
use Illuminate\Support\Facades\View;

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
        $elderly = "";
        $pro = "active";
        $borads="";

         return view('elderly.indexProblems')->with('problems',$problems)
            ->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly)
            ->with('pro', $pro)
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
        $contact = "";
        $pro = "active";
        $borads ="";

        return view('elderly.addProblems')->with('home', $home)
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
        $rules = [
            'v_name' => 'required',
            'h_name' => 'required',
        ];
        $messages = [
            'v_name.required' => '*** กรุณาใส่ชื่อผู้ประสบปัญหา',
            'h_name.required' => '*** กรุณาใส่ชื่อของผู้แจ้ง (ชื่อของท่าน)',
        ];

        $validator=Validator::make($request->all(),$rules,$messages);

        if($validator->passes() ){
            $helper = new Helper;
            $helper->h_name = $request->input('h_name');
            $helper->h_surname = $request->input('h_surname');
            $helper->h_tel = $request->input('h_tel');
            $helper->h_email = $request->input('h_email');
            $helper->save();

            $victim = new Victim;
            $victim->helperID = $helper->helper_id;
            $victim->v_name = $request->input('v_name');
            $victim->v_surname = $request->input('v_surname');
            $victim->v_idcard = $request->input('v_idcard');
            $victim->v_whyno = $request->input('v_whyno');
            $victim->v_birthday = $request->input('v_birthday');
            $victim->v_age = $victim->age;
            $victim->v_sex = $request->input('v_sex');
            $victim->v_race = $request->input('v_race');
            $victim->v_nationality = $request->input('v_nationality');
            $victim->v_religion = $request->input('v_religion');
            $victim->v_status = $request->input('v_status');
            $victim->v_career = $request->input('v_career');
            $victim->v_income = $request->input('v_income');
            $victim->v_source = $request->input('v_source');
            $victim->v_source = $request->input('v_specify');
            $victim->v_housenumber = $request->input('v_housenumber');
            $victim->v_villageno = $request->input('v_villageno');
            $victim->v_alley = $request->input('v_alley');
            $victim->v_alleyway = $request->input('v_alleyway');
            $victim->v_road = $request->input('v_road');
            $victim->v_district = $request->input('v_canton');
            $victim->v_district = $request->input('v_district');
            $victim->v_province = $request->input('v_province');
            $victim->v_postcode = $request->input('v_postcode');
            $victim->v_situation = "รอการช่วยเหลือ";
            $victim->save();

            return redirect('problems/'.$victim->victim_id);
        }else{
            return redirect('problems/create')->withErrors($validator->messages());
        }
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

        $helper = Helper::find($victim->helperID);


        $home = "";
        $about = "";
        $donate = "";
        $contact = "";
        $pro = "active";
        $borads ="";

        return view('elderly.problemsDetail')->with('victim',$victim)
            ->with('helper',$helper)
            ->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('pro', $pro)
            ->with('borads', $borads);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $victim = Victim::findOrFail($id);
        $helper = Helper::findOrFail($id);

        $home = "";
        $about = "";
        $donate = "";
        $contact = "";
        $pro = "active";
        $borads ="";

        return view('elderly.editProblems')->with('victim', $victim)
            ->with('helper',$helper)
            ->with('id',$id)
            ->with('home', $home)        
            ->with('about', $about)
            ->with('donate', $donate)
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
        $victim = Victim::findOrFail($id);
        $victim->v_name = $request->input('v_name');
        $victim->v_surname = $request->input('v_surname');
        $victim->v_idcard = $request->input('v_idcard');
        $victim->v_whyno = $request->input('v_whyno');
        $victim->v_birthday = $request->input('v_birthday');
        $victim->v_age = $request->input('v_age');
        $victim->v_sex = $request->input('v_sex');
        $victim->v_race = $request->input('v_race');
        $victim->v_nationality = $request->input('v_nationality');
        $victim->v_religion = $request->input('v_religion');
        $victim->v_status = $request->input('status');
        $victim->v_career = $request->input('v_career');
        $victim->v_income = $request->input('v_income');
        $victim->v_source = $request->input('source');
        $victim->v_housenumber = $request->input('v_housenumber');
        $victim->v_villageno = $request->input('v_villageno');
        $victim->v_alley = $request->input('v_alley');
        $victim->v_alleyway = $request->input('v_alleyway');
        $victim->v_road = $request->input('v_road');
        $victim->v_district = $request->input('v_district');
        $victim->v_province = $request->input('v_province');
        $victim->v_postcode = $request->input('v_postcode');
        $victim->v_situation = $request->input('v_situation');
        $victim->save();

        $helper = Helper::findOrFail($id);
        $helper->h_name = $request->input('h_name');
        $helper->h_surname = $request->input('h_surname');
        $helper->h_tel = $request->input('h_tel');
        $helper->h_email = $request->input('h_email');
        $helper->save();

        return redirect('problems');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Victim::destroy($id);
        Helper::destroy($id);        
        return redirect('problems');

    }
}

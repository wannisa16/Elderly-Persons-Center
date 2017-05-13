<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageUploadRequest;
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
        $pro = "";

    	return view('elderly.indexElderly')->with('elderlies', $elderlies)
            ->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly)
            ->with('pro', $pro);
    }

    public function detailElderly($id)
    {
    	$elderly = Elderly::find($id); 

    	return view('elderly.detailelderly')->with('elderly',$elderly);
    }

    public function ageChart()
    {
        $elderlies = Elderly::select('id', 'age', 'sex')->get();

        $total = [];
        $minAge = 6;
        $maxAge = 10;

        for ($i = $minAge; $i < $maxAge; $i++) { 
            $total[$i . 'male'] = 0;
            $total[$i . 'female'] = 0;
        }

        foreach ($elderlies as $elderly) {
            $age = $elderly->age;
            $length = 10;
            $group = ceil($age / $length);

            if($elderly->sex == "ผู้ชาย") {
                if($elderly->age < 90) {
                   $total[$group . 'male']++; 
               }else{
                    $total['9male']++;
               }
                
            } elseif($elderly->sex == "ผู้หญิง") {
                if($elderly->age < 90) {
                   $total[$group . 'female']++; 
               }else{
                    $total['9female']++;
               }
            }
        }


        
        $home = "";
        $about = "";
        $donate = "";
        $contact = "";
        $elderly = "active";
        $pro = "";
        

        return view('elderly.ageChart')->with('elderlies', $elderlies)
            ->with('total', $total)
            ->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly)
            ->with('pro', $pro);
    }

    public function criterionGraph()
    {   
        $elderlies = Elderly::select('id', 'grade')->get();
        $total['A'] = 0;
        $total['B'] = 0;
        $total['C'] = 0;

        foreach ($elderlies as $elderly) {
            $grade = $elderly->grade;


            if($grade == "A (ช่วยเหลือตัวเองได้)") {
                $total['A']++; 
            }elseif($grade == "B (พึ่งพาอุปกรณ์ในการดำเนินชีวิต)") {
                $total['B']++; 
            }elseif($grade == "C (ผู้สูงอายุที่ต้องการการดูแล)") {
                $total['C']++; 
            }
        }

        $home = "";
        $about = "";
        $donate = "";
        $contact = "";
        $elderly = "active";
        $pro = "";

        return view('elderly.gradeChart')->with('total', $total)
            ->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly)
            ->with('pro', $pro);
    }

    public function addElderly(Request $request)
    {
        $elderly = new Elderly;
        $elderly->name = $request->input('name');
        $elderly->surname = $request->input('surname');
        $pdf = $request->file('pdf');
        $pdf->move(public_path("/data"), $pdf->getClientOriginalName());
        $elderly->file = "data/".$pdf->getClientOriginalName();
        $elderly->brithday = $request->input('brithday');
        $elderly->age = $elderly->age;
        $elderly->sex = $request->input('sex');
        $elderly->education = $request->input('education');
        $elderly->occupation = $request->input('occupation');
        $elderly->sex = $request->input('sex');
        $elderly->child = $request->input('child');
        $elderly->county = $request->input('county');
        $elderly->grade = $request->input('grade');
        $elderly->reason = $request->input('reason');
        $elderly->housenumber = $request->input('housenumber');
        $elderly->villageno = $request->input('villageno');
        $elderly->alley = $request->input('alley');
        $elderly->alleyway = $request->input('alleyway');
        $elderly->road = $request->input('road');
        $elderly->district = $request->input('canton');
        $elderly->district = $request->input('district');
        $elderly->province = $request->input('province');
        $elderly->postcode = $request->input('postcode');
        $elderly->save();

        $home = "";
        $about = "";
        $donate = "";
        $contact = "";
        $elderly = "active";
        $pro = "";

        return redirect('indexElderlies');
    }

    public function elderlyGraph()
    {

        $home = "";
        $about = "";
        $donate = "";
        $contact = "";
        $elderly = "active";
        $pro = "";

        return view('elderly.elderlyGraph')->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly)
            ->with('pro', $pro);
    }
    public function elderlyForm()
    {
        $home = "";
        $about = "";
        $donate = "";
        $contact = "";
        $elderly = "active";
        $pro = "";

        return view('elderly.addElderly')->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly)
            ->with('pro', $pro);

    }

    public function editElderly()
    {
        $home = "";
        $about = "";
        $donate = "";
        $contact = "";
        $elderly = "active";
        $pro = "";

        return view('elderly.editElderly')->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly)
            ->with('pro', $pro);
    }
}

}
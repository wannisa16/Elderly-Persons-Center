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
        $pro = "";

    	return view('elderly.indexelderly')->with('elderlies', $elderlies)
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
        $total['D'] = 0;

        foreach ($elderlies as $elderly) {
            $grade = $elderly->grade;


            if($grade == "A (ทำงานได้)") {
                $total['A']++; 
            }elseif($grade == "B (ช่วยเหลือตนเองและผู้อื่นได้)") {
                $total['B']++; 
            }elseif($grade == "C (ช่วยเหลือตนเองได้เท่านั้น)") {
                $total['C']++; 
            }elseif($grade == "D (ช่วยเหลือตนเองไม่ได้)") {
                $total['D']++; 
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

    public function addElderly()
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
}


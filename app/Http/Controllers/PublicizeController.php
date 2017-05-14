<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageUploadRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Publicize;
use App\Image;
use View;

class PublicizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexNew()
    {
        $publicizes = Publicize::ofDataType('publicize')
            ->with('Images')
            ->orderBy('publicizeID','DESC')
            ->limit(3)
            ->get();

        $activities = Publicize::ofDataType('activity')
            ->with('Images')
            ->orderBy('publicizeID','DESC')
            ->limit(3)
            ->get();


        $home = "active";
        $about = "";
        $donate = "";
        $contact = "";
        $elderly = "";
        $pro = "";

        return view('elderly.home')->with('publicizes', $publicizes)
            ->with('activities', $activities)
            ->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly)
            ->with('pro', $pro);
    }

    public function show()
    {

        return view('elderly.publicizes');
    }

    public function indexPublicizes()
    {
        $publicizes = Publicize::ofDataType('publicize') 
            ->with('Images')
            ->orderBy('publicizeID','DESC')
            ->paginate(9);

        $home = "active";
        $about = "";
        $donate = "";
        $contact = "";
        $elderly = "";
        $pro = "";

        return view('elderly.publicizes')->with('publicizes', $publicizes)
            ->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly)
            ->with('pro', $pro);
    }

    public function addForm()
    {
        $home = "active";
        $about = "";
        $donate = "";
        $contact = "";
        $elderly = "";
        $pro = "";

        return view('elderly.addpublicizes')->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly)
            ->with('pro', $pro);
    }

    public function addPublicizes(Request $request )
    {
        $publicizes = new Publicize;
        $publicizes->title = Input::get('title');
        $publicizes->content = Input::get('content');
        $publicizes->dataType = "publicize";
        $publicizes->save();

        $id=$publicizes->publicizeID;
        
        $images = new Image;
        $image = $request->file('image');
        $image->move(public_path("/images"), $id.".png");
        $images->imagename = "images/".$id.".png";
        $images->contentID = $id;
        $images->save();
        
        return Redirect::to('publicizes');
    }

    public function indexactivity()
    {
        $activities = Publicize::ofDataType('activity') 
            ->orderBy('publicizeID','DESC')
            ->paginate(9);
       
        $home = "active";
        $about = "";
        $donate = "";
        $contact = "";
        $elderly = "";
        $pro = "";

        return view('elderly.indexActivity')->with('activities',$activities)
            ->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly)
            ->with('pro', $pro);
    }

    public function formActivity()
    {
        $home = "";
        $about = "";
        $donate = "";
        $contact = "";
        $pro = "active";

        return view('elderly.addActivity')->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('pro', $pro);
    }

    public function addActivity(Request $request)
    {   
        $publicizes = new Publicize;
        $publicizes->title = $request->input('title');

        $publicizes->content = $request->input('content');
        $publicizes->dataType = "activity";
        $publicizes->save();
        $id=$publicizes->publicizeID;
        
        foreach(Input::file("photo") as $file) {
            $images = new Image;
            $file->move(public_path("/images"), $file->getClientOriginalName());
            $images->imagename = "images/".$file->getClientOriginalName();
            $images->contentID = $id;
            $images->save();
        }

        return Redirect::to('indexActivity');
    }
    

    public function detailActivity($id)
    {
        $activity = Publicize::find($id);
        $images = Image::ofImage($activity->publicizeID)->get();

        $home = "active";
        $about = "";
        $donate = "";
        $contact = "";
        $elderly = "";
        $pro = "";

        return view('elderly.detailActivity')->with('activity',$activity)
            ->with('images', $images)
            ->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly)
            ->with('pro', $pro);

    }

    public function detailPublicize($id)
    {
        $publicize = Publicize::find($id);
        $images = Image::ofImage($publicize->publicizeID)->get();
        
        $home = "active";
        $about = "";
        $donate = "";
        $contact = "";
        $elderly = "";
        $pro = "";

        return view('elderly.detailPublicizes')->with('publicize',$publicize)
            ->with('images', $images)
            ->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly)
            ->with('pro', $pro);

    }
    public function editForm($id)
    {
        $story = Publicize::find($id);
        $images = Image::ofImage($story->publicizeID)->get();

        $photo = "";

        foreach ($images as $image) {

            $photo = $image->imagename.",".$photo;
        }


        $home = "active";
        $about = "";
        $donate = "";
        $contact = "";
        $elderly = "";
        $pro = "";

        return view('elderly.editActivity')->with('story',$story)
            ->with('photo', $photo)
            ->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly)
            ->with('pro', $pro);

    }

    public function editActivity(Request $request, $id)
    {
        $activity = Publicize::find($id);
        $activity->title = $request->input('title');
        $activity->content = $request->input('content');
        $activity->dataType = "activity";
        $activity->save();


        foreach(Input::file("photo") as $file) { 
            if($file == " "){

            }elseif($file != "" ){
                $images = new Image;
                $file->move(public_path("/images"), $file->getClientOriginalName());
                $images->imagename = "images/".$file->getClientOriginalName();
                $images->contentID = $id;
                $images->save();
            }     
        } 
        return Redirect::to('indexActivity');
    }

    public function deleteActivity($id) 
    {
        $activity = Publicize::find($id);
        $activity->delete();

        $images = Image::ofImage($activity->publicizeID)->get();

        foreach ($images as $image) {
            $image->delete();
        }

        return Redirect::to('indexActivity');
    }
}
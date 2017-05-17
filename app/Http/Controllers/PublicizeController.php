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
use Validator;

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
            ->orderBy('publicizeID','DESC')
            ->limit(3)
            ->get();


        $home = "active";
        $about = "";
        $donate = "";
        $contact = "";
        $elderly = "";
        $pro = "";
        $borads="";

        return view('elderly.home')->with('publicizes', $publicizes)
            ->with('activities', $activities)
            ->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly)
            ->with('borads', $borads)
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
        $borads="";

        return view('elderly.publicizes')->with('publicizes', $publicizes)
            ->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly)
            ->with('borads', $borads)
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
        $borads="";

        return view('elderly.addpublicizes')->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly)
            ->with('borads', $borads)
            ->with('pro', $pro);
    }

    public function addPublicizes(Request $request )
    {
        $rules = [
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image'
        ];
        $messages = [
            'title.required' => '*** กรุณาใส่ชื่อเรื่องกิจกรรม',
            'content.required' => '*** กรุณาใส่รายละเอียดของกิจกรรม',
            'image.required' => '*** กรุณาเลือกรูปภาพ',
            'image.image' => '*** กรุณาเลือกไฟล์รูปภาพ'
        ];

        $validator=Validator::make($request->all(),$rules,$messages);

        if($validator->passes() ){

        $publicizes = new Publicize;
        $publicizes->title = Input::get('title');
        $publicizes->content = Input::get('content');
        $publicizes->dataType = "publicize";
        $publicizes->save();

        $id=$publicizes->publicizeID;

        $image = $request->file('image');
        $images = new Image;
        $image->move(public_path("/images"), $id.".png");
        $images->imagename = "images/".$id.".png";
        $images->contentID = $id;
        $images->save();
        
        
        return Redirect::to('publicizes');
        }else{
            return Redirect::to('addPublicizes')
            ->withErrors($validator->messages());
        }
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
        $borads ="";

        return view('elderly.indexActivity')->with('activities',$activities)
            ->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly)
            ->with('borads', $borads)
            ->with('pro', $pro);
    }

    public function formActivity()
    {
        $home = "active";
        $about = "";
        $donate = "";
        $contact = "";
        $pro = "";
        $borads ="";

        return view('elderly.addActivity')->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('borads', $borads)
            ->with('pro', $pro);
    }

    public function addActivity(Request $request)
    {
        $rules = [
            'title' => 'required',
            'content' => 'required',
        ];
        $messages = [
            'title.required' => '*** กรุณาใส่ชื่อเรื่องกิจกรรม',
            'content.required' => '*** กรุณาใส่รายละเอียดของกิจกรรม'
        ];

        $validator=Validator::make($request->all(),$rules,$messages);

        if($validator->passes() ){
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
        }else{
            return Redirect::to('addActivity')
            ->withErrors($validator->messages());
        }

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
        $borads="";

        return view('elderly.detailActivity')->with('activity',$activity)
            ->with('images', $images)
            ->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly)
            ->with('borads', $borads)
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
        $borads ="";

        return view('elderly.detailPublicizes')->with('publicize',$publicize)
            ->with('images', $images)
            ->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly)
            ->with('borads', $borads)
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
        $borads ="";

        return view('elderly.editActivity')->with('story',$story)
            ->with('photo', $photo)
            ->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly)
            ->with('borads', $borads)
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

    public function editFormPublicizes(Request $request, $id)
    {

        $publicize = Publicize::find($id);
        $photos = Image::ofImage($id)->get();

        foreach ($photos as $photo) {
            $image= $photo;
        }

        
        $home = "active";
        $about = "";
        $donate = "";
        $contact = "";
        $elderly = "";
        $pro = "";
        $borads ="";

        return view('elderly.editPublicizes')->with('publicize',$publicize)
            ->with('image', $image)
            ->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly)
            ->with('pro', $pro)
            ->with('borads', $borads);
    }

    public function editPublicizes(Request $request, $id)
    {
        $rules = [
            'title' => 'required',
            'content' => 'required',
        ];
        $messages = [
            'title.required' => '*** กรุณาใส่ชื่อเรื่องกิจกรรม',
            'content.required' => '*** กรุณาใส่รายละเอียดของกิจกรรม',
            'photo.required' => '*** กรุณาเลือกรูปภาพ',
        ];

        $validator=Validator::make($request->all(),$rules,$messages);

        if($validator->passes() ){
            $publicize = Publicize::find($id);
            $publicize->title = $request->input('title');
            $publicize->content = $request->input('content');
            $publicize->dataType = "publicize";
            $publicize->save();
            $id=$publicize->publicizeID;

            $image = $request->file('photo');

            if($image == ""){

            }else{
                $images = new Image;
                $image->move(public_path("/images"), $image->getClientOriginalName());
                $images->imagename = "images/".$image->getClientOriginalName();
                $images->contentID = $id;
                $images->save();
            }

            return Redirect::to('publicizes');
        }else{
            return Redirect::to('editFormPublicizes/'.$id)
            ->withErrors($validator->messages());
        }

    }

    public function deletePublicize($id) 
    {
        $publicize = Publicize::find($id);
        $publicize->delete();

        $images = Image::ofImage($id)->get();
        
        foreach ($images as $image) {
            $image->delete();
        }

        return Redirect::to('publicizes');
    }

    public function deleteImage($id)
    {
        $image = Image::find($id);
        $story = $image->contentID;
        $image->delete();

        return Redirect::to('publicizes');
    }
}
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

        $ativities = Publicize::ofDataType('ativity')
            ->with('Images')
            ->orderBy('publicizeID','DESC')
            ->limit(3)
            ->get();

        return view('elderly.home',compact('publicizes','ativities'));
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

        return view('elderly.publicizes',compact('publicizes'));
    }

    public function addForm()
    {
        return view('elderly/addpublicizes');
    }

    public function addPublicizes(Request $request )
    {
        $publicizes = new Publicize;
        $publicizes->title = Input::get('title');
        $publicizes->content = Input::get('content');
        $publicizes->dataType = "publicize";
        $publicizes->save();

        $a=$publicizes->publicizeID;
    
        return Redirect::to('publicizes');

    }

}

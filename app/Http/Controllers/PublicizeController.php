<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Publicize;
use App\Image;

class PublicizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexnew()
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

}

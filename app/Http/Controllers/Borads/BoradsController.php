<?php

namespace App\Http\Controllers\Borads;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Question;
use App\Questioner;
use App\Comment;

class BoradsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::orderBy('id','ASC')
             ->paginate(10); 


        $home = "";
        $about = "";
        $donate = "";
        $contact = "";
        $elderly = "";
        $borad = "active";
        $pro = "";

         return view('elderly.indexBorad')->with('questions', $questions)
            ->with('home', $home)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
            ->with('elderly', $elderly)
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
        $donate = "";
        $contact = "";
        $elderly = "";
        $borads = "active";
        $pro = "";

        return view('elderly.addBoard')->with('home', $home)
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
        $questioner = new Questioner;
        $questioner->name = $request->input('name');
        $questioner->level = $request->input('level');
        $questioner->save();
        $question = new Question;
        $question->subject = $request->input('subject');
        $question->detail = $request->input('detail');
        $question->questioner_id = $questioner->id;
        $question->save();
        
        return redirect('borads');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booard = Question::find($id);
        $questioner = Questioner::find($booard->questioner_id);
        $comments = Comment::ofComment($booard->id);
        $comments_count = $comments->count();
        
        $home = "";
        $about = "";
        $donate = "";
        $contact = "";
        $elderly = "";
        $borads = "active";
        $pro = "";

        return view('elderly.detailBoard')->with('home', $home)
            ->with('comments', $comments->get())
            ->with('comments_count', $comments_count)
            ->with('booard', $booard)
            ->with('questioner', $questioner)
            ->with('about', $about)
            ->with('donate', $donate)
            ->with('contact', $contact)
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
        $borad = Question::findOrFail($id);
        $questioner = Questioner::find($borad->questioner_id);
        
        $home = "";
        $about = "";
        $donate = "active";
        $contact = "";
        $pro = "";

        return view('elderly.editBorad')->with('id',$id)
            ->with('questioner',$questioner)
            ->with('borad',$borad)
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
        $questioner = Questioner::find($id);
        $questioner->name = $request->input('name');
        $questioner->save();

        $question = Question::findOrFail($id);
        
        $question->subject = $request->input('subject');
        $question->detail = $request->input('detail');
        $question->questioner_id = $questioner->id;
        $question->save();
        
        return redirect('borads');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Question::destroy($id);
        Questioner::destroy($id);

        return redirect('borads');
    }
}

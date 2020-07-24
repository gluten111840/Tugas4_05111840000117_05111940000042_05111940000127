<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Question;
use App\User;
use App\Answer;
use Illuminate\Support\Facades\Auth;

class ControllerAnswer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_user)
    {
        $answers = Answer::where('answers.id_user',$id_user)
                    ->join('questions','questions.id','=','answers.id_question')
                    ->select('answers.*','questions.title')
                    ->get();
        // dd($answers);
        return view('answer.index',compact('answers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        Answer::create([
            'answer' => $request->answer,
            'id_question' => $request->id_question,
            'id_user' => Auth::user()->id
        ]);

        return redirect()->route('home.question.show', $request->id_question);
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
        $answer = Answer::where('id',$id)->first();

        return view('answer.edit', compact('answer'));
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
        Answer::where('id', $request->id)->update([
            'answer' => $request->answer
        ]);
        return redirect()->route('home.question.show', $request->id_question);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Answer::find($id)->delete();

        return redirect()->back();
    }
}

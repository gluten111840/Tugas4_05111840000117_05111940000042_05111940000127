<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Question;
use App\User;
use App\Answer;
use Illuminate\Support\Facades\Auth;

class controller_question extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('question.index');
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
        Question::create([
            'title' => $request->title,
            'question' => $request->question,
            'id_user' => Auth::user()->id
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = DB::table('questions')
                    ->join('users', 'users.id', '=', 'questions.id_user')
                    ->select('users.username', 'questions.id',
                    'questions.title', 'questions.question', 
                    'questions.created_at', 'questions.updated_at',
                    'users.id as id_user')
                    ->where('questions.id',$id)
                    ->first();
        $answers = Answer::where('id_question',$id)
                            ->join('users','users.id','=','answers.id_user')
                            ->select('users.*','answers.*','users.id as user_id')
                            ->get();
        // dd($question);
        return view('question.show', compact('question','answers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $questions = Question::find($id);
        return view('question.edittt', compact('questions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Question::where('id', $request->id)->update([
            'title' => $request->title,
            'question' => $request->question
        ]);
        return redirect()->route('home.tampil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function tampil()
    {
        $questions = DB::table('questions')
        ->join('users', 'users.id', '=', 'questions.id_user')
        ->select('users.username', 'users.id',
            'questions.title', 'questions.question', 
            'questions.created_at', 'questions.updated_at',
            'users.id as id_user')
        ->orderBy('created_at','desc')
        ->paginate(5);
        return view('question.homeee', compact('questions'))->with('questions',$questions);
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $questions = DB::table('questions')
        ->join('users', 'users.id', '=', 'questions.id_user')
        ->where('title','like',"%".$search."%")
        ->paginate(5);
        return view('question.search',['questions' => $questions]);
    }

    public function delete($id)
    {
        $questions = Question::find($id);
        $questions->delete();
        return redirect()->route('home.tampil');
    }

    public function showall()
    {
        $questions = Question::where('id_user',Auth::user()->id)->get();

        return view('question.showall',compact('questions'));
    }

    public function myquestion()
    {
        $myquestion = DB::table('questions')
        ->join('users', 'users.id', '=', 'questions.id_user')
        ->select('users.username', 'users.id',
            'questions.title', 'questions.question', 
            'questions.created_at', 'questions.updated_at')
        ->orderBy('created_at','desc')
        ->paginate(5);
        return view('question.myquestion', compact('myquestion'))->with('questions',$myquestion);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;

class controller_user extends Controller
{

    
    public function getLogin()
    {
        return view("user/login");
    }

    public function postLogin(Request $request)
    {
        if(!Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            return redirect()->back();
        }
        // dd(Auth::user()->id);
        return redirect()->route('tampil');
    }

   

    public function getRegister()
    {
        return view("user/register");
    }

    public function postRegister(Request $request)
    {
        $this->validate($request,[
            'username' => 'required|min:4',
            'password' => 'required|min:6|confirmed'
        ]);
        $user = User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password)
        ]);

        Auth::loginUsingId($user->id);
        
     
        // User Login

        return redirect()->route('tampil');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     //$users = DB::select('select * from users', [1]);
    //     // dd($users);

    //     // $users = User::all();
    //     // $users = User::where('id','=','1')->first();
    //     // return view('user.index', ['users' => $users]);
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }

}
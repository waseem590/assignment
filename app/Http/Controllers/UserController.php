<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class UserController extends Controller
{
    public function index(){
        // return view('login');
    }

    public function signup(Request $request)
    {
        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        session()->flash('message','Registered Successfully');
        return redirect('/login');
    }
    public function login(Request $request)
    {
        
        return redirect()->route('feedlisting');
    }
    public function feedlist(){
        return view('feedlisting');
    }
    public function createpost(){
        
        return view('createpost');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();    
        return view('users.index',compact('users'));
    }
    public function show($id)
    {
        $user = User::find($id);
        $blogs = $user->blogs;
        return view('home',compact('user','blogs'));
    }

    public function follow($id) {
        $user = User::find($id);
        Auth::user()->following()->attach($user);
        return redirect()->back();
    }

    public function unfollow($id) {
        $user = User::find($id);
        Auth::user()->following()->detach($user);
        return redirect()->back();
    }

}

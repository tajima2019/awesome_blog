<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Auth;

class BlogController extends Controller
{
    public function store()
    {
        $blog = Auth::user()->blogs()->create([     //ここらへんがよくわからない
            'content' => request()->content
        ]);

        return redirect()->back(); 
    }

    public function all()
    {
        $blogs = Blog::all();
        return $blogs;
    }

    public function delete($id)
    {
        Blog::find($id)->delete();

        return redirect()->back();
    }
}





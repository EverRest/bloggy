<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Post;

class SearchController extends Controller
{
    /**
     * Display a listing of the search.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $cats = Category::all();

        return view('posts.index')
            ->with('user', $user)
            ->with('cats', $cats);
    }

    /**
     * Searching and show a list of the result.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'search'=> 'required|max:100',
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }

        $posts = Post::where('title', 'LIKE', '%' . $request->search . '%')
            ->orWhere('content', 'LIKE', '%' . $request->search . '%')
            ->get();

        return view('search.index')->with('posts', $posts);
    }
}

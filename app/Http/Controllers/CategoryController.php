<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @param  integer  $id
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $cat = Category::find($id);
        $cats = Category::all();

        $posts = $cat->posts;

        foreach ($posts as $k => $post) {
            $posts[$k]['author'] = User::find($post->user_id);
        }

        return view('categories.index')
            ->with('posts', $posts)
            ->with('category', $cat)
            ->with('cats', $cats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'title' => 'required|max:100',
            'user_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/category/create')
                ->withInput()
                ->withErrors($validator);
        }

        $cat = new Category;
        $cat->title = $request->title;
        $cat->user_id = $request->user_id;
        $cat->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @param  integer  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category, $id)
    {
//        $category
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}

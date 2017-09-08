<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\User;
use App\Tag;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);
        $cats = Category::all();

        return view('posts.index')
            ->with('user', $user)
            ->with('cats', $cats);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function all()
//    {
//        $user = User::find(Auth::user()->id);
//        $cats = Category::all();
//
//        return view('posts.index')
//            ->with('user', $user)
//            ->with('cats', $cats);
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::all();
        return view('posts.create')->with('cats', $cats);
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
            'title' => 'required|unique:posts|max:100',
            'category' => 'required',
            'user_id'=> 'required',
            'tags' => 'required',
            'photo' => 'required',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/post/create')
                ->withInput()
                ->withErrors($validator);
        }

        $post = new Post;
        $post->title = $request->title;
        $post->category_id = $request->category;
        $post->tags = $request->tags;
        $post->user_id = $request->user_id;
        $post->content = $request->content;

        $post->save();


        if (!empty($request->file('photo'))) {
            $imageName = $post->id . '.' .
                strtolower($request->file('photo')->getClientOriginalExtension());

            $request->file('photo')->move(
                base_path() . '/public/images/posts/', $imageName
            );

            $post->picture = '/images/posts/' . $imageName;
            $post->save();
        }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $author = $post->user;
        $posts = $author->posts;
        $recent_posts = Category::find($post->category_id)->posts;
        $cats = Category::all();

        foreach ($recent_posts as $k => $recent_post) {
            $recent_posts[$k]['author'] = User::find($recent_post->user_id);
        }

        foreach ($posts as $key => $p) {
            if ($p['id'] == $post['id'] && $p['user_id'] == $author->id) {
                $prev = isset($posts[$key - 1])? $posts[$key - 1] : '';
                $next = isset($posts[$key + 1])? $posts[$key + 1] : '';
            }
        }

        return view('posts.show')
            ->with('post', $post)
            ->with('user', $author)
            ->with('prev', $prev)
            ->with('cats', $cats)
            ->with('recent_posts', $recent_posts)
            ->with('next', $next);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param   $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $cats = Category::all();
        if(!empty($post)) {
            return view('posts.edit')->with('post', $post)->with('cats', $cats);
        } else {
            return redirect('/');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required|max:100',
            'category' => 'required',
            'post_id' => 'required',
            'user_id' => 'required',
            'tags' => 'required',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/post/edit/'.$request->post_id)
                ->withInput()
                ->withErrors($validator);
        }

        $post = Post::findOrFail($request->post_id);


        $post->title = $request->title;
        $post->category_id = $request->category;
        $post->user_id = $request->user_id;
        $post->tags = $request->tags;
        $post->content = $request->content;
        $post->save();

        if ($request->photo) {
            $imageName = $post->id . '.' .
                strtolower($request->file('photo')->getClientOriginalExtension());

            $request->file('photo')->move(
                base_path() . '/public/images/posts/', $imageName
            );

            $post->picture = '/images/posts/' . $imageName;
            $post->save();
        }

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  integer  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect();
    }
}

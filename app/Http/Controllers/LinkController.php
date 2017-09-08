<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Link::where('user_id', Auth::user()->id)->get();
        return view('links.index')->with('links', $links);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('links.create');
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
            'link' => 'required|unique:links|max:255',
            'user_id'=> 'required',
            'name'=> 'required|max:255',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/post/create')
                ->withInput()
                ->withErrors($validator);
        }

        $link = new Link;
        $link->link = $request->link;
        $link->name = $request->name;
        $link->user_id = $request->user_id;
        $link->description = $request->description;

        $link->save();

        return redirect('/link');
    }

    /**
     * Display all the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $links = Link::all();
        return view('links.all')->with('links', $links);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit(Link $link)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Link $link)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  integer  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'user_id'=> 'required',
            'link_id'=> 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/link')
                ->withInput()
                ->withErrors($validator);
        }

        $link = Link::find($request->link_id);
        $link->destroy($id);

        return redirect('/link');
    }
}

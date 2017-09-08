<?php

namespace App\Http\Controllers;

use App\Quote;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotes = Quote::all();
        return view('quotes.index')->with('quotes', $quotes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quotes.create');
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
            'author' => 'required|max:100',
            'user_id'=> 'required',
            'photo' => 'required',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/quote/create')
                ->withInput()
                ->withErrors($validator);
        }

        $quote = new Quote;
        $quote->author = $request->author;
        $quote->user_id = $request->user_id;
        $quote->content = $request->content;

        $quote->save();

        if (!empty($request->file('photo'))) {
            $imageName = $quote->id . '.' .
                strtolower($request->file('photo')->getClientOriginalExtension());

            $request->file('photo')->move(
                base_path() . '/public/images/quotes/', $imageName
            );

            $quote->photo = '/images/quotes/' . $imageName;
            $quote->save();
        }

        return redirect('/quote');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function show(Quote $quote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function edit(Quote $quote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quote $quote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quote  $quote
     * @param  integer  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'user_id'=> 'required',
            'quote_id'=> 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/quote')
                ->withInput()
                ->withErrors($validator);
        }

        $quote = Quote::find($request->quote_id);
        $quote->destroy($id);

        return redirect('/quote');
    }


    /**
     * Display random specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function random()
    {
        $count = Quote::all()->count();
        $id = rand (0, $count);
        $quote = Quote::findOrFail($id);
        $quote->user = User::findOrFail($quote->user_id)->name;
        return !empty($quote)? view('quotes.daily', $quote)->with('quote', $quote) : redirect(url('/quote/daily'));
    }
}

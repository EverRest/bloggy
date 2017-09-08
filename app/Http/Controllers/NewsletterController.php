<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;

class NewsletterController extends Controller
{
    /**
     * Subscribe for news.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(),[
        'email' => 'required|unique:newsletters|max:50'
    ]);

        if ($validator->fails()) {
            return redirect(URL::previous())
                ->withInput()
                ->withErrors($validator);
        }

        $newsletter = new Newsletter();
        $newsletter->email = $request->email;
        $newsletter->save();

        return redirect(URL::previous());
    }
}

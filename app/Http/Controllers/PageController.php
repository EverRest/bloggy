<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class PageController extends Controller
{
    /**
     * render index page
     * return void
     */
    public function index()
    {
        $cats = Category::all();
        return view('pages.home')->with('cats', $cats);
    }

    /**
     * redirect register page
     * return void
     */
    public function register()
    {
        return view('auth.register');
    }

    /**
     * redirect login page
     * return void
     */
    public function login()
    {
        return view('auth.login');
    }
}

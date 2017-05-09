<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('page.home');
    }

    public function about()
    {
        return view('page.about');
    }

    public function blog()
    {
        return view('page.blog');
    }

    public function contact()
    {
        return view('page.contact');
    }
}

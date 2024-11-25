<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function americas()
    {
        return view('frontend.americas');
    }

    public function asia()
    {
        return view('frontend.asia');
    }

    public function basketball()
    {
        return view('frontend.basketball');
    }

    public function business()
    {
        return view('frontend.business');
    }

    public function entertainment()
    {
        return view('frontend.entertainment');
    }

    public function europe()
    {
        return view('frontend.europe');
    }

    public function football()
    {
        return view('frontend.football');
    }

    public function health()
    {
        return view('frontend.health');
    }

    public function index()
    {
        return view('frontend.index');
    }

    public function politics()
    {
        return view('frontend.politics');
    }

    public function science()
    {
        return view('frontend.science');
    }

    public function sports()
    {
        return view('frontend.sports');
    }

    public function technology()
    {
        return view('frontend.technology');
    }

    public function worldnews()
    {
        return view('frontend.worldnews');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $title = "RehemarescueCBO - Home";
        return view('pages.home', compact('title'));
    }
}

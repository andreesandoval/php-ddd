<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('articulos1');
    }
    public function art1()
    {
        return view('articulos1');
    }
    public function art2()
    {
        return view('articulos2');
    }
    public function art3()
    {
        return view('articulos3');
    }
}

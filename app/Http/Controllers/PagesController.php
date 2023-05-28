<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Database\Seeders\ArticuloSeeder;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $articulos = Articulo::where('clasificacion','=',0)->get();
        return view('articulos', compact('articulos'));
    }
    public function art1()
    {
        $articulos = Articulo::where('clasificacion','=',0)->get();
        return view('articulos', compact('articulos'));
    }
    public function art2()
    {
        $articulos = Articulo::where('clasificacion','=',1);
        return view('articulos', compact('articulos'));

    }
    public function art3()
    {
        return view('articulos');
    }
}

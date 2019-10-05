<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Valor;
use App\Banner;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index', ['valores' => Valor::orderBy('titulo', 'asc')->get()])->with('banners', Banner::all());
    }
}

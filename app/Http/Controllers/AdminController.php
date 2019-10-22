<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function index()
    {
        return view('slide.create')->with('banners', Banner::all());;
    }

}

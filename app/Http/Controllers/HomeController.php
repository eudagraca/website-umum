<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Conquista;
use App\Curso;
use App\Valor;
use App\Contacto;
use GuzzleHttp\Client;

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
        /* API
        $client = new Client();
        $res = $client->get('http://127.0.0.1:8000/estudantes', ['auth' => ['user', 'pass']]);
        $data = json_decode($res->getBody(), true);
*/
        return view
        ('index', [
            'valores' => Valor::orderBy('titulo', 'asc')->get(),
            'conquista' => Conquista::orderBy('id', 'desc')->take(1)->get(),
            'cursos' => Curso::all(),
            'estudantes' =>  3 /*count($data)*/,
        ]
        )->with('banners', Banner::where('status', '1')->orderBy('id', 'desc')->get());

    }
}

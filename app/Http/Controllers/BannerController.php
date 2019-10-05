<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('slide.slider')->with('banners', Banner::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'titulo' => 'required',
            'descricao' => 'required',
            'imagem' => 'image|required|max:1999'
        ]);

        // File upload
        if($request->hasFile('imagem')){
            //Pegar o nome com extensao
            $filenameWithExt = $request->file('imagem')->getClientOriginalName();
            // Pegar o nome do ficheiro
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Pegar a extensao
            $extensio = $request->file('imagem')->getClientOriginalExtension();
            // Nome a ser armazenado
            $filenameToStore = $filename.'_'.time().'.'.$extensio;
            // Upload imagem
            $path = $request->file('imagem')->storeAs('public/banner_images', $filenameToStore);
        }else{
            // Imagem padrão caso o usuario não selecione uma imagem
            $filenameToStore = 'noimage.jpg';
        }

        $banner = new Banner;
        $banner->titulo = $request->input('titulo');
        $banner->descricao = $request->input('descricao');
        $banner->imagem = $filenameToStore;
        $banner->save();

        return redirect('/missao');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $this->validate($request, [
            'titulo' => 'required',
            'descricao' => 'required',
            'imagem' => 'image|nullable|max:1999'
        ]);

        // File upload
        if($request->hasFile('imagem')){
            //Pegar o nome com extensao
            $filenameWithExt = $request->file('imagem')->getClientOriginalName();
            // Pegar o nome do ficheiro
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Pegar a extensao
            $extensio = $request->file('imagem')->getClientOriginalExtension();
            // Nome a ser armazenado
            $filenameToStore = $filename.'_'.time().'.'.$extensio;
            // Upload imagem
            $path = $request->file('imagem')->storeAs('public/banner_images', $filenameToStore);
        }

        $banner = Banner::find($id);
        $banner->titulo = $request->input('titulo');
        $banner->descricao = $request->input('descricao');
        if ($request->hasFile('imagem')) {
            $banner->imagem = $filenameToStore;
        }
        
        $banner->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $banner = Banner::find($id);
        Storage::delete('public/banner_images'.$banner->imagem);
        $banner->delete();
    }
}

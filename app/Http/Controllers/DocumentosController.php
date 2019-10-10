<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Documento;

class DocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('documentos.index')->with('documentos', Documento::orderBy('id', 'desc')->paginate(5));
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
            'referencia' => 'required',
            'nome' => 'required',
            'descricao' => 'required',
            'tag' => 'nullable',
            'ficheiro' => 'file|required|max:1999'
        ]);

        // File upload
        if($request->hasFile('ficheiro')){
            //Pegar o nome com extensao
            $filenameWithExt = $request->file('ficheiro')->getClientOriginalName();
            // Pegar o nome do ficheiro
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Pegar a extensao
            $extensio = $request->file('ficheiro')->getClientOriginalExtension();
            // Nome a ser armazenado
            if ($extensio == 'pdf') {
                 $filenameToStore = $filename.'_'.time().'.'.$extensio;
                // Upload imagem
                $path = $request->file('ficheiro')->storeAs('public/documentos', $filenameToStore);
            }else{
                return redirect('/missao')->with('error', 'Só é permitidos ficheiro no formato pdf');
            }
            //extensao permitidas jpg png jpeg
           
        }
            //return $filenameToStore;
        $documento = new Documento;
        $documento->nome = $request->input('nome');
        $documento->referencia = $request->input('referencia');
        $documento->descricao = $request->input('descricao');
        $documento->ficheiro = $filenameToStore;
        $documento->tag = $request->input('tag');
        $documento->save();

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
    }
}

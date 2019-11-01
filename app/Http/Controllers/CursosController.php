<?php

namespace App\Http\Controllers;

use App\Grau;
use Illuminate\Http\Request;
use App\Curso;
class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return count(Curso::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view('cursos.create', ['cursos' => Curso::all()])->with('graus', Grau::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // File upload
        if($request->hasFile('imagem')){
            //Pegar o nome com extensao
            $filenameWithExt = $request->file('imagem')->getClientOriginalName();
            // Pegar o nome do ficheiro
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Pegar a extensao
            $extension = $request->file('imagem')->getClientOriginalExtension();
            // Nome a ser armazenado

            //extensao permitidas jpg png jpeg
            $imageToStore = $filename.'_'.time().'.'.$extension;
            // Upload imagem
            $path = $request->file('imagem')->storeAs('public/curso_images', $imageToStore);
        }else{
            // Imagem padrão caso o usuario não selecione uma imagem
            $imageToStore = 'noimage.jpg';
        }

       // File upload
        if ($request->hasFile('plano_curicular')) {
            //Pegar o nome com extensao
            $filenameWithExt = $request->file('plano_curicular')->getClientOriginalName();
            // Pegar o nome do ficheiro
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Pegar a extensao
            $extension = $request->file('plano_curicular')->getClientOriginalExtension();
            // Nome a ser armazenado
            if ($extension == 'pdf') {
                $filenameToStore = $filename . '_' . time() . '.' . $extension;
                // Upload imagem
                $path = $request->file('plano_curicular')->storeAs('public/plano_curicular', $filenameToStore);
            } else {
                return redirect('/cursos/create')->with('error', 'Só é permitidos ficheiro no formato pdf');
            }
            //extensao permitidas jpg png jpeg
        }
        // dd($request->all());
        $curso = new Curso();
        $curso->nome            = $request->input('nome');
        $curso->imagem          = $imageToStore;
        $curso->grau_id         = $request->input('grau_id');
        $curso->ciclo           = $request->input('ciclo');
        $curso->perfil_saida    = $request->input('perfil_saida');
        $curso->plano_curicular = isset($filenameToStore) ? $filenameToStore : '';
        $curso->admissao        = $request->input('admissao');
        $curso->regime         = $request->input('regime');
        $curso->variante        = $request->input('variante');
        $curso->save();

        return \redirect('/cursos/create')->with('success', 'Curso ' . $request->input('nome') . ' guardado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso = Curso::find($id);
        if($curso != null){
        return view('cursos.details')->with('curso', $curso);
        }else{
            return abort(404);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('cursos.edit', ['cursos' => Curso::all(), 'graus' => Grau::all()])->with('curso', Curso::find($id));
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
           // File upload
        if($request->hasFile('imagem')){
            //Pegar o nome com extensao
            $filenameWithExt = $request->file('imagem')->getClientOriginalName();
            // Pegar o nome do ficheiro
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Pegar a extensao
            $extension = $request->file('imagem')->getClientOriginalExtension();
            // Nome a ser armazenado

            //extensao permitidas jpg png jpeg
            $imageToStore = $filename.'_'.time().'.'.$extension;
            // Upload imagem
            $path = $request->file('imagem')->storeAs('public/curso_images', $imageToStore);
        }

       // File upload
        if ($request->hasFile('plano_curicular')) {
            //Pegar o nome com extensao
            $filenameWithExt = $request->file('plano_curicular')->getClientOriginalName();
            // Pegar o nome do ficheiro
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Pegar a extensao
            $extension = $request->file('plano_curicular')->getClientOriginalExtension();
            // Nome a ser armazenado
            if ($extension == 'pdf') {
                $filenameToStore = $filename . '_' . time() . '.' . $extension;
                // Upload imagem
                $path = $request->file('plano_curicular')->storeAs('public/plano_curicular', $filenameToStore);
            } else {
                return redirect('/cursos/create')->with('error', 'Só é permitidos ficheiro no formato pdf');
            }
            //extensao permitidas jpg png jpeg
        }
        // dd($request->all());
        $curso = Curso::find($id);
        $curso->nome            = $request->input('nome');
        $curso->imagem          = isset($imageToStore) ? $imageToStore : $curso->imagem;
        $curso->grau_id         = $request->input('grau_id');
        $curso->ciclo           = $request->input('ciclo');
        $curso->perfil_saida    = $request->input('perfil_saida');
        $curso->plano_curicular = isset($filenameToStore) ? $filenameToStore : $curso->plano_curicular;
        $curso->admissao        = $request->input('admissao');
        $curso->regime         = $request->input('regime');
        $curso->variante        = $request->input('variante');
        $curso->update();

        return \redirect('/cursos/create')->with('success', 'Curso ' . $request->input('nome') . ' atualizado com sucesso');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso = Curso::find($id);
        $curso->delete();

        return \redirect('/cursos/create')->with('success', 'Curso removido com sucesso');
    }
}

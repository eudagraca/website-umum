<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Page;
use App\PageContent;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function qualidade()
    {
        if (Page::where('titulo', 'Qualidade')->exists()) {
            $qualidades = Page::where('titulo', 'Qualidade')->get();
            $id = 0;
            $name = "";
            foreach ($qualidades as $qualidade) {
                $id = $qualidade->id;
                $name = $qualidade->titulo;
            }
            return view('pages.page', ['contents' => PageContent::where('page_id', $id)->get(), 'titulo' => $name, 'i' => 0]);
        } else {
            return response()->json([
                "message" => "Student not found",
            ], 404);
        }
    }

    public function visao()
    {
        if (Page::where('titulo', 'Princípios Orientadores')->exists()) {
            $qualidades = Page::where('titulo', 'Princípios Orientadores')->get();
            $id = 0;
            $name = "";
            foreach ($qualidades as $qualidade) {
                $id = $qualidade->id;
                $name = $qualidade->titulo;
            }
            return view('pages.page', ['contents' => PageContent::where('page_id', $id)->get(), 'titulo' => $name, 'i' => 0]);
        } else {
           abort(404);
        }

    }

    public function investigacao()
    {
        if (Page::where('titulo', 'Investigação')->exists()) {
            $qualidades = Page::where('titulo', 'Investigação')->get();
            $id = 0;
            $name = "";
            foreach ($qualidades as $qualidade) {
                $id = $qualidade->id;
                $name = $qualidade->titulo;
            }
            return view('pages.page', ['contents' => PageContent::where('page_id', $id)->get(), 'titulo' => $name, 'i' => 0]);
        } else {
            abort(404);
        }

    }

    public function fundamentos()
    {
        if (Page::where('titulo', 'Fundamentos para o Ensino Superior')->exists()) {
            $qualidades = Page::where('titulo', 'Fundamentos para o Ensino Superior')->get();
            $id = 0;
            $name = "";
            foreach ($qualidades as $qualidade) {
                $id = $qualidade->id;
                $name = $qualidade->titulo;
            }
            return view('pages.page', ['contents' => PageContent::where('page_id', $id)->get(), 'titulo' => $name, 'i' => 0]);
        } else {
            abort(404);

        }
    }

    public function licenciatura()
    {
        if (Page::where('titulo', 'Licenciatura')->exists()) {
            $qualidades = Page::where('titulo', 'Licenciatura')->get();
            $id = 0;
            $name = "";
            foreach ($qualidades as $qualidade) {
                $id = $qualidade->id;
                $name = $qualidade->titulo;
            }
            return view('pages.page', ['contents' => PageContent::where('page_id', $id)->get(), 'titulo' => $name, 'i' => 0]);
        } else {
            abort(404);
        }
    }

    public function cooperacao()
    {
        if(Page::where('titulo', 'Cooperação e Extensão')->exists()){
            $qualidades = Page::where('titulo', 'Cooperação e Extensão')->get();
            $id = 0;
            $name = "";
            foreach ($qualidades as $qualidade) {
                $id = $qualidade->id;
                $name = $qualidade->titulo;
            }
            return view('pages.page', ['contents' => PageContent::where('page_id', $id)->get(), 'titulo' => $name, 'i' => 0]);
        }else {
            abort(404);
        }
    }

    public function create()
    {
        return view('pages.create')->with('pages', Page::all());
    }
    public function store(Request $request)
    {

        if ($request->hasFile('imagem_destaque')) {
                //Pegar o nome com extensao
                $filenameWithExt = $image->getClientOriginalName();
                // Pegar o nome do ficheiro
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Pegar a extensao
                $extension = $image->getClientOriginalExtension();
                // Nome a ser armazenado

                //extensao permitidas jpg png jpeg
                $imageNameDestaque = $filename . '_' . time() . '.' . $extension;
                // Upload imagem
                $path = $image->storeAs('public/page_images', $imageNameDestaque);

        }

        if ($request->hasFile('imagem_texto')) {

                $filenameWithExt = $image->getClientOriginalName();
                // Pegar o nome do ficheiro
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Pegar a extensao
                $extension = $image->getClientOriginalExtension();
                // Nome a ser armazenado

                //extensao permitidas jpg png jpeg
                $imageNameTexto = $filename . '_' . time() . '.' . $extension;
                // Upload imagem
                $path = $image->storeAs('public/page_images', $imageNameTexto);

        }

        $page = new Page();
        $page->titulo = $request->input('titulo');
        $page->save();


        PageContent::create([
            'texto' => $request->input('textos') != null ? $request->input('textos') : null,
            'destaque' => $request->input('destaques') != null ? $request->input('destaques') : null,
            'imagem_destaque' => isset($imageNameDestaque) ? $imageNameDestaque : null,
            'imagem_texto' => isset($imageNameTexto) ? $imageNameTexto : null,
            'page_id' => $page->id,
        ]);

        return redirect('/pages/create')->with('success', 'Pagina de ' . $request->titulo . '  adicionada');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

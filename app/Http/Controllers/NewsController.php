<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Models\news;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{

    // Página inicial que mostra a lista de noticias
    public function index() 
    {
        
        // Lista as noticias por id de forma decrecente
        $noticias = news::orderbyDesc('id')->get();
        
        // Retorna a view Inicial
        return view('inicial', ['noticias' => $noticias]);
    }
    
    public function store(StorePost $request)
    {

        // Cria a noticia pegando tudo o requisitado no formulário
        $news = news::create([
            'Titulo' => $request->titulo,
            'Conteudo' => $request->conteudo,
            'categoria' => $request->categoria,
            'autor' => Auth::user()->name,
        ]);

        return redirect()->to('index');


    }

    public function show(news $news)
    {

        // Mostra a view 'show' que mostra as noticias sem edição
        return view('show', ['news' => $news]);

    }

    public function edit(news $news)
    {

        //Entra na view de editar, onde leva para o update
        return view('editar', ['news' => $news]);

    }

    public function update(StorePost $request, news $news)
    {
        $request->validated();

        $news->update([
            'Titulo' => $request->titulo,
            'Conteudo' => $request->conteudo,
        ]);

        return redirect()->route('newsShow', ['news' => $news->id])->with('success', 'Noticia editada com sucesso');
    }

    public function destroy(news $news)
    {

        $news->delete();

        return redirect()->route('newsIndex')->with('success', 'Noticia apagada com sucesso');

    }
}

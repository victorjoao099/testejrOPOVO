<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Models\news;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() 
    {
        $noticias = news::orderbyDesc('id')->get();
        return view('inicial', ['noticias' => $noticias]);
    }

    public function store(StorePost $request)
    {

        $news = news::create([
            'Titulo' => $request->titulo,
            'Conteudo' => $request->conteudo,
            'categoria' => $request->categoria,
            'autor' => 'João Victor',
        ]);

        return redirect()->to('index');


    }

    public function show(news $news)
    {

        // dd($news);

        return view('show', ['news' => $news]);

    }

    public function update(Request $request)
    {

    }

    public function destroy()
    {

    }
}

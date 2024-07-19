<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{route('newsUpdate', ['news' => $news->id])}}" method="post">
        @csrf
        @method('PUT')

        <div class="editar">

            <div class="titulo">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo" placeholder="Novo Titulo" value="{{old('Titulo', $news->Titulo)}}">
            </div>
            <div class="conteudo">
                <label for="conteudo">Conteúdo:</label>
                <textarea name="conteudo" id="conteudo" cols="30" rows="10">{{old('conteudo', $news->Conteudo)}}</textarea>
            </div>
            <button type="submit">Editar</button>
        </div>
    </form>
    
    <form action="{{route('newsDestroy', ['news' => $news->id])}}" method="post">
        @csrf
        @method('delete')
        <button>Apagar Noticia</button>
    </form>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes</title>
</head>
<body>

    {{-- {{dd($news)}} --}}
    
    <h1>Detalhes da noticia</h1>

    {{-- Recupera dados da sessão e das Noticias e coloca na tela --}}

    ID: {{$news->id}}<br>
    Titulo: {{$news->Titulo}}<br>
    Conteúdo: {{$news->Conteudo}}<br>
    Autor: {{$news->autor}}<br>
    Publicado em: {{\Carbon\Carbon::parse($news->publicado_em)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s')}}<br>

</body>
</html>
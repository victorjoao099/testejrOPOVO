<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noticias</title>
</head>

<body>

    <div class="msg">
        <h1>Olá, aqui as noticias estarão listadas para visualização e edição</h1>
    </div>

    <a href="cadastrar"><button class="bi bi-plus" id="cadastrarNoticia" name="cadastrarNoticia">Cadastrar
            Noticia</button></a>

    <form action="{{route('logout')}}" method="POST">
        @csrf

        <button class="bi bi-box-arrow-right" id="logout" class="logout">Sair</button>
</form>

{{-- {{print}} --}}

    @forelse ($noticias as $news)
        <a href="{{route('newsEdit', ['news' => $news->id])}}"><button>Editar</button></a>
        <a href="{{route('newsShow', ['news' => $news->id])}}"><button>Visualizar</button></a>
        ID: {{ $news->id }}<br>
        Titulo: {{ $news->Titulo }}<br>
        Conteúdo: {{ $news->Conteudo }}<br>
        Autor: {{ $news->autor }}<br>
        Data: {{ \Carbon\Carbon::parse($news->publicado_em)->tz('America/Sao_Paulo')->format('d/m/Y') }}<br>
        <hr>

    @empty
        <span style="color: #f00;">Nenhuma noticia encontrada!</span>
    @endforelse
</body>

</html>

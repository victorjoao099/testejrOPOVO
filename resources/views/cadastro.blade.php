<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Inicial</title>
</head>
<body>

    <div class="msg">
        <h1>Aqui você cadastra suas noticias</h1>
    </div>
<form action="{{route('api.news.store')}}" method="POST">
    @csrf


    @php
        echo $errors->any()
    @endphp
    <div class="cadastrarNoticias">
        <div class="titulo">
            <label for="titulo">Digite a seguir o título da noticia</label>
            <input type="text" name="titulo" id="titulo">
        </div>
        <div class="conteudo">
            <label for="conteudo">Digite o conteúdo da notícia</label>
            <textarea name="conteudo" id="conteudo" cols="30" rows="10"></textarea>
        </div>
        <div class="categoria">
            <label for="categoria">Qual a categoria da noticia</label>
            <select name="categoria" id="categoria">
                <option value="politica">Política</option>
                <option value="economia">Economia</option>
                <option value="esportes">Esportes</option>
                <option value="tecnologia">Tecnologia</option>
                <option value="educacao">Educação</option>
            </select>
        </div>
        <button type="submit">Enviar Noticia</button>
    </div>
</form>

    
<script></script>

</body>
</html>


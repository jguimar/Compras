@extends('site.layout')
@section('title','Detalhes')
@section('conteudo')

    <div class="row container"><br>
        <div class="col s12 m6">
            <img src="{{$produto->imagem}}" class="responsive-img">
        </div>
        <div class="col s12 m6">
            <h4>{{$produto->nome}}</h4><h4>R${{number_format($produto->preco, 2, '', '.')}}</h4>
            <p>{{$produto->descricao}}</p>
            <p> Postado por :{{$produto->user->firstName}}</p><br>
            categoria: {{$produto->categoria->nome}}
            <button class="btn red btn-large">Comprar</button>

        </div>
    </div>
@endsection
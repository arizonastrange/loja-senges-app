@extends('layout.app')
@section('title', $produto->nome)
@section('content')
<div class="row">
    <div class="col-12 col-md-6">
        <img src="{{$produto->imagem}}" alt="{{$produto->nome}}" class="image-fluid">
    </div>


    <div class="col-12 col-md-6">
        <h3>{{$produto->nome}}</h3>
        <h4> Valor: R$ {{number_format($produto->preco,2,',','.')}}</h4>
    </div>
</div>
@endsection
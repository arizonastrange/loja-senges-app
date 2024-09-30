@extends('layout.app')
@section('titttle', 'Carrinho de Compras')
@section('content')
<div class="row">
    <div class="col-12 col-sm6 col-md-4 col-lg-3 mb-4 mx-auto">
@if($items->count() == 0)
        <h2>Carrinho Vazio!</h2>
@else
<table class="table mt-3 table-bordered text-center striped">

</table>
    @foreach($items as $items)
    <tr>
        <td>
            <img src="{{$item->imagem}}" 
            alt="{{$item->nome}}"
            class="img-fluid rounded-circle"
            width="80px">
        </td>
    </tr>
    @endforeach
    </div>
</div>
        @endsection()
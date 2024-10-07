@extends('layout.app')
@section('tittle', 'Categorias')
@section('content')
<h1>Categorias</h1>
<a href="/admin/categorias/create"
    class="btn btn-success">Novo</a>
<div>
    <table
    class="table table-striped table-responsive mt-3 text-center">
        <thead>
            <th>Nome</th>
            <th colspan="3" style="width:10%">Ações</th>
        </thead>
        <tbody>
            <tr>
            @foreach($categorias as $categoria)
            <td> {{$categoria->nome}}</td>
            <td>
                <a href="/admin/categorias/{{$categoria->id}}"
                class="btn btn-primary">
            <i class="bi bi-eye"></i>
            </a>
            </td>
            <td>
                <a href="/admin/categorias/{{$categoria->id}}"
                class="btn btn-success">
            <i class="bi bi-pencil"></i>
            </a>
            </td>
            <td>
                <form action="/admin/categorias/{{$categoria->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">
                    <i class="bi bi-trash"></i>
                </button>
                </form>
            </td>
        </tr>
            @endforeach
        </tbody>
</table>
</div>

@endsection
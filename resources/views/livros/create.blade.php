@extends('layout')

@section('content')
<div class="content">
    <h2>Adicionar Novo Livro</h2>
    @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('livros.store') }}" method="POST">
        @csrf
        <div>
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" placeholder="Título">
        </div>
        <div>
            <label for="autor">Autor:</label>
            <input type="text" name="autor" placeholder="Autor">
        </div>
        <div>
            <label for="isbn">ISBN:</label>
            <input type="text" name="isbn" placeholder="ISBN">
        </div>
        <div>
            <label for="editora">Editora:</label>
            <input type="text" name="editora" placeholder="Editora">
        </div>
        <div>
            <label for="ano">Ano:</label>
            <input type="number" name="ano" placeholder="Ano">
        </div>
        <div>
            <label for="edicao">Edição:</label>
            <input type="number" name="edicao" placeholder="Edição">
        </div>
        <div>
            <label for="numero_paginas">Número de Páginas:</label>
            <input type="number" name="numero_paginas" placeholder="Número de Páginas">
        </div>
        <button type="submit" class="btn">Salvar</button>
    </form>
</div>
@endsection

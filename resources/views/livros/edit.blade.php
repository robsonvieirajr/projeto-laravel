@extends('layout')

@section('content')
<div class="content">
    <h2>Editar Livro</h2>
    @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('livros.update', $livro->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" value="{{ $livro->titulo }}">
        </div>
        <div>
            <label for="autor">Autor:</label>
            <input type="text" name="autor" value="{{ $livro->autor }}">
        </div>
        <div>
            <label for="isbn">ISBN:</label>
            <input type="text" name="isbn" value="{{ $livro->isbn }}">
        </div>
        <div>
            <label for="editora">Editora:</label>
            <input type="text" name="editora" value="{{ $livro->editora }}">
        </div>
        <div>
            <label for="ano">Ano:</label>
            <input type="number" name="ano" value="{{ $livro->ano }}">
        </div>
        <div>
            <label for="edicao">Edição:</label>
            <input type="number" name="edicao" value="{{ $livro->edicao }}">
        </div>
        <div>
            <label for="numero_paginas">Número de Páginas:</label>
            <input type="number" name="numero_paginas" value="{{ $livro->numero_paginas }}">
        </div>
        <button type="submit" class="btn">Atualizar</button>
    </form>
</div>
@endsection

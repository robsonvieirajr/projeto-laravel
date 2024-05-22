@extends('layout')

@section('content')
<div class="content">
    <h2>Detalhes do Livro</h2>
    <div class="card">
        <div class="card-header">
            <strong>Título:</strong> {{ $livro->titulo }}
        </div>
        <div class="card-body">
            <p><strong>Autor:</strong> {{ $livro->autor }}</p>
            <p><strong>ISBN:</strong> {{ $livro->isbn }}</p>
            <p><strong>Editora:</strong> {{ $livro->editora }}</p>
            <p><strong>Ano:</strong> {{ $livro->ano }}</p>
            <p><strong>Edição:</strong> {{ $livro->edicao }}</p>
            <p><strong>Número de Páginas:</strong> {{ $livro->numero_paginas }}</p>
            <a href="{{ route('livros.index') }}" class="btn">Voltar</a>
        </div>
    </div>
</div>
@endsection

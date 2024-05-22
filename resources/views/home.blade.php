@extends('layout')

@section('content')
<div class="content">
    <h2>Bem-vindo ao cadastro de Livros</h2>
    <p>Esta é a página inicial. Navegue para <a href="{{ route('livros.index') }}">a lista de livros</a>.</p>
</div>
@endsection

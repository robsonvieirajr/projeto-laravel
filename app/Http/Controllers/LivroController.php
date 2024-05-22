<?php

namespace App\Http\Controllers;

use App\Models\LivroModel;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = LivroModel::all();
        return view('livros.index', compact('livros'));
        echo "Listagem de livros";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livros.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'isbn' => 'required',
            'editora' => 'required',
            'ano' => 'required',
            'edicao' => 'required',
            'numero_paginas' => 'required'
        ]);

        LivroModel::create($request->all());
        return redirect()->route('livros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('livros.show', ['livro' => LivroModel::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('livros.edit', ['livro' => LivroModel::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'isbn' => 'required',
            'editora' => 'required',
            'ano' => 'required',
            'edicao' => 'required',
            'numero_paginas' => 'required'
        ]);

        $livro = LivroModel::find($id); // Buscar o livro pelo ID
        if ($livro) {
            $livro->update($request->all()); // Atualizar o livro
            return redirect()->route('livros.index')->with('success', 'Livro atualizado com sucesso.');
        } else {
            return redirect()->route('livros.index')->with('error', 'Livro não encontrado.');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LivroModel::destroy($id);
        return redirect()->route('livros.index');
    }
}

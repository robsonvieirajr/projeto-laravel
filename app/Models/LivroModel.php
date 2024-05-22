<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivroModel extends Model
{
    protected $table = 'livro';
    protected $primaryKey = 'id';
    protected $fillable = ['titulo', 'autor', 'isbn', 'editora', 'ano', 'edicao', 'numero_paginas'];


}

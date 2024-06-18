<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livrosbiblioteca extends Model
{
    use HasFactory;
    protected $fillable = [
        'vc_nome',
        'autor',
        'editora',
        'isbn',
        'quantidade',
        'vc_desc',
        'ano',
        'qt_page',
        'id_sub_categoria',
        'id_categoria',
        'vc_path',
        'preco',
        'vc_livro',
        'id_biblioteca',
        'id_partileira',
        'tag',
    ];
}

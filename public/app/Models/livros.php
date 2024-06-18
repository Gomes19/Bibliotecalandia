<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livros extends Model
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
        'id_categoria',
        'id_sub_categoria',
        'vc_path',
        'preco',
        'vc_livro'
    ];
}

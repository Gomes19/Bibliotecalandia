<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bEventos extends Model
{
    use HasFactory;

    protected $fillable= [
        'titulo',
        'descricao',
        'data_hora',
        'fuso_horario',
        'url_zoom',
        'senha_zoom',
        'gravacao_zoom',
    ] ;
}

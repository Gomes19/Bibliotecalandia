<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaBiblioteca extends Model
{
    use HasFactory;

    protected $fillable  = [
        'b_nome'
    ];
}

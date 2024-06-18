<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emprestismos extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_livro',
        'id_user_emprestimos',
        'entrega',
        'id_biblioteca',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userbiblioteca extends Model
{
    use HasFactory;
    protected $fillable =[
        'acesso',
        'id_biblioteca',
        'id_user',
    ];
}

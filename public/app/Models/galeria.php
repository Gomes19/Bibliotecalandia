<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galeria extends Model
{
    use HasFactory;
    protected $fillable  = [
        'vc_path',
        'id_carro'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEmprestimo extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'processo',
        'bi',
        'id_biblioteca'
        ];


        /*public static function deleteAll(){
            self::truncate();
        }*/
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\userbiblioteca;
class biblioteca extends Model
{
    use HasFactory;
    protected $fillable =[
        'vc_nome',
        'nif',
        'estado',
        'endereco',
        'dc_imovel',
        'lc_imovel',
        'id_categoria',
        'id_user',
    ];
    public function userbiblioteca()
    {
        return $this->hasMany(userbiblioteca::class);
    }
}

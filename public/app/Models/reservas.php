<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservas extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_carro',
        'estado',
        'pagamento',
        'motorista',
        'data',
        'hora',
        'pegada',
        'chegada',
    ];




    public function carros(){

          return $this->hasMany('App\Models\carros', 'id', 'id_carro');

   }

    public  function motorista(){
    return $this->hasMany('App\Models\User', 'id', 'id_motorista');


}
}

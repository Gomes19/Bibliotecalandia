<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\categoria;
use App\Models\categoria_biblioteca;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        categoria_biblioteca::create([
            'vc_nome'=>"Biblioteca Publica"
        ]);
        categoria_biblioteca::create([
            'vc_nome'=>"Biblioteca Universitaria"
        ]);
        categoria_biblioteca::create([
            'vc_nome'=>"Biblioteca Escolar"
        ]);
        categoria_biblioteca::create([
            'vc_nome'=>"Biblioteca Nacional"
        ]);
        categoria_biblioteca::create([
            'vc_nome'=>"Biblioteca Digital"
        ]);
        categoria_biblioteca::create([
            'vc_nome'=>"Biblioteca Movel"
        ]);
        categoria_biblioteca::create([
            'vc_nome'=>"Biblioteca Comunitaria"
        ]);
        categoria_biblioteca::create([
            'vc_nome'=>"Biblioteca Infatil"
        ]);
        categoria_biblioteca::create([
            'vc_nome'=>"Biblioteca Jurídica"
        ]);
        
         \App\Models\User::factory(1)->create();
    }
}

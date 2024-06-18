<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableLivrosbibliotecas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('livrosbibliotecas', function (Blueprint $table) {
            
            $table->unsignedBigInteger('id_biblioteca')->references('id')
            ->on('bibliotecas')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->unsignedBigInteger('id_categoria')->references('id')
            ->on('categorias')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

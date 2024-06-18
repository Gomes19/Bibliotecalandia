<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBibliotecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bibliotecas', function (Blueprint $table) {
            $table->id();
            $table->string('vc_nome')->unique();
            $table->string('nif')->unique();
            $table->integer('estado')->default(0);
            $table->string('endereco')->unique();
            $table->longText('dc_imovel');
            $table->longText('lc_imovel');
            $table->unsignedBigInteger('id_categoria');
            $table->string('vc_path')->nullable();
            $table->longText('lt_desc');
            $table->string('horario');
            $table->foreign('id_categoria')->references('id')->on('categoria_bibliotecas')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bibliotecas');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosbibliotecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livrosbibliotecas', function (Blueprint $table) {
            $table->id();
            $table->string('vc_nome');
            $table->string('autor');
            $table->string('editora');
            $table->string('isbn');
            $table->integer('quantidade')->nullable();
            $table->longText('vc_desc');
            $table->date('ano');
            $table->integer('qt_page');
            $table->string('vc_path')->nullable();
            $table->float('preco')->nullable();
            $table->longText('vc_livro');
            $table->unsignedBigInteger('id_sub_categoria')->references('id')
            ->on('sub_categorias')->onDelete('CASCADE')->onUpdate('CASCADE');
       
            $table->unsignedBigInteger('id_partileira')->references('id')
            ->on('partileiras')->onDelete('CASCADE')->onUpdate('CASCADE');
            
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
        Schema::dropIfExists('livrosbibliotecas');
    }
}

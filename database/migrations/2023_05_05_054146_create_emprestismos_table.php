<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmprestismosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprestismos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_livro')->references('id')
            ->on('livrosbibliotecas')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->unsignedBigInteger('id_user_emprestimos')->references('id')
            ->on('user_emprestimos')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->date('entrega')->nullable();
            
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
        Schema::dropIfExists('emprestismos');
    }
}

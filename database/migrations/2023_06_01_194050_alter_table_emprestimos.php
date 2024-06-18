<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableEmprestimos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emprestismos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_biblioteca');
            $table->foreign('id_biblioteca')->references('id')->on('bibliotecas')->onDelete('CASCADE')->onUpdate('CASCADE');
          
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('vc_path')->nullable();
            $table->string('titulo')->nullable();
            $table->string('lingua')->nullable();
            $table->integer('idade')->nullable();
            $table->longText('descricao')->nullable();
            $table->string('contacto')->nullable();
            $table->string('pais')->nullable();
            $table->string('cidade')->nullable();
            $table->longText('endereco')->nullable();
           $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

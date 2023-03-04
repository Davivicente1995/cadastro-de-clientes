<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nomeContato',220);
            $table->string('cpfContato',220);
            $table->date('dataNascContato');
            $table->string('sexoContato', 40)->default('Outro');
            $table->string('enderecoContato',220);
            $table->string('estadoContato',220);
            $table->string('cidadeContato',220);
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
        Schema::dropIfExists('clientes');
    }
};

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArquivoCoop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arquivo_coop', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('instituicao_id')->unsigned();
            $table->string('nome')->unique();
            $table->string('tipo');
            $table->integer('ano');
            $table->timestamps();

            $table->foreign('instituicao_id')
                    ->references('id')
                    ->onDelete('cascade')
                    ->on('instituicao');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('arquivo_coop');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Producto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo_barras');
            $table->string('nombre');
            $table->string('presentacion');
            $table->string('cantidad');
            $table->string('unidades');
            $table->string('precio_entrada');
            $table->string('precio_salida');
            $table->unsignedBigInteger('id_categoria'); 
            $table->timestamps();
         
            $table->foreign('id_categoria')->references('id')->on('categoria');
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

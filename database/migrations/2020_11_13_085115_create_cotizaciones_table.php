<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotizacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizaciones', function (Blueprint $table) {
            $table->id();
            $table->date('fechaCotizacion');
            $table->integer('numeroCotizacion');
            $table->string('nombreCliente');
            $table->string('apellidoCliente');
            $table->integer('telefonoCliente')->nullable();
            $table->integer('celularCliente')->nullable();
            $table->string('correo');
            $table->string('formaPago');
            $table->string('nombreProducto');
            $table->integer('cantidadProducto');
            $table->integer('valorProducto');
            $table->enum('iva',['si','no'])->default('si');
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
        Schema::dropIfExists('cotizaciones');
    }
}

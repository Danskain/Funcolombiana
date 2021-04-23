<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idpersona')->unsigned();
           
           
            
           
            
           /*  $table->unsignedBigInteger('tipoDocumento')->unsigned();  */
            $table->unsignedBigInteger('ciudad')->unsigned();
            $table->unsignedBigInteger('eps')->unsigned();
            $table->unsignedBigInteger('ips')->unsigned();
            
            
            /* $table->foreign('tipoDocumento')->references('id')->on('tipo_documentos'); */
            $table->foreign('ciudad')->references('id')->on('ciudades')->onDelete('cascade');
            $table->foreign('eps')->references('id')->on('eps')->onDelete('cascade');
            $table->foreign('ips')->references('id')->on('ips')->onDelete('cascade');
            //$table->foreign('idpaciente')->references('idpaciente')->on('users')->onDelete('cascade');   
            /* $table->foreign('tipoDocumento')->references('id')->on('tipo_documentos'); */
            $table->foreign('idpersona')->references('id')->on('personas')->onDelete('cascade');
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
}

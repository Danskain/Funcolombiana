<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 30)->unique();
            $table->string('descripcion', 100)->unique();
            $table->boolean('condicion')->default(1);

            $table->timestamps();
        });
        
        DB::table('roles')->insert(array('id'=>'1','nombre'=>'Adiminstrador', 'descripcion'=>'Administradores de programa'));
        DB::table('roles')->insert(array('id'=>'2','nombre'=>'Usuarios', 'descripcion'=>'Usuarios de la institución'));
        DB::table('roles')->insert(array('id'=>'3','nombre'=>'Pacientes', 'descripcion'=>'Pacientes de la institución'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}

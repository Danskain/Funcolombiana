<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tipo_cliente')->insert([
            'tipo' => 'Sociedades Limitadas',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tipo_cliente')->insert([
            'tipo' => 'Sociedades Anónimas',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tipo_cliente')->insert([
            'tipo' => 'Sociedad en Comandita',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tipo_cliente')->insert([
            'tipo' => 'Sociedad en Comandita Simple',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tipo_cliente')->insert([
            'tipo' => 'Sociedad en Comandita por Acciones',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tipo_cliente')->insert([
            'tipo' => 'Sociedad por Acciones Simplificada',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tipo_cliente')->insert([
            'tipo' => 'Sociedad Colectiva',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tipo_documentos')->insert([
            'tipo' => 'CC',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tipo_documentos')->insert([
            'tipo' => 'PA',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tipo_documentos')->insert([
            'tipo' => 'CE',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tipo_pagos')->insert([
            'tipo' => 'Fisico',
            'metodo' => 'Efectivo',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tipo_pagos')->insert([
            'tipo' => 'Virtual',
            'metodo' => 'Tarjeta Credito',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tipo_pagos')->insert([
            'tipo' => 'Virtual',
            'metodo' => 'Tarjeta Debito',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('personas')->insert([
            'id' => 1,
            'codigo' => 1,
            'nombre' => 'Juan',
            'apellido' => 'Andres',
            'tipoDocumento' => 'CC',
            'numeroDocumento' => 2342563774,
            'telefono' => 2783654,
            'celular' => 2374653647,
            'direccion' => 'calle falsa 123',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('personas')->insert([
            'id' => 2,
            'codigo' => 1,
            'nombre' => 'aker',
            'apellido' => 'rodriguez',
            'tipoDocumento' => 'CC',
            'numeroDocumento' => 1015427568,
            'telefono' => 7895462,
            'celular' => 1259876359,
            'direccion' => 'calle verdadera 123',
            'created_at' => now(),
            'updated_at' => now()
        ]);

/*         DB::table('clientes')->insert([
            'codigo' => 001,
            'nombre' => 'Juan',
            'apellido' => 'Andres',
            'numeroDocumento' => 2342563774,
            'tipoDocumento' => 1,
            'telefono' => 2783654,
            'celular' => 2374653647,
            'direccion' => 'calle falsa 123',
            'correo' => 'juan@juan.com',
            'tipoCliente' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('clientes')->insert([
            'codigo' => 002,
            'nombre' => 'Camila',
            'apellido' => 'Gutierrez',
            'numeroDocumento' => 5342563774,
            'tipoDocumento' => 2,
            'telefono' => 2783444,
            'celular' => 6544653647,
            'direccion' => 'calle falsa 456',
            'correo' => 'camila@camila.com',
            'tipoCliente' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('clientes')->insert([
            'codigo' => 003,
            'nombre' => 'Adriana',
            'apellido' => 'Garzon',
            'numeroDocumento' => 999563774,
            'tipoDocumento' => 2,
            'telefono' => 3723444,
            'celular' => 8351653647,
            'direccion' => 'calle falsa 789',
            'correo' => 'adriana@adriana.com',
            'tipoCliente' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
 */    }
}

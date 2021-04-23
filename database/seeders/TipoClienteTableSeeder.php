<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TipoClienteTableSeeder extends Seeder
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
    }
}

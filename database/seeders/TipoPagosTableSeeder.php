<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TipoPagosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}

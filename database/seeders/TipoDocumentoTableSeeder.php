<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TipoDocumentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}

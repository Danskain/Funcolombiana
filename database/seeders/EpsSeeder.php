<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eps= array (

            "AIC-EPSI",
            "Aliansalud EPS",
            "Ambuq EPS",
            "Anas Wayuu",
            "Asmet Salud EPS",
            "Cafesalud",
            "Cajacopi EPS",
            "Capital Salud EPS-S",
            "Capresoca EPS",
            "Comfachocó EPS-S",
            "Comfacor",
            "Comfaguajira",
            "Comfamiliar Cartagena",
            "Comfamiliar EPS",
            "Comfamiliar Nariño",
            "Comfandi",
            "Comparta EPS-S",
            "Compensar",    
            "Confaoriente EPS-S",
            "Confasucre",
            "Convida EPS",
            "Coomeva EPS",
            "Coosalud",
            "Cruz Blanca EPS",
            "Dusakawi EPSi",
            "Ecoopsos",
            "Emssanar EPS",
            "EPS Confenalco Valle",
            "EPS S.O.S",
            "EPS Sanitas",
            "Famisanar EPS",
            "Mallamas EPS Indígena",
            "Medimás EPS",
            "Mutual Ser",
            "Nueva EPS",
            "Pijaos Salud",
            "Salud Total EPS",
            "Saludvida",
            "Savia Salud EPS",
            "Sura EPS"

        );

        foreach ($eps as $e){
            DB::table('eps')->insert([
                'eps' => $e
                ]);
        }
    }
}

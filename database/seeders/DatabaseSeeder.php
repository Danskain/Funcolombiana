<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $this->call([ClientesTableSeeder::class]);
        $this->call([UsersTableSeeder::class]);
        $this->call([CiudadesSeeder::class]);
        $this->call([EpsSeeder::class]);
        $this->call([IpsSeeder::class]);
        /* $this->call([TipoDocumentoTableSeeder::class]);
        $this->call([TipoPagosTableSeeder::class]); */
        
        /* $this->call([TipoClienteTableSeeder::class]); */
    }
}

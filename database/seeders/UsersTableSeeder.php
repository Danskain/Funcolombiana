<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'idpersona'=>1,
            'name' => 'Admin Admin',
            'email' => 'admin@argon.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'condicion' => 1,
            'idrol' => 1,
            /* 'idpaciente'=>null, */
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'idpersona'=>2,
            'name' => 'aker',
            'email' => 'aker@hotmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'condicion' => 1,
            'idrol' => 1,
            /* 'idpaciente'=>null, */
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

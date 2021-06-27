<?php

namespace Database\Seeders;

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
        $this->call(GeneroSeeder::class);
        $this->call(CiudadSeeder::class);
        $this->call(RolSeeder::class);
       

        //roles para plugin spatie
        $this->call(RoleSeeder::class);
        $this->call(UsuariosSeeder::class);
    }
}

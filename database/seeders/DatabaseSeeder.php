<?php

namespace Database\Seeders;

use App\Models\accion;
use App\Models\auxiliar;
use App\Models\muerte;
use App\Models\nombre;
use App\Models\nombref;


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
        nombre::factory(20)->create();
        nombref::factory(20)->create();
        muerte::factory(20)->create();
        accion::factory(100)->create();
        auxiliar::factory(5)->create();
    }
}

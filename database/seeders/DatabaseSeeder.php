<?php

namespace Database\Seeders;

use App\Models\Helper;
use App\Models\Action;
use App\Models\Death;
use App\Models\Name;
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
        Name::factory(50)->create();
        Death::factory(20)->create();
        Action::factory(100)->create();
        Helper::factory(5)->create();
    }
}

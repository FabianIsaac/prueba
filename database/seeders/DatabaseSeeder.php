<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ModelosSeeder;
use Database\Seeders\MultasSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ModelosSeeder::class);
        $this->call(MultasSeeder::class);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        $this->call(MultasSeeder::class);
    }
}

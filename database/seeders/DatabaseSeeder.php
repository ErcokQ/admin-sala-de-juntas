<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Boardroom;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Boardroom::factory(10)->create();
    }
}

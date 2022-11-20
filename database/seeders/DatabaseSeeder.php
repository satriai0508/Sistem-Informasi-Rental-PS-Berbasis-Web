<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RentSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\DeviceSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            UserSeeder::class,
            DeviceSeeder::class,
            RentSeeder::class
        ]);
    }
}

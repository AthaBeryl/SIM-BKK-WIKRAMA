<?php

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
        $this->call(Alumni::class);
        $this->call(UserSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(RayonSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(StatusDetailSeeder::class);
    }
}

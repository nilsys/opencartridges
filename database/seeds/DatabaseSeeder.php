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
         $this->call(ManufacturerSeeder::class);
         $this->call(SerieSeeder::class);
         $this->call(ModelSeeder::class);
    }
}

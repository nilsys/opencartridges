<?php

use Illuminate\Database\Seeder;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('models')->insert([
        	['series_id' => 1, 'name' => 'Some product'],
        	['series_id' => 2, 'name' => 'Another product'],
        	['series_id' => 22, 'name' => 'PIXMA Printer']
        ]);
    }
}
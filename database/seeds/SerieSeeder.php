<?php

use Illuminate\Database\Seeder;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('series')->insert([
        	['manufacturers_id' => 1, 'name' => 'BS'],
        	['manufacturers_id' => 1, 'name' => 'DCP'],
        	['manufacturers_id' => 1, 'name' => 'FAX'],
        	['manufacturers_id' => 1, 'name' => 'HC'],
        	['manufacturers_id' => 1, 'name' => 'HL'],
        	['manufacturers_id' => 1, 'name' => 'Intellifax'],
        	['manufacturers_id' => 1, 'name' => 'MC'],
        	['manufacturers_id' => 1, 'name' => 'MFC'],
        	['manufacturers_id' => 1, 'name' => 'MP'],
        	['manufacturers_id' => 1, 'name' => 'OMNIFAX'],
        	['manufacturers_id' => 1, 'name' => 'P'],
        	['manufacturers_id' => 1, 'name' => 'PPF'],
        	['manufacturers_id' => 1, 'name' => 'WL'],
        	['manufacturers_id' => 2, 'name' => 'BJ'],
        	['manufacturers_id' => 2, 'name' => 'BJC'],
        	['manufacturers_id' => 2, 'name' => 'BW'],
        	['manufacturers_id' => 2, 'name' => 'C624'],
        	['manufacturers_id' => 2, 'name' => 'CFX'],
        	['manufacturers_id' => 2, 'name' => 'CLC'],
        	['manufacturers_id' => 2, 'name' => 'MP'],
        	['manufacturers_id' => 2, 'name' => 'MPC'],
        	['manufacturers_id' => 2, 'name' => 'PIXMA'],
        	['manufacturers_id' => 2, 'name' => 'PIXMA IX'],
        	['manufacturers_id' => 2, 'name' => 'PIXMA IP']
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            \App\Location::create([
                'country' => 'Cairo',
                'providence' => 'Cairo',
            ]);
            \App\Location::create([
                'country' => 'El Obour City',
                'providence' => 'El Obour City',
            ]);

    }
}

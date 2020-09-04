<?php

use Illuminate\Database\Seeder;

class ExperiencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            \App\Experience::create([
                'name' => '1-2',
                'description' => 'EXP 1-2 Description',
            ]);
            \App\Experience::create([
                'name' => '1-3',
                'description' => 'EXP 1-3 Description',
            ]);
            \App\Experience::create([
                'name' => '5-7',
                'description' => 'EXP 5-7 Description',
            ]);
            \App\Experience::create([
                'name' => '7-10',
                'description' => 'EXP 7-10 Description',
            ]);

    }
}

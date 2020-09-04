<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            \App\Category::create([
                'name' => 'Engineering',
                'description' => 'Engineering.',
            ]);
            \App\Category::create([
                'name' => 'Operation & Support',
                'description' => 'Operation & Support.',
            ]);
    }
}

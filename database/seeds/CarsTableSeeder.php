<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            [
                'name' => 'fast car'
            ],
            [
                'name' => 'big car'
            ]
        ]);
    }
}
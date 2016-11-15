<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RulesTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('rules')->insert([
            [
                'id' => 1,
                'name' => 'max weight'
            ],
            [
                'id' => 2,
                'name' => 'max pallets and length'
            ]
        ]);
    }
}
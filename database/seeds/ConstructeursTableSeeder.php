<?php

use Illuminate\Database\Seeder;

class ConstructeursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('constructeurs')->insert([
            'nom' => 'Volkswagen',
        ]);
        DB::table('constructeurs')->insert([
            'nom' => 'Audi',
        ]);

        DB::table('constructeurs')->insert([
            'nom' => 'Nissan',
        ]);

        DB::table('constructeurs')->insert([
            'nom' => 'BMW',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class MotorisationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('motorisations')->insert([
            'nom' => '1.9 TDI',
            'cylindree' => '1.9',
            'puissance' => '105',
            'energie' => 'Diesel',
            'couple' => '250'
        ]);
        DB::table('motorisations')->insert([
            'nom' => '2.0 TDI',
            'cylindree' => '2.0',
            'puissance' => '136',
            'energie' => 'Diesel',
            'couple' => '320'
        ]);
        DB::table('motorisations')->insert([
            'nom' => '328I',
            'cylindree' => '3.0',
            'puissance' => '230',
            'energie' => 'Essence',
            'couple' => '300'
        ]);
    }
}

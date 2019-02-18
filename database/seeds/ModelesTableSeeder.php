<?php

use Illuminate\Database\Seeder;

class ModelesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modeles')->insert([
            'nom' => 'Serie 3',
            'annee' => '2007',
            'boite_auto' => true,
            'constructeur' => 'BMW',
            'motorisation' => '328I'
        ]);

        DB::table('modeles')->insert([
            'nom' => 'Golf Plus',
            'annee' => '2005',
            'boite_auto' => false,
            'constructeur' => 'Volkswagen',
            'motorisation' => '1.9 TDI'
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ConstructeursTableSeeder::class);
        $this->call(MotorisationsTableSeeder::class);
        $this->call(ModelesTableSeeder::class); // À appeler en dernier, après Motorisations et Constructeurs
    }
}

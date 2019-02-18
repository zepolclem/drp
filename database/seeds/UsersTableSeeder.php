<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'drp',
            'email' => 'drp@drp.com',
            'password' => bcrypt('secret'),
        ]);
    }
}

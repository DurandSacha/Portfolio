<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlacesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$places as $place => $coords) {
            DB::table('users')->insert([
                'name' => 'Sacha Durand',
                'email' => 'sacha6623@gmail.com',
                'password' => '00000000',
                'roles' => 'admin',
            ]);
        }
    }
}

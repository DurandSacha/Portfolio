<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::firstOrNew([
            'email' => 'sacha6623@gmail.com',
        ]);

        if (!$user->exists) {
            $user->name = 'Sacha Durand';
            $user->email = 'sacha6623@gmail.com';
            $user->password = Hash::make(getenv('ADMIN_PASS'));
            $user->roles = 'admin';
            $user->save();
        }
    }
}

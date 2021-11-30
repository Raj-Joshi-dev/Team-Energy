<?php

use Illuminate\Database\Seeder;
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
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.de',
            'password' => 'password',
            'is_admin' => true,
        ]);

        User::create([
            'name' => 'Raj',
            'email' => 'test@test.de',
            'password' => 'password',
            'is_admin' => false,
        ]);
    }
}

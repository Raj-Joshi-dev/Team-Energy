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
            'name' => 'Raj',
            'email' => 'admin1@admin',
            'password' => 'password',
            'team_id' => 1,
        ]);

        User::create([
            'name' => 'Didi',
            'email' => 'admin2@admin',
            'password' => 'password',
            'team_id' => 1,
        ]);

        User::create([
            'name' => 'Marco',
            'email' => 'marco@synoxa.de',
            'password' => 'password',
            'team_id' => 2,
        ]);

        User::create([
            'name' => 'Bernd',
            'email' => 'bernd@test.de',
            'password' => 'password',
            'team_id' => 3,
        ]);
    }
}

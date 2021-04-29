<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = Role::all();

        $admin = User::find(1);
        $admin->roles()->attach(1);

        $user = User::find(2);
        $user->roles()->attach(2);

    }
}

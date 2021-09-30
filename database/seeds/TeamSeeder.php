<?php

use Illuminate\Database\Seeder;
use App\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'name' => 'Admin',
            'switch_id' => 1
        ]);

        Team::create([
            'name' => 'Team 1',
            'switch_id' => 1
        ]);

        Team::create([
            'name' => 'Team 2',
            'switch_id' => 2
        ]);

        Team::create([
            'name' => 'Team 3',
            'switch_id' => 2
        ]);
    }
}

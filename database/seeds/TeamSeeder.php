<?php

use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Team::create([
            'team_id' => 1,
            'name' => 'Administrator',
        ]);
    }
}

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
            'name' => 'Ich im Team',
            'switch_id' => 1
        ]);

        Team::create([
            'name' => 'Ich & Kultur Combo',
            'switch_id' => 2
        ]);
    }
}

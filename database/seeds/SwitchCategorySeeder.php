<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SwitchCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('switch_categories')->insert([
            'id' => 1,
            'name' => 'Ich im Team'
        ]);

        DB::table('switch_categories')->insert([
            'id' => 2,
            'name' => 'Kultur im Team'
        ]);
    }
}

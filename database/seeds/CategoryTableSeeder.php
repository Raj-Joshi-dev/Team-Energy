<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
                'kat_id' => 1,
                'name' => 'Privater Bereich'
            ]);

        DB::table('categories')->insert([
                'kat_id' => 2,
                'name' => 'Beruflicher Bereich'
            ]);

        DB::table('categories')->insert([
                'kat_id' => 3,
                'name' => 'Potential im Team'
            ]);

        DB::table('categories')->insert([
                'kat_id' => 4,
                'name' => 'Kultur im Team - mein Einschätzung'
            ]);

        DB::table('categories')->insert([
                'kat_id' => 5,
                'name' => 'Kultur im Team - unsere Einschätzungen'
            ]);
    }
}

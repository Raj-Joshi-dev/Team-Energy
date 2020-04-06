<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->insert([
            'sub_id' => 1,
            'kat_id' => 1,
            'namel' => 'Sicherheit',
            'namer' => 'Freiheit'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 2,
            'kat_id' => 1,
            'namel' => 'Unterordnung',
            'namer' => 'Emanzipation'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 3,
            'kat_id' => 2,
            'namel' => 'Sicherheit',
            'namer' => 'Freiheit'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 4,
            'kat_id' => 3,
            'namel' => 'Sicherheit',
            'namer' => 'Freiheit'
        ]);
        
        DB::table('subcategories')->insert([
            'sub_id' => 5,
            'kat_id' => 2,
            'namel' => 'Unterordnung',
            'namer' => 'Emanzipation'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 6,
            'kat_id' => 3,
            'namel' => 'Unterordnung',
            'namer' => 'Emanzipation'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 7,
            'kat_id' => 1,
            'namel' => 'Solidarität',
            'namer' => 'Eigenverantwortung'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 8,
            'kat_id' => 2,
            'namel' => 'Solidarität',
            'namer' => 'Eigenverantwortung'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 9,
            'kat_id' => 3,
            'namel' => 'Solidarität',
            'namer' => 'Eigenverantwortung'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 10,
            'kat_id' => 1,
            'namel' => 'Bedürftigkeit',
            'namer' => 'Unabhängigkeit'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 11,
            'kat_id' => 1,
            'namel' => 'Empfindsamkeit',
            'namer' => 'Belastbarkeit'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 12,
            'kat_id' => 1,
            'namel' => 'Mitgefühl',
            'namer' => 'Abgrenzung'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 13,
            'kat_id' => 1,
            'namel' => 'Rücksichtnahme',
            'namer' => 'Selbstbehauptung'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 14,
            'kat_id' => 1,
            'namel' => 'Vertrauen',
            'namer' => 'Kontrolle'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 15,
            'kat_id' => 1,
            'namel' => 'Emotionalität',
            'namer' => 'Rationalität'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 16,
            'kat_id' => 1,
            'namel' => 'Lust',
            'namer' => 'Disziplin'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 17,
            'kat_id' => 2,
            'namel' => 'Bedürftigkeit',
            'namer' => 'Unabhängigkeit'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 18,
            'kat_id' => 2,
            'namel' => 'Empfindsamkeit',
            'namer' => 'Belastbarkeit'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 19,
            'kat_id' => 2,
            'namel' => 'Mitgefühl',
            'namer' => 'Abgrenzung'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 20,
            'kat_id' => 2,
            'namel' => 'Rücksichtnahme',
            'namer' => 'Selbstbehauptung'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 21,
            'kat_id' => 2,
            'namel' => 'Vertrauen',
            'namer' => 'Kontrolle'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 22,
            'kat_id' => 2,
            'namel' => 'Emotionalität',
            'namer' => 'Rationalität'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 23,
            'kat_id' => 2,
            'namel' => 'Lust',
            'namer' => 'Disziplin'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 24,
            'kat_id' => 3,
            'namel' => 'Bedürftigkeit',
            'namer' => 'Unabhängigkeit'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 25,
            'kat_id' => 3,
            'namel' => 'Empfindsamkeit',
            'namer' => 'Belastbarkeit'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 26,
            'kat_id' => 3,
            'namel' => 'Mitgefühl',
            'namer' => 'Abgrenzung'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 27,
            'kat_id' => 3,
            'namel' => 'Rücksichtnahme',
            'namer' => 'Selbstbehauptung'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 28,
            'kat_id' => 3,
            'namel' => 'Vertrauen',
            'namer' => 'Kontrolle'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 29,
            'kat_id' => 3,
            'namel' => 'Emotionalität',
            'namer' => 'Rationalität'
        ]);

        DB::table('subcategories')->insert([
            'sub_id' => 30,
            'kat_id' => 3,
            'namel' => 'Lust',
            'namer' => 'Disziplin'
        ]);
    }
}

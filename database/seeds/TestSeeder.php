<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keys')->insert([
            'tid' => 1,
            'ja_x1' => 0.00,
            'ja_y1' => 1.00,
            'eherja_x1' => 0.20,
            'eherja_y1' => 0.20,

            'ja_x2' => -0.00,
            'ja_y2' => -1.00,
            'eherja_x2' => -0.20,
            'eherja_y2' => -0.20,
            'subkat' => 'Sicherheit, Freiheit',

        ]);

        DB::table('keys')->insert([
            'tid' => 2,
            'ja_x1' => 0.33,
            'ja_y1' => 0.97,
            'eherja_x1' => 0.20,
            'eherja_y1' => 0.20,

            'ja_x2' => -0.33,
            'ja_y2' => -0.97,
            'eherja_x2' => -0.20,
            'eherja_y2' => -0.20,
            'subkat' => 'Disziplin, Lust',

        ]);

        DB::table('keys')->insert([
            'tid' => 3,
            'ja_x1' => 0.67,
            'ja_y1' => 0.87,
            'eherja_x1' => 0.20,
            'eherja_y1' => 0.20,

            'ja_x2' => -0.67,
            'ja_y2' => -0.87,
            'eherja_x2' => -0.20,
            'eherja_y2' => -0.20,
            'subkat' => 'Rationalität, Emotionalität',

        ]);

        DB::table('keys')->insert([
            'tid' => 4,
            'ja_x1' => -0.33,
            'ja_y1' => 0.97,
            'eherja_x1' => -0.20,
            'eherja_y1' => 0.20,

            'ja_x2' => 0.33,
            'ja_y2' => -0.97,
            'eherja_x2' => 0.20,
            'eherja_y2' => -0.20,
            'subkat' => 'Unterordnung, Emanzipation',

        ]);

        DB::table('keys')->insert([
            'tid' => 5,
            'ja_x1' => -0.67,
            'ja_y1' => 0.87,
            'eherja_x1' => -0.20,
            'eherja_y1' => 0.20,

            'ja_x2' => 0.67,
            'ja_y2' => -0.87,
            'eherja_x2' => 0.20,
            'eherja_y2' => -0.20,
            'subkat' => 'Solidarität, Eingenverantwortnung',

        ]);


        DB::table('keys')->insert([
            'tid' => 6,
            'ja_x1' => -0.90,
            'ja_y1' => -0.64,
            'eherja_x1' => -0.20,
            'eherja_y1' => -0.20,

            'ja_x2' => 0.90,
            'ja_y2' => 0.64,
            'eherja_x2' => 0.20,
            'eherja_y2' => 0.20,
            'subkat' => 'Vertrauen, Kontrolle',

        ]);


        DB::table('keys')->insert([
            'tid' => 7,
            'ja_x1' => -0.97,
            'ja_y1' => 0.33,
            'eherja_x1' => -0.20,
            'eherja_y1' => 0.20,

            'ja_x2' => 0.97,
            'ja_y2' => -0.33,
            'eherja_x2' => 0.20,
            'eherja_y2' => -0.20,
            'subkat' => 'Empfindsamkeit, Belastbarkeit',

        ]);

        DB::table('keys')->insert([
            'tid' => 8,
            'ja_x1' => -0.90,
            'ja_y1' => 0.64,
            'eherja_x1' => -0.20,
            'eherja_y1' => 0.20,

            'ja_x2' => 0.90,
            'ja_y2' => -0.64,
            'eherja_x2' => 0.20,
            'eherja_y2' => -0.20,
            'subkat' => 'Bedürftigkeit, Unabhängigkeit',

        ]);


        DB::table('keys')->insert([
            'tid' => 9,
            'ja_x1' => -1.00,
            'ja_y1' => 0.00,
            'eherja_x1' => -0.20,
            'eherja_y1' => 0.20,

            'ja_x2' => 1.00,
            'ja_y2' => -0.00,
            'eherja_x2' => 0.20,
            'eherja_y2' => -0.20,
            'subkat' => 'Mitgefühl, Abgrenzung',

        ]);

        DB::table('keys')->insert([
            'tid' => 10,
            'ja_x1' => -0.97,
            'ja_y1' => -0.33,
            'eherja_x1' => -0.20,
            'eherja_y1' => -0.20,

            'ja_x2' => 0.97,
            'ja_y2' => 0.33,
            'eherja_x2' => 0.20,
            'eherja_y2' => 0.20,
            'subkat' => 'Rücksichtnahme,Selbstbehauptung',

        ]);

        DB::table('keys')->insert([
            'tid' => 11,
            'ja_x1' => -1.00,
            'ja_y1' => 0.00,
            'eherja_x1' => -0.20,
            'eherja_y1' => 0.20,

            'ja_x2' => 1.00,
            'ja_y2' => -0.00,
            'eherja_x2' => 0.20,
            'eherja_y2' => -0.20,
            'subkat' => 'Mitgefühl, Abgrenzung',

        ]);

        DB::table('keys')->insert([
            'tid' => 12,
            'ja_x1' => -0.33,
            'ja_y1' => 0.97,
            'eherja_x1' => -0.20,
            'eherja_y1' => 0.20,

            'ja_x2' => 0.33,
            'ja_y2' => -0.97,
            'eherja_x2' => 0.20,
            'eherja_y2' => -0.20,
            'subkat' => 'Unterordnung, Emanzipation',

        ]);

        DB::table('keys')->insert([
            'tid' => 13,
            'ja_x1' => -0.97,
            'ja_y1' => 0.33,
            'eherja_x1' => -0.20,
            'eherja_y1' => 0.20,

            'ja_x2' => 0.97,
            'ja_y2' => -0.33,
            'eherja_x2' => 0.20,
            'eherja_y2' => -0.20,
            'subkat' => 'Empfindsamkeit, Belastbarkeit',

        ]);

        DB::table('keys')->insert([
            'tid' => 14,
            'ja_x1' => -0.67,
            'ja_y1' => 0.87,
            'eherja_x1' => -0.20,
            'eherja_y1' => 0.20,

            'ja_x2' => 0.67,
            'ja_y2' => -0.87,
            'eherja_x2' => 0.20,
            'eherja_y2' => -0.20,
            'subkat' => 'Solidarität, Eingenverantwortnung',

        ]);

        DB::table('keys')->insert([
            'tid' => 15,
            'ja_x1' => -0.90,
            'ja_y1' => 0.64,
            'eherja_x1' => -0.20,
            'eherja_y1' => 0.20,

            'ja_x2' => 0.90,
            'ja_y2' => -0.64,
            'eherja_x2' => 0.20,
            'eherja_y2' => -0.20,
            'subkat' => 'Bedürftigkeit, Unabhängigkeit',

        ]);

        DB::table('keys')->insert([
            'tid' => 16,
            'ja_x1' => -0.97,
            'ja_y1' => -0.33,
            'eherja_x1' => -0.20,
            'eherja_y1' => -0.20,

            'ja_x2' => 0.97,
            'ja_y2' => 0.33,
            'eherja_x2' => 0.20,
            'eherja_y2' => 0.20,
            'subkat' => 'Rücksichtnahme, Selbstbehauptung',

        ]);

        DB::table('keys')->insert([
            'tid' => 17,
            'ja_x1' => -0.90,
            'ja_y1' => -0.64,
            'eherja_x1' => -0.20,
            'eherja_y1' => -0.20,

            'ja_x2' => 0.90,
            'ja_y2' => 0.64,
            'eherja_x2' => 0.20,
            'eherja_y2' => 0.20,
            'subkat' => 'Vertrauen, Kontrolle',

        ]);

        DB::table('keys')->insert([
            'tid' => 18,
            'ja_x1' => -0.00,
            'ja_y1' => -1.00,
            'eherja_x1' => -0.20,
            'eherja_y1' => -0.20,

            'ja_x2' => 0.00,
            'ja_y2' => 1.00,
            'eherja_x2' => 0.20,
            'eherja_y2' => 0.20,
            'subkat' => 'Freiheit, Sicherheit',

        ]);

        DB::table('keys')->insert([
            'tid' => 19,
            'ja_x1' => -0.33,
            'ja_y1' => -0.97,
            'eherja_x1' => -0.20,
            'eherja_y1' => -0.20,

            'ja_x2' => 0.33,
            'ja_y2' => 0.97,
            'eherja_x2' => 0.20,
            'eherja_y2' => 0.20,
            'subkat' => 'Lust, Disziplin',

        ]);

        DB::table('keys')->insert([
            'tid' => 20,
            'ja_x1' => -0.67,
            'ja_y1' => -0.87,
            'eherja_x1' => -0.20,
            'eherja_y1' => -0.20,

            'ja_x2' => 0.67,
            'ja_y2' => 0.87,
            'eherja_x2' => 0.20,
            'eherja_y2' => 0.20,
            'subkat' => 'Emotionalität, Rationalität',

        ]);
    }
}

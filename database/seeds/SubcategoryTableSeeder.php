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
        DB::table('sub_categories')->insert([
            'sub_id' => 1,
            'tid' => 1,
            'name' => 'Sicherheit',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 1
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 2,
            'tid' => 1,
            'name' => 'Freiheit',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 3

        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 3,
            'tid' => 2,
            'name' => 'Disziplin',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 1
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 4,
            'tid' => 2,
            'name' => 'Lust',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 3
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 5,
            'tid' => 3,
            'name' => 'Rationalität',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 1
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 6,
            'tid' => 3,
            'name' => 'Emotionalität',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 3
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 7,
            'tid' => 4,
            'name' => 'Unterordnung',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 4
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 8,
            'tid' => 4,
            'name' => 'Emanzipation',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 2
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 9,
            'tid' => 5,
            'name' => 'Solidarität',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 4
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 10,
            'tid' => 5,
            'name' => 'Eingenverantwortnung',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 2
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 11,
            'tid' => 6,
            'name' => 'Vertrauen',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 3
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 12,
            'tid' => 6,
            'name' => 'Kontrolle',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 1
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 13,
            'tid' => 7,
            'name' => 'Empfindsamkeit',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 4
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 14,
            'tid' => 7,
            'name' => 'Belastbarkeit',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 2
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 15,
            'tid' => 8,
            'name' => 'Bedürftigkeit',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 4
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 16,
            'tid' => 8,
            'name' => 'Unabhängigkeit',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 2
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 17,
            'tid' => 9,
            'name' => 'Mitgefühl',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 4
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 18,
            'tid' => 9,
            'name' => 'Abgrenzung',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 2
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 19,
            'tid' => 10,
            'name' => 'Rücksichtnahme',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 3
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 20,
            'tid' => 10,
            'name' => 'Selbstbehauptung',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 1
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 21,
            'tid' => 11,
            'name' => 'Mitgefühl',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 4
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 22,
            'tid' => 11,
            'name' => 'Abgrenzung',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 2
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 23,
            'tid' => 12,
            'name' => 'Unterordnung',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 4
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 24,
            'tid' => 12,
            'name' => 'Emanzipation',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 2
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 25,
            'tid' => 13,
            'name' => 'Empfindsamkeit',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 4
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 26,
            'tid' => 13,
            'name' => 'Belastbarkeit',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 2
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 27,
            'tid' => 14,
            'name' => 'Solidarität',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 4
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 28,
            'tid' => 14,
            'name' => 'Eingenverantwortnung',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 2
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 29,
            'tid' => 15,
            'name' => 'Bedürftigkeit',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 4
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 30,
            'tid' => 15,
            'name' => 'Unabhängigkeit',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 2
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 31,
            'tid' => 16,
            'name' => 'Rücksichtnahme',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 3
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 32,
            'tid' => 16,
            'name' => 'Selbstbehauptung',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 1
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 33,
            'tid' => 17,
            'name' => 'Vertrauen',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 3
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 34,
            'tid' => 17,
            'name' => 'Kontrolle',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 1
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 35,
            'tid' => 18,
            'name' => 'Freiheit',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 3
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 36,
            'tid' => 18,
            'name' => 'Sicherheit',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 1
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 37,
            'tid' => 19,
            'name' => 'Lust',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 3
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 38,
            'tid' => 19,
            'name' => 'Disziplin',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 1
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 39,
            'tid' => 20,
            'name' => 'Emotionalität',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 3
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 40,
            'tid' => 20,
            'name' => 'Rationalität',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 1
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 41,
            'tid' => 21,
            'name' => 'Sicherheit',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 1
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 42,
            'tid' => 21,
            'name' => 'Freiheit',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 3

        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 43,
            'tid' => 22,
            'name' => 'Unterordnung',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 4
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 44,
            'tid' => 22,
            'name' => 'Emanzipation',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 2
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 45,
            'tid' => 23,
            'name' => 'Solidarität',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 4
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 46,
            'tid' => 23,
            'name' => 'Eingenverantwortnung',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 2
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 47,
            'tid' => 24,
            'name' => 'Bedürftigkeit',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 4
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 48,
            'tid' => 24,
            'name' => 'Unabhängigkeit',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 2
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 49,
            'tid' => 25,
            'name' => 'Empfindsamkeit',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 4
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 50,
            'tid' => 25,
            'name' => 'Belastbarkeit',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 2
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 51,
            'tid' => 26,
            'name' => 'Mitgefühl',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 4
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 52,
            'tid' => 26,
            'name' => 'Abgrenzung',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 2
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 53,
            'tid' => 27,
            'name' => 'Rücksichtnahme',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 3
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 54,
            'tid' => 27,
            'name' => 'Selbstbehauptung',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 1
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 55,
            'tid' => 28,
            'name' => 'Vertrauen',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 3
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 56,
            'tid' => 28,
            'name' => 'Kontrolle',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 1
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 57,
            'tid' => 29,
            'name' => 'Emotionalität',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 3
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 58,
            'tid' => 29,
            'name' => 'Rationalität',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 1
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 59,
            'tid' => 30,
            'name' => 'Lust',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 3
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 60,
            'tid' => 30,
            'name' => 'Disziplin',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 1
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 61,
            'tid' => 31,
            'name' => 'Disziplin',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 1
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 62,
            'tid' => 31,
            'name' => 'Lust',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 3
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 63,
            'tid' => 32,
            'name' => 'Sicherheit',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 1
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 64,
            'tid' => 32,
            'name' => 'Freiheit',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 3

        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 65,
            'tid' => 33,
            'name' => 'Rationalität',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 1
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 66,
            'tid' => 33,
            'name' => 'Emotionalität',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 3
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 67,
            'tid' => 34,
            'name' => 'Unterordnung',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 4
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 68,
            'tid' => 34,
            'name' => 'Emanzipation',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 2
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 69,
            'tid' => 35,
            'name' => 'Kontrolle',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 1
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 70,
            'tid' => 35,
            'name' => 'Vertrauen',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 3
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 71,
            'tid' => 36,
            'name' => 'Rücksichtnahme',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 3
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 72,
            'tid' => 36,
            'name' => 'Selbstbehauptung',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 1
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 73,
            'tid' => 37,
            'name' => 'Empfindsamkeit',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 4
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 74,
            'tid' => 37,
            'name' => 'Belastbarkeit',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 2
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 75,
            'tid' => 38,
            'name' => 'Solidarität',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 4
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 76,
            'tid' => 38,
            'name' => 'Eingenverantwortnung',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 2
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 77,
            'tid' => 39,
            'name' => 'Bedürftigkeit',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 4
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 78,
            'tid' => 39,
            'name' => 'Unabhängigkeit',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 2
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 79,
            'tid' => 40,
            'name' => 'Mitgefühl',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 4
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 80,
            'tid' => 40,
            'name' => 'Abgrenzung',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 2
        ]);

         DB::table('sub_categories')->insert([
            'sub_id' => 81,
            'tid' => 41,
            'name' => 'Rücksichtnahme',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 3
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 82,
            'tid' => 41,
            'name' => 'Selbstbehauptung',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 1
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 83,
            'tid' => 42,
            'name' => 'Bedürftigkeit',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 4
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 84,
            'tid' => 42,
            'name' => 'Unabhängigkeit',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 2
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 85,
            'tid' => 43,
            'name' => 'Empfindsamkeit',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 4
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 86,
            'tid' => 43,
            'name' => 'Belastbarkeit',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 2
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 87,
            'tid' => 44,
            'name' => 'Solidarität',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 4
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 88,
            'tid' => 44,
            'name' => 'Eingenverantwortnung',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 2
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 89,
            'tid' => 45,
            'name' => 'Freiheit',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 3
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 90,
            'tid' => 45,
            'name' => 'Sicherheit',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 1
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 91,
            'tid' => 46,
            'name' => 'Vertrauen',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 3
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 92,
            'tid' => 46,
            'name' => 'Kontrolle',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 1
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 93,
            'tid' => 47,
            'name' => 'Unterordnung',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 4
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 94,
            'tid' => 47,
            'name' => 'Emanzipation',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 2
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 95,
            'tid' => 48,
            'name' => 'Emotionalität',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 3
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 96,
            'tid' => 48,
            'name' => 'Rationalität',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 1
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 97,
            'tid' => 49,
            'name' => 'Lust',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 3
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 98,
            'tid' => 49,
            'name' => 'Disziplin',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 1
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 99,
            'tid' => 50,
            'name' => 'Mitgefühl',
            'parameter1' => 'ja_x1,ja_y1',
            'parameter2' => 'eherja_x1,eherja_y1',
            'quadrant' => 4
        ]);

        DB::table('sub_categories')->insert([
            'sub_id' => 100,
            'tid' => 50,
            'name' => 'Abgrenzung',
            'parameter1' => 'ja_x2,ja_y2',
            'parameter2' => 'eherja_x2,eherja_y2',
            'quadrant' => 2
        ]);










    }
}

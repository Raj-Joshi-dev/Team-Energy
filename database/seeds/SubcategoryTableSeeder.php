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
    }
}

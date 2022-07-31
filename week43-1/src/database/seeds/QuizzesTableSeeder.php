<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizzesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $initData = [];
        Carbon::setTestNow('2022-01-01 00:00:00');
        $now = Carbon::now();
        for ($i = 1; $i < 20; $i++) {
            $initData[] = [
                'id' => $i,
                'name' => 'name' . (string)$i,
                'sort_order' => $i,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        DB::table('quizzes')->insert($initData);
    }
}

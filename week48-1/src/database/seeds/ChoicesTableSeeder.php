<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoicesTableSeeder extends Seeder
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
        for ($i = 1; $i < 58; $i++) {
            $initData[] = [
                'id' => $i,
                'description' => 'description' . (string)$i,
                'is_collect' => $i % 3 === 0, // 余りなしを正解にする
                'quiz_id' => (int)ceil($i / 3), // 初期は選択肢を3つずつ
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        DB::table('choices')->insert($initData);
    }
}

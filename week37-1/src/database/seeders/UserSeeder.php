<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        for ($i = 1; $i < 30; $i++) {
            User::create([
                'family_name' => Str::random(5),
                'first_name' => Str::random(5),
                'family_name_hira' => Str::random(5),
                'first_name_hira' => Str::random(5),
                'email' => "test+${i}@posse-ap.com",
                'password' => Hash::make('password'),
                'generation' => ($i % 2) + 1,
            ]);
        }
    }
}

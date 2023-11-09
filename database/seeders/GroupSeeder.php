<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("grupos")->insert([
            [
                "id" => 1,
                "group_id" => env("TELEGRAM_GROUP_TEST_ID"),
                "channel_id" => 1,
            ]
        ]);
    }
}

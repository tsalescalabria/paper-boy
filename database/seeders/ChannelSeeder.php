<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("channels")->insert([
            [
                "id" => 1,
                "name" => "Telegram",
            ],
            [
                "id"=> 2,
                "name"=> "Discord",
            ],
        ]);
    }
}

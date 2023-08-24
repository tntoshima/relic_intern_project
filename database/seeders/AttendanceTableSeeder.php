<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class AttendanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('attendance')->insert([
            [
                'club_id'=>'1',
                'member_id'=>'1',
                'date'=>'20220824'
            ],
        ]);
    }
}

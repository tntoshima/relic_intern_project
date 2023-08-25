<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AffiliationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('affiliation')->insert([
            [
                'club_id'=>'1',
                'member_id'=>'1',
                'role'=>'teacher'
            ],
            [
                'club_id'=>'1',
                'member_id'=>'2',
                'role'=>'student'
            ],
            [
                'club_id'=>'1',
                'member_id'=>'3',
                'role'=>'parent'
            ],
            [
                'club_id'=>'1',
                'member_id'=>'4',
                'role'=>'parent'
            ],
            [
                'club_id'=>'1',
                'member_id'=>'5',
                'role'=>'parent'
            ],
            [
                'club_id'=>'1',
                'member_id'=>'6',
                'role'=>'parent'
            ],
            [
                'club_id'=>'1',
                'member_id'=>'7',
                'role'=>'parent'
            ],
            [
                'club_id'=>'1',
                'member_id'=>'8',
                'role'=>'parent'
            ],
            [
                'club_id'=>'1',
                'member_id'=>'9',
                'role'=>'parent'
            ],
            [
                'club_id'=>'1',
                'member_id'=>'10',
                'role'=>'parent'
            ],
            [
                'club_id'=>'2',
                'member_id'=>'2',
                'role'=>'teacher'
            ],
            [
                'club_id'=>'3',
                'member_id'=>'3',
                'role'=>'teacher'
            ],
            [
                'club_id'=>'4',
                'member_id'=>'3',
                'role'=>'teacher'
            ],
        ]);
    }
}

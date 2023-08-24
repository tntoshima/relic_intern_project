<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clubs')->insert([
            [
                'location_name' => 'hamamatsu',
                'name' => 'soccer',
            ],
            [
                'location_name' => 'hamamatsu',
                'name' => 'baseball',
            ],
            [
                'location_name' => 'kagawa',
                'name' => 'soccer',
            ],
            [
                'location_name' => 'kagawa',
                'name' => 'baseball',
            ],

        ]);
    }
}


<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class AccountingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('accounting')->insert([
            [
                'club_id' => '1',
                'term' => '8',
                'monthly_fee' => '100',
                'space_cost'=> '100',
                'fixture_cost'=> '100',
                'insurance_cost'=> '100',
                'subsidy'=> '100',
            ],
            [
                'club_id' => '1',
                'term' => '9',
                'monthly_fee' => '200',
                'space_cost'=> '200',
                'fixture_cost'=> '200',
                'insurance_cost'=> '200',
                'subsidy'=> '200',
            ],
            [
                'club_id' => '3',
                'term' => '8',
                'monthly_fee' => '300',
                'space_cost'=> '300',
                'fixture_cost'=> '300',
                'insurance_cost'=> '300',
                'subsidy'=> '300',
            ],
        ]);
    }
}
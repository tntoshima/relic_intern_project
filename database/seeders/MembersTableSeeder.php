<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            [
                'name' => 'toshima',
                'mail_address' => 'toshima@gmail.com',
                'password' => 'toshima',
            ],
            [
                'name' => 'yamanaka',
                'mail_address' => 'yamanaka@gmail.com',
                'password' => 'yamanaka',
            ],
            [
                'name' => 'sugiyama',
                'mail_address' => 'sugiyama@gmail.com',
                'password' => 'sugiyama',
            ],
        ]);
    }
}







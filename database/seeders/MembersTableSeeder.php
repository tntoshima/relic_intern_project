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
            [
                'name' => 'tanaka',
                'mail_address' => 'tanaka@gmail.com',
                'password' => 'tanaka',
            ],
            [
                'name' => 'kishita',
                'mail_address' => 'kishita@gmail.com',
                'password' => 'kishita',
            ],
            [
                'name' => 'ujie',
                'mail_address' => 'ujie@gmail.com',
                'password' => 'ujie',
            ],
            [
                'name' => 'watanabe',
                'mail_address' => 'watanabe@gmail.com',
                'password' => 'watanabe',
            ],
            [
                'name' => 'oba',
                'mail_address' => 'oba@gmail.com',
                'password' => 'oba',
            ],
            [
                'name' => 'konagai',
                'mail_address' => 'konagai@gmail.com',
                'password' => 'konagai',
            ],
            [
                'name' => 'takai',
                'mail_address' => 'takai@gmail.com',
                'password' => 'takai',
            ],
        ]);
    }
}







<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        $this->call
        (MembersTableSeeder::class);
        $this->call
        (ClubsTableSeeder::class);
        $this->call
        (AffiliationTableSeeder::class);
        $this->call
        (AttendanceTableSeeder::class);
        $this->call
        (AccountingTableSeeder::class);
    }
}

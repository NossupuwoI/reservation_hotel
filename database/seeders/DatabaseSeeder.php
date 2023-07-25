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
        $this->call(LaratrustSeeder::class);
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Admin',
             'email' => 'admin@gmail.com',
             'password' => 'admin',
             'photo' => 'http://localhost:8000/storage/uploads/images/client/M3iGM1NqmrF02V3IoSJolmDCP3yBGlozoMyyBLbv.jpg',

            ]);
    }
}

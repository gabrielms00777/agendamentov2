<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin',
            'password' => 'admin',
            'type' => 'admin',
        ]);
        User::factory()->create([
            'name' => 'Professional',
            'email' => 'prof@prof',
            'password' => 'admin',
            'type' => 'profissional',
        ]);
        User::factory()->create([
            'name' => 'Client',
            'email' => 'client@client',
            'password' => 'admin',
            'type' => 'client',
        ]);
    }
}

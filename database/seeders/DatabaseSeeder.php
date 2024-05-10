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
            'type' => 'professional',
        ]);
        User::factory()->create([
            'name' => 'Client',
            'email' => 'client@client',
            'password' => 'admin',
            'type' => 'client',
        ]);

        User::factory(30)->create();
    }
}

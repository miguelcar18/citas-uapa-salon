<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory()->create([
            'name' => 'Propietaria Uapa',
            'email' => 'propietaria@uapasalon.com',
            //'role' => 'owner',
            'password' => bcrypt('password'),
        ]);

        User::factory()->create([
            'name' => 'Trabajadora Uapa',
            'email' => 'trabajadora@uapasalon.com',
            //'role' => 'worker',
            'password' => bcrypt('password'),
        ]);

        User::factory()->create([
            'name' => 'Cliente Uapa',
            'email' => 'cliente@uapasalon.com',
            //'role' => 'client',
            'password' => bcrypt('password'),
        ]);
    }
}

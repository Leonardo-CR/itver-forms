<?php

namespace Database\Seeders;

use App\Models\Aviso;
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
            'name' => 'Leo Rosas',
            'email' => 'leo@leo.com',
            'password' => bcrypt('12345'),
        ]);
        Aviso::factory(20)->create();
    }
}

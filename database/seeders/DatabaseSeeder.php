<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Shop\Database\Seeders\ShopDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        if ($this->command->confirm('Do you want to refresh migration before seeding it will clear all old data?')) {
            $this->command->call('migrate:fresh');
            $this->command->info('Migration refreshed successfully.');
        }

        User::factory()->create();
        $this->command->info('User created successfully.');

        if ($this->command->confirm('Do you want to seed the shop database?')) {
            $this->call(ShopDatabaseSeeder::class);
        }
    }
}

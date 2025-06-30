<?php
//terbaru 30/06/2025
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
        //terbaru 30/6/2025
        // User::factory(10)->create();
        $this->call(UsersSeeder::class);
        $this->call(LevelsSeeder::class);
        $this->call(TypeOfServicesClass::class);
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

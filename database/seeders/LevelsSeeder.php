<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Levels;

class levelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    //30/06/2025 membuat data dummy level seeder
    public function run(): void
    {
        $levels = [

            [
                'name' => 'administrastor'
            ],
            [
                'name' => 'Operator'
            ],
            [
                'name' => 'Leader'
            ],
        ];


        levels::insert($levels);
    }
}

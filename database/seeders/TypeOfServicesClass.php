<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeOfServices;

//30/06/2025
class TypeOfServicesClass extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeOfServices::insert([
            [
                'service_name' => 'Hanya Cuci',
                'price' => 5000,
                'description' => 'service hanya cuci reguler'
            ],
            [
                'service_name' => 'Hanya Gosok',
                'price' => 4000,
                'description' => 'service ini hanya gosok reguler'
            ],
            [
                'service_name' => 'Cuci dan Gosok',
                'price' => 8000,
                'description' => 'service hanya cuci reguler'
            ],
            [
                'service_name' => 'Hanya Cuci',
                'price' => 5000,
                'description' => 'service hanya cuci reguler'
            ],
        ]);
    }
}

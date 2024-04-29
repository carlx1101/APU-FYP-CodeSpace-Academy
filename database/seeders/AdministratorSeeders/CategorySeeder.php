<?php

namespace Database\Seeders\AdministratorSeeders;

use Illuminate\Database\Seeder;
use App\Models\AdministratorModels\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Information Technology (IT)',
            'status' => 1  
        ]);
    }
}

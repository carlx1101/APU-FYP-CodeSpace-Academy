<?php

namespace Database\Seeders\AdministratorSeeders;

use Illuminate\Database\Seeder;
use App\Models\AdministratorModels\Category;
use App\Models\AdministratorModels\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          // Retrieve the category using Eloquent
          $category = Category::where('name', 'Information Technology (IT)')->first();

          // Check if category exists and add subcategories
          if ($category) {
              Subcategory::create([
                  'name' => 'Programming',
                  'category_id' => $category->id,
                  'status' => 1
              ]);

              Subcategory::create([
                  'name' => 'Networking',
                  'category_id' => $category->id,
                  'status' => 1
              ]);

              Subcategory::create([
                  'name' => 'Cloud Computing',
                  'category_id' => $category->id,
                  'status' => 1
              ]);
        }
    }
}

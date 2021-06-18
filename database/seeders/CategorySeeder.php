<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $categories = ['Mobile & Gadgets', 'Home Appliances', 'Fashion Accessories', 'Health & Beauty', 'Bikes & Car'];
        foreach ($categories as $category){
            Category::create([
                'name' => $category,
            ]);
        }
        Category::factory()->times(20)->create();
    }
}

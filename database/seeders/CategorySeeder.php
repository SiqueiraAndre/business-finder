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
    public function run()
    {
        Category::create(['title' => 'Pizza']);
        Category::create(['title' => 'Auto']);
        Category::create(['title' => 'Beauty and Fitness']);
        Category::create(['title' => 'Entertainment']);
        Category::create(['title' => 'Food and Dining']);
        Category::create(['title' => 'Health']);
        Category::create(['title' => 'Sports']);
        Category::create(['title' => 'Travel']);
    }
}

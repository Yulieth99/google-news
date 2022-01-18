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
        $category = new Category();
        $category -> category_name = 'Entretenimiento';
        $category -> save();

        $category = new Category();
        $category -> category_name = 'Tecnología';
        $category -> save();
        
        $category = new Category();
        $category -> category_name = 'Salud';
        $category -> save();

        $category = new Category();
        $category -> category_name = 'Deportes';
        $category -> save();

        $category = new Category();
        $category -> category_name = 'Cultura';
        $category -> save();

        $category = new Category();
        $category -> category_name = 'Ciencia';
        $category -> save();
    }
}

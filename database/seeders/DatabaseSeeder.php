<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this -> call(WebSiteSeeder::class);
       $this -> call(CategorySeeder::class);
       News::factory(30)->create();

    }
}

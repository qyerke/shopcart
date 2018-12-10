<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category([
            'title' => 'Computers & Laptops',
            'popular' => '1',
            'icon' => '/frontend/images/popular_2.png',
        ]);
        $category->save();
        $category = new Category([
            'title' => 'Cameras & Photos',
        ]);
        $category->save();
        $category = new Category([
            'title' => 'Hardware',
        ]);
        $category->save();
        $category = new Category([
            'title' => 'Smartphones & Tablets',
            'popular' => '1',
            'icon' => '/frontend/images/popular_1.png',
        ]);
        $category->save();
        $category = new Category([
            'title' => 'TV & Audio',
            'popular' => '1',
            'icon' => '/frontend/images/popular_5.png',
        ]);
        $category->save();
        $category = new Category([
            'title' => 'Gadgets',
        ]);
        $category->save();
        $category = new Category([
            'title' => 'Car Electronics',
        ]);
        $category->save();
        $category = new Category([
            'title' => 'Video Games & Consoles',
            'popular' => '1',
            'icon' => '/frontend/images/popular_4.png',
        ]);
        $category->save();
        $category = new Category([
            'title' => 'Accessories',
            'popular' => '1',
            'icon' => '/frontend/images/popular_3.png',
        ]);
        $category->save();
    }
}

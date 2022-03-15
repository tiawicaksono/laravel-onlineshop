<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            [
                "category_name" => "Electronic",
                "status" => true
            ],
            [
                "category_name" => "Computer & Accessories",
                "status" => true
            ],
            [
                "category_name" => "Mobile & Accessories",
                "status" => true
            ],
            [
                "category_name" => "Automotive",
                "status" => true
            ],
            [
                "category_name" => "Men Clothes",
                "status" => true
            ],
            [
                "category_name" => "Men Shoes",
                "status" => true
            ],
            [
                "category_name" => "Men Bags",
                "status" => true
            ],
            [
                "category_name" => "Fashion Accessories",
                "status" => true
            ],
            [
                "category_name" => "Food & Beverages",
                "status" => true
            ],
            [
                "category_name" => "Health",
                "status" => true
            ],
            [
                "category_name" => "Hobby and Collection",
                "status" => true
            ],
            [
                "category_name" => "Beauty & Care",
                "status" => true
            ],
            [
                "category_name" => "Home & Living",
                "status" => true
            ],
            [
                "category_name" => "Women Clothes",
                "status" => true
            ],
            [
                "category_name" => "Muslim Fashion",
                "status" => true
            ],
            [
                "category_name" => "Baby & Kids Fashion",
                "status" => true
            ],
            [
                "category_name" => "Mom & Baby",
                "status" => true
            ],
            [
                "category_name" => "Women Shoes",
                "status" => true
            ],
            [
                "category_name" => "Women Bags",
                "status" => true
            ],
            [
                "category_name" => "Sport & Outdoor",
                "status" => true
            ],
            [
                "category_name" => "Photography",
                "status" => true
            ],
            [
                "category_name" => "Stationery & Books",
                "status" => true
            ],
            [
                "category_name" => "Souvenir & Party Supplies",
                "status" => true
            ],
        ]);
    }
}

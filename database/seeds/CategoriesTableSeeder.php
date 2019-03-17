<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            $category1 = [
                'name' => '食べ物',
                'region_id' => '13'
            ],
            $category2 = [
                'name' => '生物',
                'region_id' => '13'
            ],
            $category3 = [
                'name' => '文化・歴史',
                'region_id' => '2'
            ],
            $category4 = [
                'name' => '雑学',
                'region_id' => '3'
            ],
            $category5 = [
                'name' => '雑学',
                'region_id' => '1'
            ],
        ];

        foreach($categories as $category) {
            DB::table('categories')->insert($category);
        }
    }
}

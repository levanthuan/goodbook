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
        $faker = Faker\Factory::create();
        $limit = 20;

        for ($i=0; $i < 10; $i++){
            DB::table('categories')->insert([
                'parent_category_id' => 0,
                'name' => $faker->name,
                'rank' => 1,
                'sort' => $i,
            ]);
        }

        for ($i=0; $i < $limit; $i++){
            DB::table('categories')->insert([
                'parent_category_id' => $faker->numberBetween(1, 10),
                'name' => $faker->name,
                'rank' => 2,
                'sort' => $i,
            ]);
        }
    }
}

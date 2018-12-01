<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 100;

        for ($i=0; $i < $limit; $i++){
            DB::table('books')->insert([
                'name' => $faker->name,
                'author' => $faker->name,
                'category_id' => $faker->numberBetween(1, 20),
                'publisher' => $faker->name,
                'title_orig' => $faker->title,
                'translator' => $faker->name,
                'country' => $faker->country,
                'language' => $faker->languageCode,
                'subject' => $faker->numberBetween(1, 20),
                'pub_date' => $faker->date,
                'type' => 1,
                'page' => 100,
            ]);
        }
    }
}

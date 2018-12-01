<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 10;
        DB::table('users')->insert([
            'name' => 'thuanlv',
            'email' => 'levanthuankmhd@gmail.com',
            'password' => bcrypt('123'),
            'name_display' => 'levanthuan',
            'birthday' => '1995-02-09',
            'address' => 'Hải Dương',
            'phone_number' => '0966965262',
            'role' => 0,
        ]);
        for ($i=0; $i < $limit; $i++){
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->name,
                'password' => bcrypt('123'),
                'name_display' => $faker->name,
                'birthday' => $faker->date,
                'address' => $faker->address,
                'phone_number' => $faker->isbn10,
                'role' => 1,
            ]);
        }
    }
}

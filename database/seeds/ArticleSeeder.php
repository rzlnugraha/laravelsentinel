<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 20; $i++) {
            $faker = Faker::create('id_ID');
            DB::table('articles')->insert([
                'title' => $faker->sentence($nbWords = 2, $variableNbWords = true),
                'content' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'author' => $faker->name($gender = 'male' | 'female'),
            ]);
        }
    }
}

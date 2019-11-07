<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 20; $i++) { 
            $faker = Faker::create('id_ID');
            DB::table('books')->insert([
                'judul_buku' => $faker->sentence($nbWords = 2, $variableNbWords = true),
                'pengarang' => $faker->name($gender = 'male' | 'female'),
                'penerbit' => $faker->company,
                'tahun_terbit' => $faker->year($max = 'now'),
            ]);
        }
    }
}

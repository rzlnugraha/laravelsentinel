<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $angka = 5;
        for ($i = 1; $i < 20; $i++) {
            Task::create([
                'user_id' => 1,
                'name' => 'Task '.$angka++,
                'description' => 'Deskripsi '.$angka++
            ]);
        }
    }
}

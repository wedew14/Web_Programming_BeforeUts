<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Thread;
use App\Models\Author;
use App\Models\Category;
use Faker\Factory as Faker;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');

        foreach (range(1, 21) as $index) {
            Thread::create([
                'title' => $faker->unique()->sentence(3),
                'detail' => $faker->paragraph,
                'author_id' => Author::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Author;
use App\Models\Category;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $cat = Category::all();
        foreach(range(1,3) as $index){
            Author::create([
                'name' => $faker->name,
                'category_id'=>$cat->random()->id
            ]);
        }
            
    }
}

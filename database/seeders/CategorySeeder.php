<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $interactiveMultimedia = Category::create([
            'name' => 'Interactive Multimedia',
            'parent_id' => null
        ]);

        $interactiveMultimedia->subcategories()->createMany([
            ['name'=>'Human and Computer Interaction'],
            ['name'=>'User Experience'],
            ['name'=>'User Experience for Digital Immersive Technology']
        ]);

        $softwareEngineering = Category::create([
            'name' => 'Software Engineering',
            'parent_id' => null
        ]);

        $softwareEngineering->subcategories()->createMany([
            ['name'=> 'Pattern Software Design'],
            ['name'=> 'Agile Software Development'],
            ['name'=> 'Code Reengineering']
        ]);
    }
}

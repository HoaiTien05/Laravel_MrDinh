<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Faker;

class productssTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('products')->insert([
                'name' => $faker->word,
                'price' => $faker->numberBetween(100, 10000),
                'image' => $faker->imageUrl(640, 480, 'technics'),
                'cate_id' => $faker->numberBetween(1, 10), // Giả sử bạn có 10 categories
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

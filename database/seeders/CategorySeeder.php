<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $generator)
    {
        $categories = ['Бизнес', 'Финансы', 'Политика', 'Технологии', 'Спорт'];

        foreach ($categories as $category) {
            \DB::table('categories')
                ->insert([
                    'category' => $category,
                    'created_at' => $generator->dateTimeThisYear()
                ]);
        }
    }
}

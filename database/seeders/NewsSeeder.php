<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $generator)
    {
        for ($i = 0; $i < 20; $i++) {
            \DB::table('news')
                ->insert([
                    'category_id' => $generator->numberBetween(1, 5),
                    'source_id' => $generator->numberBetween(1, 10),
                    'status_id' => $generator->numberBetween(1, 5),
                    'title' => $generator->unique()->text(50),
                    'content' => $generator->text(),
                    'image' => $generator->image('public/img',820,550, null, false),
                    'publish_date' => $generator->dateTimeThisYear(),
                    'created_at' => $generator->dateTimeThisYear()
                ]);
        }
    }
}

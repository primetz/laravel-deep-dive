<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Database\Seeder;

class SourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $generator)
    {
        for ($i = 0; $i < 10; $i++) {
            \DB::table('sources')
                ->insert([
                    'source' => $generator->unique()->company(),
                    'url' => $generator->unique()->url(),
                    'created_at' => $generator->dateTimeThisYear()
                ]);
        }
    }
}

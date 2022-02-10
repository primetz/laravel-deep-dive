<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $generator)
    {
        $statuses = ['publish', 'future', 'draft', 'pending', 'private'];

        foreach ($statuses as $status) {
            \DB::table('statuses')
                ->insert([
                    'status' => $status,
                    'created_at' => $generator->dateTimeThisYear()
                ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topic::truncate();
        Topic::create(['id' => 1, 't_name' => 'Work']);
        Topic::create(['id' => 2, 't_name' => 'Uni']);
        Topic::create(['id' => 3, 't_name' => 'Food']);
        Topic::create(['id' => 4, 't_name' => 'Fitness']);
        Topic::create(['id' => 5, 't_name' => 'Sport']);
        Topic::create(['id' => 6, 't_name' => 'Art']);
        Topic::create(['id' => 7, 't_name' => 'Series&Movies']);
        Topic::create(['id' => 8, 't_name' => 'Tech']);
        Topic::create(['id' => 9, 't_name' => 'Free time']);
    }
}

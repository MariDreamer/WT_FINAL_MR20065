<?php

namespace Database\Seeders;

use App\Models\Subtopic;
use Illuminate\Database\Seeder;

class SubtopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subtopic::truncate();
        Subtopic::create(['id' => 1, 'st_name' => 'Colleagues', 't_id' => 1]);
        Subtopic::create(['id' => 2, 'st_name' => 'Company party', 't_id' => 1]);
        Subtopic::create(['id' => 3, 'st_name' => 'Issues', 't_id' => 1]);
        Subtopic::create(['id' => 4, 'st_name' => 'Exams', 't_id' => 2]);
        Subtopic::create(['id' => 5, 'st_name' => 'Breaks', 't_id' => 2]);
        Subtopic::create(['id' => 6, 'st_name' => 'In class', 't_id' => 2]);
        Subtopic::create(['id' => 7, 'st_name' => 'Cooking', 't_id' => 3]);
        Subtopic::create(['id' => 8, 'st_name' => 'Restaurants', 't_id' => 3]);
        Subtopic::create(['id' => 9, 'st_name' => 'Party snacks', 't_id' => 3]);
        Subtopic::create(['id' => 10, 'st_name' => 'Exercises', 't_id' => 4]);
        Subtopic::create(['id' => 11, 'st_name' => 'In the gym', 't_id' => 4]);
        Subtopic::create(['id' => 12, 'st_name' => 'Fitnes snacks', 't_id' => 4]);
        Subtopic::create(['id' => 13, 'st_name' => 'Football', 't_id' => 5]);
        Subtopic::create(['id' => 14, 'st_name' => 'Volleyball', 't_id' => 5]);
        Subtopic::create(['id' => 15, 'st_name' => 'Hockey', 't_id' => 5]);
        Subtopic::create(['id' => 16, 'st_name' => 'Cybersports', 't_id' => 5]);
        Subtopic::create(['id' => 17, 'st_name' => 'Drawing&Painting', 't_id' => 6]);
        Subtopic::create(['id' => 18, 'st_name' => 'Craft', 't_id' => 6]);
        Subtopic::create(['id' => 19, 'st_name' => 'Storytelling', 't_id' => 6]);
        Subtopic::create(['id' => 20, 'st_name' => 'Other', 't_id' => 6]);
        Subtopic::create(['id' => 21, 'st_name' => 'New', 't_id' => 7]);
        Subtopic::create(['id' => 22, 'st_name' => 'Netflix', 't_id' => 7]);
        Subtopic::create(['id' => 23, 'st_name' => 'Sci-Fi', 't_id' => 7]);
        Subtopic::create(['id' => 24, 'st_name' => 'Mystery', 't_id' => 7]);
        Subtopic::create(['id' => 25, 'st_name' => 'Documentary', 't_id' => 7]);
        Subtopic::create(['id' => 26, 'st_name' => 'Crime', 't_id' => 7]);
        Subtopic::create(['id' => 27, 'st_name' => 'Action', 't_id' => 7]);
        Subtopic::create(['id' => 28, 'st_name' => 'Newest', 't_id' => 8]);
        Subtopic::create(['id' => 29, 'st_name' => 'Smartphones', 't_id' => 8]);
        Subtopic::create(['id' => 30, 'st_name' => 'Laptops', 't_id' => 8]);
        Subtopic::create(['id' => 31, 'st_name' => 'Conspiracy', 't_id' => 8]);
        Subtopic::create(['id' => 32, 'st_name' => 'Travelling', 't_id' => 9]);
        Subtopic::create(['id' => 33, 'st_name' => 'With friends', 't_id' => 9]);
        Subtopic::create(['id' => 34, 'st_name' => 'Hobbies', 't_id' => 9]);
        Subtopic::create(['id' => 35, 'st_name' => 'Lifehacks', 't_id' => 9]);



    }
}

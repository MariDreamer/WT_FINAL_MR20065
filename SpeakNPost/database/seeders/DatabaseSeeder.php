<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Subtopic;
use App\Models\Topic;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Schema::disableForeignKeyConstraints();
        $this->call(TopicSeeder::class);
        $this->call(SubtopicSeeder::class);


        // Topic::truncate();
        // DB::table('topics')->insert(['id' => 1, 't_name' => 'Work']);
        // DB::table('topics')->insert(['id' => 2, 't_name' => 'Uni']);
        // DB::table('topics')->insert(['id' => 3, 't_name' => 'Food']);
        // DB::table('topics')->insert(['id' => 4, 't_name' => 'Fitness']);
        // DB::table('topics')->insert(['id' => 5, 't_name' => 'Sport']);
        // DB::table('topics')->insert(['id' => 6, 't_name' => 'Art']);
        // DB::table('topics')->insert(['id' => 7, 't_name' => 'Series&Movies']);
        // DB::table('topics')->insert(['id' => 8, 't_name' => 'Tech']);
        // DB::table('topics')->insert(['id' => 9, 't_name' => 'Free time']);



        // Subtopics::truncate();
        // DB::table('subtopics')->insert(['id' => 1, 'st_name' => 'Colleagues', 't_name' => 'Work']);
        // DB::table('subtopics')->insert(['id' => 2, 'st_name' => 'Company party', 't_name' => 'Work']);
        // DB::table('subtopics')->insert(['id' => 3, 'st_name' => 'Issues', 't_name' => 'Work']);
        // DB::table('subtopics')->insert(['id' => 4, 'st_name' => 'Exams', 't_name' => 'Uni']);
        // DB::table('subtopics')->insert(['id' => 5, 'st_name' => 'Breaks', 't_name' => 'Uni']);
        // DB::table('subtopics')->insert(['id' => 6, 'st_name' => 'In class', 't_name' => 'Uni']);
        // DB::table('subtopics')->insert(['id' => 7, 'st_name' => 'Cooking', 't_name' => 'Food']);
        // DB::table('subtopics')->insert(['id' => 8, 'st_name' => 'Restaurants', 't_name' => 'Food']);
        // DB::table('subtopics')->insert(['id' => 9, 'st_name' => 'Party snacks', 't_name' => 'Food']);
        // DB::table('subtopics')->insert(['id' => 10, 'st_name' => 'Exercises', 't_name' => 'Fitness']);
        // DB::table('subtopics')->insert(['id' => 11, 'st_name' => 'In the gym', 't_name' => 'Fitness']);
        // DB::table('subtopics')->insert(['id' => 12, 'st_name' => 'Fitnes snacks', 't_name' => 'Fitness']);
        // DB::table('subtopics')->insert(['id' => 13, 'st_name' => 'Football', 't_name' => 'Sport']);
        // DB::table('subtopics')->insert(['id' => 14, 'st_name' => 'Volleyball', 't_name' => 'Sport']);
        // DB::table('subtopics')->insert(['id' => 15, 'st_name' => 'Hockey', 't_name' => 'Sport']);
        // DB::table('subtopics')->insert(['id' => 16, 'st_name' => 'Cybersports', 't_name' => 'Sport']);
        // DB::table('subtopics')->insert(['id' => 17, 'st_name' => 'Drawing&Painting', 't_name' => 'Art']);
        // DB::table('subtopics')->insert(['id' => 18, 'st_name' => 'Craft', 't_name' => 'Art']);
        // DB::table('subtopics')->insert(['id' => 19, 'st_name' => 'Storytelling', 't_name' => 'Art']);
        // DB::table('subtopics')->insert(['id' => 20, 'st_name' => 'Other', 't_name' => 'Art']);
        // DB::table('subtopics')->insert(['id' => 21, 'st_name' => 'New', 't_name' => 'Series&Movies']);
        // DB::table('subtopics')->insert(['id' => 22, 'st_name' => 'Netflix', 't_name' => 'Series&Movies']);
        // DB::table('subtopics')->insert(['id' => 23, 'st_name' => 'Sci-Fi', 't_name' => 'Series&Movies']);
        // DB::table('subtopics')->insert(['id' => 24, 'st_name' => 'Mystery', 't_name' => 'Series&Movies']);
        // DB::table('subtopics')->insert(['id' => 25, 'st_name' => 'Documentary', 't_name' => 'Series&Movies']);
        // DB::table('subtopics')->insert(['id' => 26, 'st_name' => 'Crime', 't_name' => 'Series&Movies']);
        // DB::table('subtopics')->insert(['id' => 27, 'st_name' => 'Action', 't_name' => 'Series&Movies']);
        // DB::table('subtopics')->insert(['id' => 28, 'st_name' => 'Newest', 't_name' => 'Tech']);
        // DB::table('subtopics')->insert(['id' => 29, 'st_name' => 'Smartphones', 't_name' => 'Tech']);
        // DB::table('subtopics')->insert(['id' => 30, 'st_name' => 'Laptops', 't_name' => 'Tech']);
        // DB::table('subtopics')->insert(['id' => 31, 'st_name' => 'Conspiracy', 't_name' => 'Tech']);
        // DB::table('subtopics')->insert(['id' => 32, 'st_name' => 'Travelling', 't_name' => 'Free time']);
        // DB::table('subtopics')->insert(['id' => 33, 'st_name' => 'With friends', 't_name' => 'Free time']);
        // DB::table('subtopics')->insert(['id' => 34, 'st_name' => 'Hobbies', 't_name' => 'Free time']);
        // DB::table('subtopics')->insert(['id' => 35, 'st_name' => 'Lifehacks', 't_name' => 'Free time']);



        // Schema::enableForeignKeyConstraints();


        User::truncate();

        Schema::enableForeignKeyConstraints();


        User::create(array('username' => 'Administrator',
                           'email' => 'admin@speaknpost.soci', 
                           'password' => bcrypt('mr20065'),
                           'role' => 1));  
    }
}

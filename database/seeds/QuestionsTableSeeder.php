<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
       'title' => 'How to Use Git and Github',
       'body' => 'Its very easy to use if u get any problems then get through the documentation 	   of git ans github',
       'tags' =>'git,github',
   ]);
      DB::table('questions')->insert([
       'title' => 'What will i learn in codetrek',
       'body' => 'you will learn a lot of things here u jst need to put ur max.effort and every1 is there to help you',
       'tags' =>'ColoredCow',
   ]);
   DB::table('questions')->insert([
       'title' => 'Where can i apply for codetrek',
       'body' => 'in ur own college dumbass',
       'tags' =>'Codetrek',
   ]);

    }
}

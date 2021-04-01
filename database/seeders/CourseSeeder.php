<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=3; $i++)
        {
          for($j=1; $j<=6; $j++) 
          {
           Course::create([
               'category_id'=> $i,
               'trainer_id'=>rand(1, 5),
               'name'=>"course num $j cat num $i",
               'desc'=>"In this course, you'll explore the basic structure of a web application, and how a web browser interacts with a web server.",
               'content'=>"In this course, you'll explore the basic structure of a web application, and how a web browser interacts with a web server. You'll be introduced to the request/response cycle, including GET/POST/Redirect. You'll also gain an introductory understanding of Hypertext Markup Language (HTML), as well as the basic syntax and data structures of the PHP language, variables, logic, iteration, arrays, error handling, and superglobal variables, among other elements. An introduction to Cascading Style Sheets (CSS) will allow you to style markup for webpages.",
               'price'=>rand(1000,5000),
               'img'=>"$i$j.png"
           ]);  
          }
      }
    }
}

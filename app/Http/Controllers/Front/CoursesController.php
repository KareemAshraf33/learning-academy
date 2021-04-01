<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
class CoursesController extends Controller
{
    public function category($id)
    {
       $data['category']=Category::where('id',$id)->first(); 
       $data['courses']=Course::where('category_id',$id)->get();
        
        return view('front/courses/category')->with($data);
    }
    
    public function show($id,$courseid)
    {
        $data['course']=Course::where('id',$courseid)->first();
        
        return view('front/courses/show')->with($data);
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Cat;
use App\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function cat($id){

        $data['cat'] = Cat::findOrFail($id);
        $data['courses'] = Course::where('cat_id', $id)->paginate(2);

        return view('front.courses.cat')->with($data);
    }

    public function show($id, $course_id){

        $data['course'] = Course::findOrFail($course_id);
        return view('front.courses.show')->with($data);
    }
}
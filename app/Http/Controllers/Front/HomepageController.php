<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Course;
use App\SiteContent;
use App\Student;
use App\Trainer;
use App\Testimonial;
use Illuminate\Http\Request;


class HomepageController extends Controller
{
    //
    public function index()
    {
        $data['banner_content'] = SiteContent::select('content')->where('name', 'banner_content')->first();
        $data['courses_content'] = SiteContent::select('content')->where('name', 'courses_content')->first();
        $data['courses'] = Course::select('id', 'name', 'small_desc', 'cat_id', 'trainer_id', 'img', 'price')->orderBy('id', 'desc')->take(3)->get();
        $data['courses_count'] = Course::count();
        $data['trainers_count'] = Trainer::count();
        $data['students_count'] = Student::count();

        $data['testimonials'] = Testimonial::select('name', 'specialty', 'desc', 'img')->get();

        return view('front/index')->with($data);
    }
}
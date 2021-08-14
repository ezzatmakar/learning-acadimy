<?php

namespace App\Http\Controllers\Admin;

use App\Cat;
use App\Student;
use App\Trainer;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data['cats'] = Cat::all()->sortByDesc('id');
        $data['trainers'] = Trainer::all()->sortByDesc('id');
        $data['students'] = Student::all()->sortByDesc('id');
        return view('admin.index')->with($data);
    }
}

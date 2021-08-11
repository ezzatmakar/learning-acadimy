<?php

namespace App\Http\Controllers\Admin;

use App\Cat;
use App\Trainer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['cats'] = Cat::all()->sortByDesc('id');
        $data['trainers'] = Trainer::all()->sortByDesc('id');
        return view('admin.index')->with($data);
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Settings;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data['settings'] = Settings::first();
        return view('front.contact')->with($data);
    }
}

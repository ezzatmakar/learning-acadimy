<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\NewsLetter;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function newsletter(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validate([
            'email' => 'required|email|max:191'
        ]);

        NewsLetter::create($data);
        return back();
    }
}

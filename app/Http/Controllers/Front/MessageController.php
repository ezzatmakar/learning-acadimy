<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NewsLetter;
use App\Message;

class MessageController extends Controller
{
    public function newsletter(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validate([
            'email' => 'required|email|max:191'
        ]);

        $newsletterInserted = NewsLetter::create($data);
        return back();
    }

    public function contactUsForm(Request $request): \Illuminate\Http\RedirectResponse
    {
	    $m_data = $request->validate([
		    'name' => 'required|max:191',
		    'phone' => 'required|max:191',
		    'mail' => 'required|email|max:191',
		    'subject' => 'nullable|max:191',
		    'message' => 'required'
	    ]);

	    $messageInsert = Message::create($m_data);

	    return back();
    }
}

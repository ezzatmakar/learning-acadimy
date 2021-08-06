<?php

namespace App\Http\Controllers\Front;

use App\Course;
use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;
use App\NewsLetter;
use App\Message;
use Illuminate\Support\Facades\DB;

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

	public function enroll(Request $request): \Illuminate\Http\RedirectResponse
	{
		$data = $request->validate([
			'name' => 'required|string|max:191',
			'mail' => 'required|email|max:191',
			'spec' => 'nullable|string|max:191',
			'course_id' => 'required|exists:courses,id'
		]);

		$student = Student::create([
			'name' => $data['name'],
			'email' => $data['mail'],
			'spec' => $data['spec']
		]);

		DB::table('course_student')->insert([
			'course_id' => $data['course_id'],
			'student_id' => $student->id,
			'created_at' => now(),
			'updated_at' => now()
		]);
		return back();
	}
}

<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $data['students'] = Student::select('id', 'name', 'email', 'spec')->paginate(10);
        return view('admin.students.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'nullable|string|max:50',
            'email' => 'required|email|max:191|unique:students',
            'spec' => 'nullable|string|max:50'
        ]);

        Student::create($data);
        return redirect(route('admin.students.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int id
     * @return Application|Factory|View
     */
    public function show($student_id)
    {
        $data['student'] = Student::findOrFail($student_id);
        return view('admin.students.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(int $id)
    {
        $data['student'] = Student::findOrFail($id);
        return view('admin.students.edit')->with($data);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:191',
            'spec' => 'nullable|string|max:50'
        ]);

        $old_student = Student::findOrFail($request->id);

        if ($old_student->email === $data['email']) {
            $old_student->update([
                'name' => $data['name'],
                'email' => $old_student->email,
                'spec' => $data['spec']
            ]);
        }

        $old_student->update($data);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function destroy(Request $request): RedirectResponse
    {
        Student::findOrFail($request->id)->delete();
        return back();
    }

    public function approve($id, $course_id): RedirectResponse
    {
        DB::table('course_student')->where(['student_id' => $id, 'course_id' => $course_id])->update([
            'status' => 'approve'
        ]);

        return back();
    }

    public function reject($id, $course_id): RedirectResponse
    {
        DB::table('course_student')->where(['student_id' => $id, 'course_id' => $course_id])->update([
            'status' => 'reject'
        ]);

        return back();
    }

    public function addCourse($student_id)
    {
        $student = Student::findOrFail($student_id);
        $data['student'] = $student;
        $old_courses = [];
        foreach ($student->courses as $c) {
            $old_courses[] = $c->id;
        }

        $data['courses'] = Course::select('id', 'name')->whereNotIn('id', $old_courses)->get();
        return view('admin.students.addCourse')->with($data);
    }

    public function storeCourse($id, Request $request)
    {
        $data = $request->validate([
            'course_id' => 'required|exists:courses,id'
        ]);
        DB::table('course_student')->insert([
            'student_id' => $id,
            'course_id' => $data['course_id']
        ]);

        return redirect(route('admin.students.show', $id));
    }
}

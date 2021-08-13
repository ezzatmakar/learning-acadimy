<?php

namespace App\Http\Controllers\Admin;

use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $data['students'] = Student::all()->sortByDesc('id');
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
            'name' => 'required|string|max:20'
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
    public function show($cat_id)
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
            'name' => 'required|string|max:20'
        ]);

        Student::findOrFail($request->id)->update($data);
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
}
